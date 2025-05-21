<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Fakultas as ModelsFakultas;
use Illuminate\Support\Facades\Auth;

class Fakultas extends Component
{
    public $fakultas;
    // Tambah Di semua halaman
    public function permision(){
        if (!Auth::guard('mahasiswa')->check()) {
            return redirect()->route('mahasiswalogin'); // Jika belum login, redirect ke login
        }
    }
    
    public function loadfakultas () {
        $this->fakultas = ModelsFakultas::where('is_active', true)
        ->get();
    }
    public function mount(){
        $this->loadfakultas();
        $this->permision();
    }
    public function render()
    {
        return view('livewire.fakultas');
    }
}