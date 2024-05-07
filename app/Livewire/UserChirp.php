<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserChirp extends Component
{   
    public function destroy(Chirp $chirp)
    {
        $chirp->delete();
        
        return redirect()->back()->with('message', 'CHIRP eliminato');
    }
    
    public function render()
    {
        $chirps = Auth::user()->chirps;
        return view('livewire.user-chirp', compact('chirps'));
    }
}
