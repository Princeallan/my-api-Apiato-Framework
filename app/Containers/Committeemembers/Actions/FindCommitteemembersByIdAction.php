<?php

namespace App\Containers\Committeemembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCommitteemembersByIdAction extends Action
{
    public function run(Request $request)
    {
        $committeemembers = Apiato::call('Committeemembers@FindCommitteemembersByIdTask', [$request->id]);

        return $committeemembers;
    }
}
