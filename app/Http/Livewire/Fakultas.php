<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\File;

class Fakultas extends Component
{
    public $faculty;
    public $files = [];

    // Fungsi untuk menampilkan file berdasarkan fakultas
    public function show($faculty)
    {
        // Ambil file berdasarkan fakultas
        $this->faculty = $faculty;
        $this->files = File::where('faculty', $faculty)->get();
    }

    public function render()
    {
        return view('livewire.fakultas', [
            'files' => $this->files,
            'faculty' => $this->faculty,
        ]);
    }
}