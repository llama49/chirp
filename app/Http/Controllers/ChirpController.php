<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{

    public function chirp()
    {
        return view('chirp/user');
    }
    
    public function edit(Chirp $chirp) 
    {
        return view('chirp/edit', compact('chirp'));
    }
}
