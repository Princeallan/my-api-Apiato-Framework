<?php

namespace App\Containers\Committees\Tasks;

use App\Containers\Committees\Data\Repositories\CommitteesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCommitteesTask extends Task
{

    private $repository;

    public function __construct(CommitteesRepository $repository)
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
