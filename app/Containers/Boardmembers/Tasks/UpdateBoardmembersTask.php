<?php

namespace App\Containers\Boardmembers\Tasks;

use App\Containers\Boardmembers\Data\Repositories\BoardmembersRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBoardmembersTask extends Task
{

    private $repository;

    public function __construct(BoardmembersRepository $repository)
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
