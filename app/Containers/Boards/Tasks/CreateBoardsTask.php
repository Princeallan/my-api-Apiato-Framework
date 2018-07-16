<?php

namespace App\Containers\Boards\Tasks;

use App\Containers\Boards\Data\Repositories\BoardsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBoardsTask extends Task
{

    private $repository;

    public function __construct(BoardsRepository $repository)
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
