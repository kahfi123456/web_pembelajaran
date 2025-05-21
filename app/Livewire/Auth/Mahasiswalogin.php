<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Mahasiswalogin extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::guard('mahasiswa')->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            session()->flash('success', 'Login berhasil!');
            return redirect()->route('beranda'); // Ganti 'beranda' sesuai rute tujuan kamu
        }
    
        session()->flash('error', 'Email atau password salah');
    }
    public function render()
    {
        return view('livewire.auth.mahasiswalogin');
    }
}