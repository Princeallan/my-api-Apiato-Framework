<?php

namespace App\Containers\Boardmembers\Tasks;

use App\Containers\Boardmembers\Data\Repositories\BoardmembersRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBoardmembersTask extends Task
{

    private $repository;

    public function __construct(BoardmembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
