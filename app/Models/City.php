<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use \Awobaz\Compoships\Compoships;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public $fillable = ['name', 'state'];
    public $primaryKeys = ['city', 'state_code'];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_code');
    }

    // Since the cities and states tables aren't consistant, and we need a
    // 'name' attribute, we'll just make that happen... the Laravel way!
    // Using an Accessor. See https://laravel.com/docs/eloquent-mutators
    public function getNameAttribute()
    {
        // I'm not a fan of doing View work in the Model, but this was the
        // quickest, easiest way to do this and still have a useful demo.
        return $this->attributes['city'].' ('.$this->attributes['zip'].')';
    }
}
