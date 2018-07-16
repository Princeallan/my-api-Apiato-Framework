<?php

namespace App\Containers\Committeemembers\UI\WEB\Controllers;

use App\Containers\Committeemembers\UI\WEB\Requests\CreateCommitteemembersRequest;
use App\Containers\Committeemembers\UI\WEB\Requests\DeleteCommitteemembersRequest;
use App\Containers\Committeemembers\UI\WEB\Requests\GetAllCommitteemembersRequest;
use App\Containers\Committeemembers\UI\WEB\Requests\FindCommitteemembersByIdRequest;
use App\Containers\Committeemembers\UI\WEB\Requests\UpdateCommitteemembersRequest;
use App\Containers\Committeemembers\UI\WEB\Requests\StoreCommitteemembersRequest;
use App\Containers\Committeemembers\UI\WEB\Requests\EditCommitteemembersRequest;
use App\Containers\Committees\Models\Committees;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Committeemembers\UI\WEB\Controllers
 */

class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllCommitteemembersRequest $request
     */

    public function index(GetAllCommitteemembersRequest $request)
    {
        $committeemembers = Apiato::call('Committeemembers@GetAllCommitteemembersAction', [$request]);

        return view('committeemembers::index', ['committeemembers'=>$committeemembers] );

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindCommitteemembersByIdRequest $request
     */
    public function show(FindCommitteemembersByIdRequest $request)
    {
        $committeemembers = Apiato::call('Committeemembers@FindCommitteemembersByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateCommitteemembersRequest $request
     */
    public function create(CreateCommitteemembersRequest $request)
    {
        $committees = Committees::all()->map(function($info){
            return[
                'id' => $info['id'],
                'title' => $info['title']
            ];
        })->toArray();
        return view('committeemembers::create', ['committees'=>$committees]);
    }

    /**
     * Add a new entity
     *
     * @param StoreCommitteemembersRequest $request
     */
    public function store(StoreCommitteemembersRequest $request)
    {
        $committeemembers = Apiato::call('Committeemembers@CreateCommitteemembersAction', [$request]);

        return redirect()->route('web_committeemembers_index');

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditCommitteemembersRequest $request
     */
    public function edit(EditCommitteemembersRequest $request)
    {
        $committeemembers = Apiato::call('Committeemembers@GetCommitteemembersByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateCommitteemembersRequest $request
     */
    public function update(UpdateCommitteemembersRequest $request)
    {
        $committeemembers = Apiato::call('Committeemembers@UpdateCommitteemembersAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteCommitteemembersRequest $request
     */
    public function delete(DeleteCommitteemembersRequest $request)
    {
         $result = Apiato::call('Committeemembers@DeleteCommitteemembersAction', [$request]);

         // ..
    }
}
