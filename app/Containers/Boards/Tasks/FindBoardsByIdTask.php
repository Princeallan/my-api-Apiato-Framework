<?php

namespace App\Containers\Boards\Tasks;

use App\Containers\Boards\Data\Repositories\BoardsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBoardsByIdTask extends Task
{

    private $repository;

    public function __construct(BoardsRepository $repository)
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
