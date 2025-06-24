<?php

namespace App\Livewire;

use App\Mail\LaporanMasukMail;
use App\Models\suratpengajuan;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Kontak extends Component
{
    public $nama, $email, $pesan;

    protected $rules = [
        'nama' => 'required|min:3',
        'email' => 'required|email',
        'pesan' => 'required|min:5',
    ];

    public function kirimPesan()
    {
        $this->validate();

        suratpengajuan::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'pesan' => $this->pesan,
        ]);
        Mail::to('aliharahap125@gmail.com')->send(new LaporanMasukMail([
            'nama' => $this->nama,
            'email' =>$this->email,
            'pesan'=> $this->pesan,
        ])
    );
        // Kosongkan input dan tampilkan notifikasi
        $this->reset(['nama', 'email', 'pesan']);
        session()->flash('success', 'Pesan berhasil dikirim!');
    }
    public function render()
    {
        return view('livewire.kontak');
    }
}