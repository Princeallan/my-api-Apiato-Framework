<?php

namespace App\Containers\Boards\Models;

use App\Containers\Boardmembers\Models\Boardmembers;
use App\Ship\Parents\Models\Model;

class Boards extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function boardmembers (){
        return $this->hasMany(Boardmembers::class);
    }
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
    protected $resourceKey = 'boards';
}
