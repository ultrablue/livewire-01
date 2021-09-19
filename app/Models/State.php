<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use \Awobaz\Compoships\Compoships;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * This is the primary key for this table.
     */
    protected $primaryKey = ['state_code'];

    /**
     * Set the default sort. This is required if hydrating the model.
     */
    // protected $sortAttribute = 'name';

    public $incrementing = false;

    protected $keyType = 'string';

    public function cities()
    {
        return $this->hasMany(City::class, 'state_code');
    }

    // Since the cities and states tables aren't consistant, and we need an
    // 'id' attribute, we'll just make that happen... the Laravel way!
    // Using an Accessor. See https://laravel.com/docs/eloquent-mutators
    public function getIdAttribute()
    {
        return $this->attributes['state_code'];
    }

    // See note for the id Accessor, above, for more.
    public function getNameAttribute()
    {
        return $this->attributes['state'];
    }
}
