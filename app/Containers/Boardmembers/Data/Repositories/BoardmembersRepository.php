<?php

namespace App\Containers\Boardmembers\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BoardmembersRepository
 */
class BoardmembersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
