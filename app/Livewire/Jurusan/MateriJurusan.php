<?php

namespace App\Livewire\Jurusan;

use App\Models\jurusan;
use Livewire\Component;

class MateriJurusan extends Component
{
    public $jurusan;

    public function mount($id)
    {
        $this->jurusan = Jurusan::with('materi')->findOrFail($id);
    }
    public function render()
    {
        return view('livewire.jurusan.materi-jurusan');
    }
}