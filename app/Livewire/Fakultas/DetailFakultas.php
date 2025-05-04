<?php

namespace App\Livewire\Fakultas;

use App\Models\fakultas;
use App\Models\jurusan;
use Livewire\Component;

class DetailFakultas extends Component
{
    public $fakultas;

    public function loadjurusan ($slug) {
        $this->fakultas = fakultas::with('jurusans')->where('slug', $slug)->firstOrFail();
    }
    public function mount($slug)
    {
        $this->loadjurusan($slug);
    }
    public function render()
    {
        return view('livewire.fakultas.detail-fakultas');
    }
}
