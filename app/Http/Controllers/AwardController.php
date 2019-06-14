<?php

namespace App\Http\Controllers;

use App\DataTables\AwardDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAwardRequest;
use App\Http\Requests\UpdateAwardRequest;
use App\Repositories\AwardRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AwardController extends AppBaseController
{
    /** @var  AwardRepository */
    private $awardRepository;

    public function __construct(AwardRepository $awardRepo)
    {
        $this->awardRepository = $awardRepo;
    }

    /**
     * Display a listing of the Award.
     *
     * @param AwardDataTable $awardDataTable
     * @return Response
     */
    public function index(AwardDataTable $awardDataTable)
    {
        return $awardDataTable->render('awards.index');
    }

    /**
     * Show the form for creating a new Award.
     *
     * @return Response
     */
    public function create()
    {
        return view('awards.create');
    }

    /**
     * Store a newly created Award in storage.
     *
     * @param CreateAwardRequest $request
     *
     * @return Response
     */
    public function store(CreateAwardRequest $request)
    {
        $input = $request->all();

        $award = $this->awardRepository->create($input);

        Flash::success('Award saved successfully.');

        return redirect(route('awards.index'));
    }

    /**
     * Display the specified Award.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error('Award not found');

            return redirect(route('awards.index'));
        }

        return view('awards.show')->with('award', $award);
    }

    /**
     * Show the form for editing the specified Award.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error('Award not found');

            return redirect(route('awards.index'));
        }

        return view('awards.edit')->with('award', $award);
    }

    /**
     * Update the specified Award in storage.
     *
     * @param  int              $id
     * @param UpdateAwardRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAwardRequest $request)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error('Award not found');

            return redirect(route('awards.index'));
        }

        $award = $this->awardRepository->update($request->all(), $id);

        Flash::success('Award updated successfully.');

        return redirect(route('awards.index'));
    }

    /**
     * Remove the specified Award from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            Flash::error('Award not found');

            return redirect(route('awards.index'));
        }

        $this->awardRepository->delete($id);

        Flash::success('Award deleted successfully.');

        return redirect(route('awards.index'));
    }
}
