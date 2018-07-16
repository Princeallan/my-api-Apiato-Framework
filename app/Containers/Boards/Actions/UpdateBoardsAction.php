<?php

namespace App\Containers\Boards\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateBoardsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $boards = Apiato::call('Boards@UpdateBoardsTask', [$request->id, $data]);

        return $boards;
    }
}
