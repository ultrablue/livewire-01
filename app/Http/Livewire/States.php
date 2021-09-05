<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class States extends Component
{
    // These values are automatically passed to the blade component.
    public $state;
    public $states;
    public $cities = [];
    public $city;
    public $thing;

    // protected $rules;
    protected $rules = ['states' => 'required'];

    public function mount()
    {
        $this->refreshData();
    }

    private function refreshData()
    {
        $this->states = State::all();
        if (!empty($this->state)) {
            $this->cities = City::where('state_code', '=', $this->state)->orderBy('city')->orderBy('county')->get();
        }
    }

    public function render()
    {
        $this->refreshData();

        return view('livewire.states');
    }
}
