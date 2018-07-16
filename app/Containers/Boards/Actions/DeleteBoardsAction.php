<?php

namespace App\Containers\Boards\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteBoardsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Boards@DeleteBoardsTask', [$request->id]);
    }
}
