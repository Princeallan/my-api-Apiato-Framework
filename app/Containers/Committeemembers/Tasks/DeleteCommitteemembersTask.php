<?php

namespace App\Containers\Committeemembers\Tasks;

use App\Containers\Committeemembers\Data\Repositories\CommitteemembersRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCommitteemembersTask extends Task
{

    private $repository;

    public function __construct(CommitteemembersRepository $repository)
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
