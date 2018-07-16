<?php

namespace App\Containers\Committees\Tasks;

use App\Containers\Committees\Data\Repositories\CommitteesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCommitteesByIdTask extends Task
{

    private $repository;

    public function __construct(CommitteesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
