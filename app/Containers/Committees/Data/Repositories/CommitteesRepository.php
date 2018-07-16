<?php

namespace App\Containers\Committees\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CommitteesRepository
 */
class CommitteesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
