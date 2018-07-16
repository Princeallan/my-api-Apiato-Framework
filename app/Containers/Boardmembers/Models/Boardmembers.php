<?php

namespace App\Containers\Boardmembers\Models;

use App\Containers\Boards\Models\Boards;
use App\Containers\Committees\Models\Committees;
use App\Ship\Parents\Models\Model;

class Boardmembers extends Model
{
    protected $fillable = [
        'name',
        'email',
        'board_id',
        'committee_id'
    ];

    public function boards(){
        return $this->belongsTo(Boards::class, 'board_id');
    }

    public function committees()
    {
        return $this->belongsTo(Committees::class, 'committee_id');
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
    protected $resourceKey = 'boardmembers';
}
