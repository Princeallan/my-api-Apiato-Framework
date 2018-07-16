<?php

namespace App\Containers\Boards\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateBoardsAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            // add your request data here
            'title'=>$request->input('title'),
            'description' => $request->input('description')
        ];

        $boards= Apiato::call('Boards@CreateBoardsTask', [$data]);

        return $boards;
    }
}
