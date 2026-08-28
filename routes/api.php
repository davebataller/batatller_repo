<?php

use App\Http\Controllers\API\PostController as ApiPostController;
use App\Http\Controllers\API\UserController as ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API v1 Routes
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    // User endpoints
    Route::get('/users', [ApiUserController::class, 'index']);
    Route::get('/users/{user}', [ApiUserController::class, 'show']);
    Route::put('/users/{user}', [ApiUserController::class, 'update']);
    
    // Post endpoints
    Route::get('/posts', [ApiPostController::class, 'index']);
    Route::post('/posts', [ApiPostController::class, 'store']);
    Route::get('/posts/{post}', [ApiPostController::class, 'show']);
    Route::put('/posts/{post}', [ApiPostController::class, 'update']);
    Route::delete('/posts/{post}', [ApiPostController::class, 'destroy']);
    
    // Notification endpoints
    Route::get('/notifications', function (Request $request) {
        return response()->json($request->user()->notifications()->latest()->paginate(20));
    });
    
    // Search endpoints
    Route::get('/search', function (Request $request) {
        $query = $request->get('q');
        $users = \App\Models\User::where('name', 'like', "%{$query}%")->limit(10)->get();
        $posts = \App\Models\Post::where('content', 'like', "%{$query}%")->limit(10)->get();
        
        return response()->json([
            'users' => $users,
            'posts' => $posts,
        ]);
    });
});