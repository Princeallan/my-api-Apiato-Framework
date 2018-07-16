<?php

namespace App\Containers\Boards\UI\WEB\Controllers;

use App\Containers\Boards\UI\WEB\Requests\CreateBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\DeleteBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\GetAllBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\FindBoardsByIdRequest;
use App\Containers\Boards\UI\WEB\Requests\UpdateBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\StoreBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\EditBoardsRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Boards\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBoardsRequest $request
     */
    public function index(GetAllBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@GetAllBoardsAction', [$request]);
//dd($boards);
        return view('boards::index', ['boards' => $boards]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBoardsByIdRequest $request
     */
    public function show(FindBoardsByIdRequest $request)
    {
        $boards = Apiato::call('Boards@FindBoardsByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardsRequest $request
     */
    public function create(CreateBoardsRequest $request)
    {
        return view('boards::create');
    }

    /**
     * Add a new entity
     *
     * @param StoreBoardsRequest $request
     */

    public function store(StoreBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@CreateBoardsAction', [$request]);

        return redirect() -> route('web_boards_index');
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardsRequest $request
     */
    public function edit(EditBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@GetBoardsByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardsRequest $request
     */
    public function update(UpdateBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@UpdateBoardsAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardsRequest $request
     */
    public function delete(DeleteBoardsRequest $request)
    {
        $result = Apiato::call('Boards@DeleteBoardsAction', [$request]);

        // ..
    }
}
