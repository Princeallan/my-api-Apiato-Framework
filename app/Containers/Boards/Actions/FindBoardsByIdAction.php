<?php

namespace App\Containers\Boards\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindBoardsByIdAction extends Action
{
    public function run(Request $request)
    {
        $boards = Apiato::call('Boards@FindBoardsByIdTask', [$request->id]);

        return $boards;
    }
}
