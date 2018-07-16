<?php

namespace App\Containers\Boardmembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindBoardmembersByIdAction extends Action
{
    public function run(Request $request)
    {
        $boardmembers = Apiato::call('Boardmembers@FindBoardmembersByIdTask', [$request->id]);

        return $boardmembers;
    }
}
