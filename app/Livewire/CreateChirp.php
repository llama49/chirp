<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateChirp extends Component
{
    #[Validate('required', message: 'il tuo chirp deve contenere almeno un carattere')]
    public $text;

    public $tags;

    public function store()
    {

        $this->validate();
        
        $chirp = Auth::user()->chirps()->create([
            'text'=>$this->text,
        ]);

        //tags??
        $array_tags = explode('#', $this->tags);

        foreach ($array_tags as $tag_name) {
            if(strtolower($tag_name)) {
                $tag = Tag::firstOrCreate(['name' => strtolower($tag_name)]);  
                $chirp->tags()->attach($tag->id);  
            }
        }
        dd($chirp->tags);

        $this->reset();

        session()->flash('message', 'Post successfully updated.');

        return redirect('/');
    } 

    public function render()
    {
        return view('livewire.create-chirp');
    }
}
