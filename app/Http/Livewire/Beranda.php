<?php

namespace App\Http\Livewire;

use App\Models\Fakultas;
use Livewire\Component;
use App\Models\RunningText;

class Beranda extends Component
{
    public $texts;
    public $fakultas;

    public function loadFakultas()
    {
        $this->fakultas = Fakultas::all();
    }

    public function mount()
    {
        $this->texts = RunningText::all();
        $this->loadFakultas();
    }

    public function render()
    {
        return view('livewire.beranda', [
            'texts' => $this->texts,
            'fakultas' => $this->fakultas,
        ]);
    }
}