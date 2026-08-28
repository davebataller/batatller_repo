<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            if ($this->shouldReport($e)) {
                // Log detailed error information
                logger()->error('Exception occurred', [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTraceAsString(),
                    'user_id' => auth()->id(),
                    'url' => request()->url(),
                    'method' => request()->method(),
                ]);
            }
        });
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $e)
    {
        // Handle API errors
        if ($request->expectsJson()) {
            return response()->json([
                'error' => $e->getMessage(),
                'status' => 'error',
                'code' => $e->getCode(),
            ], 500);
        }

        // Handle specific exceptions
        if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            return response()->view('errors.404', [], 404);
        }

        if ($e instanceof \Illuminate\Auth\AuthenticationException) {
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }

        if ($e instanceof \Illuminate\Validation\ValidationException) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        return parent::render($request, $e);
    }
}