<?php

namespace App\Containers\Boards\Tasks;

use App\Containers\Boards\Data\Repositories\BoardsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBoardsTask extends Task
{

    private $repository;

    public function __construct(BoardsRepository $repository)
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
