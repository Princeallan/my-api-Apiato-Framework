<?php

namespace App\Containers\Boardmembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteBoardmembersAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Boardmembers@DeleteBoardmembersTask', [$request->id]);
    }
}
