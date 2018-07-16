<?php

namespace App\Containers\Committees\Tasks;

use App\Containers\Committees\Data\Repositories\CommitteesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCommitteesTask extends Task
{

    private $repository;

    public function __construct(CommitteesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
