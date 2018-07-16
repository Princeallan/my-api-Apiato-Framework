<?php

namespace App\Containers\Committeemembers\Tasks;

use App\Containers\Committeemembers\Data\Repositories\CommitteemembersRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCommitteemembersTask extends Task
{

    private $repository;

    public function __construct(CommitteemembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
