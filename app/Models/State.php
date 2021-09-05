<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * This is the primary key for this table.
     */
    protected $primaryKey = 'state_code';

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
}
