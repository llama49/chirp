<?php

namespace App\Livewire;

use Livewire\Component;

class EditChirp extends Component
{
    public $chirp;

    public $text;

    public function mount()
    {
        $this->text = $this->chirp->text;
    }

    public function edit()
    {
        $this->chirp->update([
            'text' => $this->text
        ]);

        $this->reset();

        session()->flash('message', 'Chirp modificato');

        return redirect('/chirp/user');
    }

    public function render()
    {
        return view('livewire.edit-chirp');
    }
}
