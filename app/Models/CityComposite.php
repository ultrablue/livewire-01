<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityComposite extends Model
{
    use HasFactory;
    use \Awobaz\Compoships\Compoships;

    protected $table = 'cities_compo';

    protected $primary_key = ['name', 'state'];

    // TODO Get Zip Codes for a City and State.

    public function zipcodes()
    {
        // App\Models\CityComposite::where('state','CA')->where('name', 'Los Angeles')->first()->zipcodes
        return $this->hasMany(City::class, ['city', 'state_code'], ['name', 'state']);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
