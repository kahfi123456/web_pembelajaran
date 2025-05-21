<?php

namespace App\Livewire;

use Livewire\Component;

class Materi extends Component
{
    public $jurusan_id;
    public $materis;

    public function mount($jurusan_id)
    {
        $this->jurusan_id = $jurusan_id;
        $this->loadMateri();
    }

    public function loadMateri()
    {
        $this->materis = Materi::where('jurusan_id', $this->jurusan_id)
            ->where('is_active', 1)
            ->orderBy('order', 'asc')
            ->get();
    }
    public function render()
    {
        return view('livewire.materi');
    }
}