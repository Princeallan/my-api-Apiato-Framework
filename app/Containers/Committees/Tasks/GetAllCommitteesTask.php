<?php

namespace App\Containers\Committees\Tasks;

use App\Containers\Committees\Data\Repositories\CommitteesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCommitteesTask extends Task
{

    private $repository;

    public function __construct(CommitteesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
