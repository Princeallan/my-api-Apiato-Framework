<?php

namespace App\Containers\Committees\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCommitteesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Committees@DeleteCommitteesTask', [$request->id]);
    }
}
