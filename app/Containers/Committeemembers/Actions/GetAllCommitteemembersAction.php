<?php

namespace App\Containers\Committeemembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCommitteemembersAction extends Action
{
    public function run(Request $request)
    {
        $committeemembers = Apiato::call('Committeemembers@GetAllCommitteemembersTask');

        return $committeemembers;
    }
}
