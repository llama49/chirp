<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;

class IndexChirp extends Component
{
    public function render()
    {
        $chirps = Chirp::all();
        return view('livewire.index-chirp', compact('chirps'));
    }
}
