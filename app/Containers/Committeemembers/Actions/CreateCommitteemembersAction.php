<?php

namespace App\Containers\Committeemembers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCommitteemembersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'name',
            'email',
            'committee_id'
        ]);

        $committeemembers = Apiato::call('Committeemembers@CreateCommitteemembersTask', [$data]);

        return $committeemembers;
    }
}
