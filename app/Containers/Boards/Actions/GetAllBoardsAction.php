<?php

namespace App\Containers\Boards\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllBoardsAction extends Action
{
    public function run(Request $request)
    {
        $boards = Apiato::call('Boards@GetAllBoardsTask');

        return $boards;
    }
}
