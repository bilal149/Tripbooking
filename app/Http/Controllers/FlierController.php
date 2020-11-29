<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFlierRequest;
use App\Http\Requests\UpdateFlierRequest;
use App\Repositories\FlierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FlierController extends AppBaseController
{
    /** @var  FlierRepository */
    private $flierRepository;

    public function __construct(FlierRepository $flierRepo)
    {
        $this->flierRepository = $flierRepo;
    }

    /**
     * Display a listing of the Flier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fliers = $this->flierRepository->all();

        return view('fliers.index')
            ->with('fliers', $fliers);
    }

    /**
     * Show the form for creating a new Flier.
     *
     * @return Response
     */
    public function create()
    {
        return view('fliers.create');
    }

    /**
     * Store a newly created Flier in storage.
     *
     * @param CreateFlierRequest $request
     *
     * @return Response
     */
    public function store(CreateFlierRequest $request)
    {
       // $input = $request->all();
        $flier = $this->flierRepository->createFlier($request);

       // $flier = $this->flierRepository->create($input);

        Flash::success('Flier saved successfully.');

        return redirect(route('fliers.index'));
    }

    /**
     * Display the specified Flier.
     *
     * @param int $id
     *
     * @return Response 
     */
    public function show($id)
    {
        $flier = $this->flierRepository->find($id);


        if (empty($flier)) {
            Flash::error('Flier not found');

            return redirect(route('fliers.index'));
        }

        return view('fliers.show')->with('flier', $flier);
    }

    /**
     * Show the form for editing the specified Flier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $flier = $this->flierRepository->find($id);

        if (empty($flier)) {
            Flash::error('Flier not found');

            return redirect(route('fliers.index'));
        }

        return view('fliers.edit')->with('flier', $flier);
    }

    /**
     * Update the specified Flier in storage.
     *
     * @param int $id
     * @param UpdateFlierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFlierRequest $request)
    {
        $flier = $this->flierRepository->find($id);

        if (empty($flier)) {
            Flash::error('Flier not found');

            return redirect(route('fliers.index'));
        }

        $flier = $this->flierRepository->update($request->all(), $id);

        Flash::success('Flier updated successfully.');

        return redirect(route('fliers.index'));
    }

    /**
     * Remove the specified Flier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $flier = $this->flierRepository->find($id);

        if (empty($flier)) { 
            Flash::error('Flier not found');

            return redirect(route('fliers.index'));
        }

        $this->flierRepository->delete($id);

        Flash::success('Flier deleted successfully.');

        return redirect(route('fliers.index'));
    }
}
 