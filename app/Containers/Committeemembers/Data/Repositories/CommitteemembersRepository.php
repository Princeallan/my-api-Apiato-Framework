<?php

namespace App\Containers\Committeemembers\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CommitteemembersRepository
 */
class CommitteemembersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
