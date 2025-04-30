<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RunningText; // <- ini yang penting

class Navbar extends Component
{
    public function render()
    {
        $Text = RunningText::all(); // ambil semua teks untuk marquee

        return view('livewire.navbar', ['Text' => $Text]);
    }
}