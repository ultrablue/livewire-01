<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CitiesAndStatesLivewire01 extends Controller
{
    public function show(Request $request)
    {
        $cities = City::where('state', '=', $request->state)->get();

        return view('components-tests.cities-and-states-livewire', ['states' => State::all(), 'selected' => $request->state, 'cities' => $cities]);
    }
}
