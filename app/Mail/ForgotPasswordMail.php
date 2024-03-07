<?php

namespace App\Mail;

use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(Student $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('otp.forgot')
            ->with([
                'resetLink' => url('/reset-password/' . $this->user->reset_password_token)
            ]);
    }
}
