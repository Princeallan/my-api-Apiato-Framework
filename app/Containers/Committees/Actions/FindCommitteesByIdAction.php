<?php

namespace App\Containers\Committees\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCommitteesByIdAction extends Action
{
    public function run(Request $request)
    {
        $committees = Apiato::call('Committees@FindCommitteesByIdTask', [$request->id]);

        return $committees;
    }
}
