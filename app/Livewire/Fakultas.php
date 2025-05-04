<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Fakultas as ModelsFakultas;

class Fakultas extends Component
{
    public $fakultas;
    public function loadfakultas () {
        $this->fakultas = ModelsFakultas::where('is_active', true)
        ->get();
    }
    public function mount(){
        $this->loadfakultas();
    }
    public function render()
    {
        return view('livewire.fakultas');
    }
}
