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
    // protected $primaryKey = 'code';

    /**
     * Set the default sort. This is required if hydrating the model.
     */
    protected $sort_attribute = 'name';

    public $incrementing = false;

    protected $keyType = 'string';
}
