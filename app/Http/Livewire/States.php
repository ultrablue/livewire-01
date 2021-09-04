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
        // dd($this->state);
        $this->states = State::all();
        // dd($this->states);
        if (!empty($this->state)) {
            $this->cities = City::where('state', '=', $this->state)->get();
        }
        $this->thing = 'Thing thing!';
    }

    public function render()
    {
        $this->refreshData();

        // dd($this->cities);

        return view('livewire.states');
    }

    public function updatedSelectedState($state)
    {
        dd($state);
    }
}
