<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateChirp extends Component
{
    #[Validate('required', message: 'il tuo chirp deve contenere almeno un carattere')]
    public $text;

    public function store()
    {

        $this->validate();
        // dd(Auth::user()->chirps());
        Auth::user()->chirps()->create([
            'text'=>$this->text,
        ]);

        $this->reset();

        session()->flash('message', 'Post successfully updated.');
    
    } 

    public function render()
    {
        return view('livewire.create-chirp');
    }
}
