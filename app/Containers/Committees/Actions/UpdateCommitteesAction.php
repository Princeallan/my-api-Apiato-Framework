<?php

namespace App\Containers\Committees\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCommitteesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $committees = Apiato::call('Committees@UpdateCommitteesTask', [$request->id, $data]);

        return $committees;
    }
}
