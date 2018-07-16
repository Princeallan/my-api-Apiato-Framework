<?php

namespace App\Containers\Boardmembers\Tasks;

use App\Containers\Boardmembers\Data\Repositories\BoardmembersRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBoardmembersTask extends Task
{

    private $repository;

    public function __construct(BoardmembersRepository $repository)
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
