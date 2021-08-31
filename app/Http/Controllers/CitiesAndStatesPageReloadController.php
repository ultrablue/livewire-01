<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CitiesAndStatesPageReloadController extends Controller
{
    /**
     * show.
     *
     * @param mixed Illuminate\Http\Request $request
     *
     * @return void
     */
    public function show(Request $request)
    {
        // Initialize $cities.
        $cities = null;

        if ($request->state) {
            $cities = City::where('state', '=', $request->state)->get();
        }

        return view('components-tests.cities-and-states-page-reload', ['states' => State::all(), 'selected' => $request->state, 'cities' => $cities]);
    }
}
