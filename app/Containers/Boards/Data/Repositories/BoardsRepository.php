<?php

namespace App\Containers\Boards\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use App\Containers\Boards\Models\Boards;

/**
 * Class BoardsRepository
 */
class BoardsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
//    public function getAll(){
//        $boards = Boards::all();
//    }

}
