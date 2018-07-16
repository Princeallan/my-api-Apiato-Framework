<?php

namespace App\Containers\Committees\UI\WEB\Controllers;

use App\Containers\Committees\UI\WEB\Requests\CreateCommitteesRequest;
use App\Containers\Committees\UI\WEB\Requests\DeleteCommitteesRequest;
use App\Containers\Committees\UI\WEB\Requests\GetAllCommitteesRequest;
use App\Containers\Committees\UI\WEB\Requests\FindCommitteesByIdRequest;
use App\Containers\Committees\UI\WEB\Requests\UpdateCommitteesRequest;
use App\Containers\Committees\UI\WEB\Requests\StoreCommitteesRequest;
use App\Containers\Committees\UI\WEB\Requests\EditCommitteesRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Committees\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllCommitteesRequest $request
     */
    public function index(GetAllCommitteesRequest $request)
    {
        $committees = Apiato::call('Committees@GetAllCommitteesAction', [$request]);

        return view('committees::index', ['committees' => $committees ]);
        // ..
    }

    /**
     * Show one entity
     *
     * @param FindCommitteesByIdRequest $request
     */
    public function show(FindCommitteesByIdRequest $request)
    {
        $committees = Apiato::call('Committees@FindCommitteesByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateCommitteesRequest $request
     */
    public function create(CreateCommitteesRequest $request)
    {
        return view('committees::create');
    }

    /**
     * Add a new entity
     *
     * @param StoreCommitteesRequest $request
     */
    public function store(StoreCommitteesRequest $request)
    {
        $committees = Apiato::call('Committees@CreateCommitteesAction', [$request]);

        return redirect()->route('web_committees_index');
        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditCommitteesRequest $request
     */
    public function edit(EditCommitteesRequest $request)
    {
        $committees = Apiato::call('Committees@GetCommitteesByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateCommitteesRequest $request
     */
    public function update(UpdateCommitteesRequest $request)
    {
        $committees = Apiato::call('Committees@UpdateCommitteesAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteCommitteesRequest $request
     */
    public function delete(DeleteCommitteesRequest $request)
    {
         $result = Apiato::call('Committees@DeleteCommitteesAction', [$request]);

         // ..
    }
}
