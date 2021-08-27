<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class Compontent01Controller extends Controller
{
    public function show(Request $request)
    {
        // dd($request->state);
        // dd(State::all());

        $cities = null;
        if ($request->state) {
            $cities = City::where('state', '=', $request->state)->get();
        }

        return view('components-tests.components-02', ['states' => State::all(), 'selected' => $request->state, 'cities' => $cities]);
    }
}
