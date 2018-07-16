<?php

namespace App\Containers\Boards\Tasks;

use App\Containers\Boards\Data\Repositories\BoardsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBoardsTask extends Task
{

    private $repository;

    public function __construct(BoardsRepository $repository)
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
