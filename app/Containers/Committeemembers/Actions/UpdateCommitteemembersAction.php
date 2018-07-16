<?php

namespace App\Containers\Committeemembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCommitteemembersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $committeemembers = Apiato::call('Committeemembers@UpdateCommitteemembersTask', [$request->id, $data]);

        return $committeemembers;
    }
}
