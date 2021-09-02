<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class States extends Component
{
    public $state;
    public $cities = [];
    public $city;

    public function render()
    {
        if (!empty($this->state)) {
            $this->cities = City::where('state', '=', $this->state)->get();
            // dump($this->cities);
        }

        $states = State::orderBy('name')->get();

        return view('livewire.states', ['states' => $states]);
    }
}
