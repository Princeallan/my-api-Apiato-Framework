<?php

namespace App\Containers\Committeemembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCommitteemembersAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Committeemembers@DeleteCommitteemembersTask', [$request->id]);
    }
}
