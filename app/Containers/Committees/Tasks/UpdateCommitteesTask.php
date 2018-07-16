<?php

namespace App\Containers\Committees\Tasks;

use App\Containers\Committees\Data\Repositories\CommitteesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCommitteesTask extends Task
{

    private $repository;

    public function __construct(CommitteesRepository $repository)
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
