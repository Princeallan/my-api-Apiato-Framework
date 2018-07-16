<?php

namespace App\Containers\Committeemembers\Tasks;

use App\Containers\Committeemembers\Data\Repositories\CommitteemembersRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCommitteemembersTask extends Task
{

    private $repository;

    public function __construct(CommitteemembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
