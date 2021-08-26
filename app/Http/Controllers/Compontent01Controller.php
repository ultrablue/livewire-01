<?php

namespace App\Http\Controllers;

use App\Models\State;

class Compontent01Controller extends Controller
{
    public function show()
    {
        // dd(State::all());

        return view('components-tests.components-02', ['states' => State::all()]);
    }
}
