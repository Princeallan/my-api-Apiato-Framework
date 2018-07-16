<?php

namespace App\Containers\Committeemembers\Models;

use App\Ship\Parents\Models\Model;

class Committeemembers extends Model
{
    protected $fillable = [
        'name',
        'email',
        'committee_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'committeemembers';
}
