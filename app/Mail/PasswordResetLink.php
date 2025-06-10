<?php

namespace App\Mail;

use App\Models\Mahasiswa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PasswordResetLink extends Mailable
{
    use Queueable, SerializesModels;

    public $mahasiswa;
    public $token;

    public function __construct(Mahasiswa $mahasiswa, string $token)
    {
        $this->mahasiswa = $mahasiswa;
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Link Reset Password')
                    ->view('emails.password_reset_link')
                    ->with(['mahasiswa' => $this->mahasiswa, 'token' => $this->token]);
    }
}
