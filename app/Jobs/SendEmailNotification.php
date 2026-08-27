<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendEmailNotification implements ShouldQueue
{
    use Queueable;

    protected $user;
    protected $subject;
    protected $message;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user, string $subject, string $message)
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::raw($this->message, function ($message) {
            $message->to($this->user->email)
                    ->subject($this->subject);
        });
    }
}
