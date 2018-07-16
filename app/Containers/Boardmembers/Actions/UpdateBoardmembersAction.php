<?php

namespace App\Containers\Boardmembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateBoardmembersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $boardmembers = Apiato::call('Boardmembers@UpdateBoardmembersTask', [$request->id, $data]);

        return $boardmembers;
    }
}
