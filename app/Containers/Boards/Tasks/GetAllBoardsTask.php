<?php

namespace App\Containers\Boards\Tasks;

use App\Containers\Boards\Data\Repositories\BoardsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBoardsTask extends Task
{

    private $repository;

    public function __construct(BoardsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
