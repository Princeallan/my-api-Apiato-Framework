<?php

namespace App\Containers\Boardmembers\UI\WEB\Controllers;

use App\Containers\Boardmembers\UI\WEB\Requests\CreateBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\DeleteBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\GetAllBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\FindBoardmembersByIdRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\UpdateBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\StoreBoardmembersRequest;
use App\Containers\Boardmembers\UI\WEB\Requests\EditBoardmembersRequest;
use App\Containers\Boards\Models\Boards;
use App\Containers\Committees\Models\Committees;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Boardmembers\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBoardmembersRequest $request
     */
    public function index(GetAllBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@GetAllBoardmembersAction', [$request]);

        $boards = Boards::all()->map(function($data) {
            return [
                'id' => $data['id'],
                'title' => $data['title']
            ];
        })->toArray();
        $committees = Committees::all()->map(function($info){
            return[
                'id' => $info['id'],
                'title' => $info['title']
            ];
        })->toArray();

        return view('boardmembers::index', ['boardmembers'=> $boardmembers, 'boards' => $boards, 'committees'=>$committees]);
        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBoardmembersByIdRequest $request
     */
    public function show(FindBoardmembersByIdRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@FindBoardmembersByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardmembersRequest $request
     */
    public function create(CreateBoardmembersRequest $request)
    {
        $boards = Boards::all()->map(function($data) {
            return [
                'id' => $data['id'],
                'title' => $data['title']
            ];
        })->toArray();
        $committees = Committees::all()->map(function($info){
            return[
                'id' => $info['id'],
                'title' => $info['title']
            ];
        })->toArray();
//dd($committees);

//    foreach ($boards as $board){
//        dd($board['id'], $board['title']);
//    }

        return view('boardmembers::create', ['boards' => $boards, 'committees'=> $committees ]);

    }

    /**
     * Add a new entity
     *
     * @param StoreBoardmembersRequest $request
     */
    public function store(StoreBoardmembersRequest $request)
    {
//        dd(request()->all());
        $boardmembers = Apiato::call('Boardmembers@CreateBoardmembersAction', [$request]);

        return redirect()->route('web_boardmembers_index');

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardmembersRequest $request
     */
    public function edit(EditBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@GetBoardmembersByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardmembersRequest $request
     */
    public function update(UpdateBoardmembersRequest $request)
    {
        $boardmembers = Apiato::call('Boardmembers@UpdateBoardmembersAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardmembersRequest $request
     */
    public function delete(DeleteBoardmembersRequest $request)
    {
         $result = Apiato::call('Boardmembers@DeleteBoardmembersAction', [$request]);

         // ..
    }
}
