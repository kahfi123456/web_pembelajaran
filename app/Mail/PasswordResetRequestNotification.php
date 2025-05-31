<?php

namespace App\Mail;

use App\Models\Mahasiswa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PasswordResetRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $mahasiswa;

    public function __construct(Mahasiswa $mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }

    public function build()
    {
        return $this->subject('Permintaan Reset Password Baru')
                    ->view('emails.passwordrequest')
                    ->with(['mahasiswa' => $this->mahasiswa]);
    }
}