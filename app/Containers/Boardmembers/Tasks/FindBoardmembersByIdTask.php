<?php

namespace App\Containers\Boardmembers\Tasks;

use App\Containers\Boardmembers\Data\Repositories\BoardmembersRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBoardmembersByIdTask extends Task
{

    private $repository;

    public function __construct(BoardmembersRepository $repository)
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
