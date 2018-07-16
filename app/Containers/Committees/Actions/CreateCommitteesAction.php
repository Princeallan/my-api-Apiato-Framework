<?php

namespace App\Containers\Committees\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCommitteesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'title',
            'description'
        ]);

        $committees = Apiato::call('Committees@CreateCommitteesTask', [$data]);

        return $committees;
    }
}
