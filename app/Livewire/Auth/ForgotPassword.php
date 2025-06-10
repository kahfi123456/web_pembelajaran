<?php

namespace App\Livewire\Auth;

use App\Mail\PasswordResetRequestNotification;
use App\Models\Mahasiswa;
use App\Models\PasswordResetRequest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $email;
    public $nim;

    protected $rules = [
        'email' => 'required|email|exists:mahasiswas,email',
        'nim' => 'required|digits:6|exists:mahasiswas,nim',
    ];

    public function requestReset()
    {
        $this->validate();

        $mahasiswa = Mahasiswa::where('email', $this->email)
                ->where('nim', $this->nim)
                ->first();

        if (!$mahasiswa) {
            session()->flash('error', 'Email dan NIM tidak cocok.');
            return;
        }

        // Buat permintaan reset
        PasswordResetRequest::create([
            'mahasiswa_id' => $mahasiswa->id,
            'status' => 'menunggu',
        ]);

        // Kirim notifikasi ke admin (opsional: via email)
        $admins = User::all();

        foreach ($admins as $admin) {
            if ($admin->email) {
                Mail::to($admin->email)->send(new PasswordResetRequestNotification($mahasiswa));
            }
        }
        session()->flash('success', 'Permintaan reset password telah dikirim. Tunggu persetujuan admin.');
        $this->reset('email');
    }
    
    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}