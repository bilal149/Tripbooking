<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlidRequest;
use App\Http\Requests\UpdateSlidRequest;
use App\Repositories\SlidRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SlidController extends AppBaseController
{
    /** @var  SlidRepository */
    private $slidRepository;

    public function __construct(SlidRepository $slidRepo)
    {
        $this->slidRepository = $slidRepo;
    }

    /**
     * Display a listing of the Slid.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $slids = $this->slidRepository->all();

        return view('slids.index')
            ->with('slids', $slids);
    }

    /**
     * Show the form for creating a new Slid.
     *
     * @return Response
     */
    public function create()
    {
        return view('slids.create');
    }

    /**
     * Store a newly created Slid in storage.
     *
     * @param CreateSlidRequest $request
     *
     * @return Response
     */
    public function store(CreateSlidRequest $request)
    {
      //  $input = $request->all();

        $slid = $this->slidRepository->createSlid($request);

        Flash::success('Slid saved successfully.');

        return redirect(route('slids.index'));
    }

    /**
     * Display the specified Slid.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slid = $this->slidRepository->find($id);

        if (empty($slid)) {
            Flash::error('Slid not found');

            return redirect(route('slids.index'));
        }

        return view('slids.show')->with('slid', $slid);
    }

    /**
     * Show the form for editing the specified Slid.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slid = $this->slidRepository->find($id);

        if (empty($slid)) {
            Flash::error('Slid not found');

            return redirect(route('slids.index'));
        }

        return view('slids.edit')->with('slid', $slid);
    }

    /**
     * Update the specified Slid in storage.
     *
     * @param int $id
     * @param UpdateSlidRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSlidRequest $request)
    {
        $slid = $this->slidRepository->find($id);

        if (empty($slid)) {
            Flash::error('Slid not found');

            return redirect(route('slids.index'));
        }

        $slid = $this->slidRepository->update($request->all(), $id);

        Flash::success('Slid updated successfully.');

        return redirect(route('slids.index'));
    }

    /**
     * Remove the specified Slid from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slid = $this->slidRepository->find($id);

        if (empty($slid)) {
            Flash::error('Slid not found');

            return redirect(route('slids.index'));
        }

        $this->slidRepository->delete($id);

        Flash::success('Slid deleted successfully.');

        return redirect(route('slids.index'));
    }
}
