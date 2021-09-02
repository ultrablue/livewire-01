<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CitiesAndStatesLivewire01 extends Controller
{
    public function show(Request $request)
    {
        // dd('here!');
        // $states = State::all();
        // $cities = City::where('state', '=', $request->state)->get();

        // return view('components-tests.cities-and-states-livewire', ['states' => $states, 'selected' => $request->state, 'cities' => $cities]);
        return view('components-tests.cities-and-states-livewire');
    }
}
