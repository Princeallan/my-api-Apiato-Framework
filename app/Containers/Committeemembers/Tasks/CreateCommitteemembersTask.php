<?php

namespace App\Containers\Committeemembers\Tasks;

use App\Containers\Committeemembers\Data\Repositories\CommitteemembersRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCommitteemembersTask extends Task
{

    private $repository;

    public function __construct(CommitteemembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
