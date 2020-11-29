<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVisionRequest;
use App\Http\Requests\UpdateVisionRequest;
use App\Repositories\VisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VisionController extends AppBaseController
{
    /** @var  VisionRepository */
    private $visionRepository;

    public function __construct(VisionRepository $visionRepo)
    {
        $this->visionRepository = $visionRepo;
    }

    /**
     * Display a listing of the Vision.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $visions = $this->visionRepository->all();

        return view('visions.index')
            ->with('visions', $visions);
    }

    /**
     * Show the form for creating a new Vision.
     *
     * @return Response
     */
    public function create()
    {
        return view('visions.create');
    }

    /**
     * Store a newly created Vision in storage.
     *
     * @param CreateVisionRequest $request
     *
     * @return Response
     */
    public function store(CreateVisionRequest $request)
    {
        $input = $request->all();

        $vision = $this->visionRepository->create($input);

        Flash::success('Vision saved successfully.');

        return redirect(route('visions.index'));
    }

    /**
     * Display the specified Vision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vision = $this->visionRepository->find($id);

        if (empty($vision)) {
            Flash::error('Vision not found');

            return redirect(route('visions.index'));
        }

        return view('visions.show')->with('vision', $vision);
    }

    /**
     * Show the form for editing the specified Vision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vision = $this->visionRepository->find($id);

        if (empty($vision)) {
            Flash::error('Vision not found');

            return redirect(route('visions.index'));
        }

        return view('visions.edit')->with('vision', $vision);
    }

    /**
     * Update the specified Vision in storage.
     *
     * @param int $id
     * @param UpdateVisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisionRequest $request)
    {
        $vision = $this->visionRepository->find($id);

        if (empty($vision)) {
            Flash::error('Vision not found');

            return redirect(route('visions.index'));
        }

        $vision = $this->visionRepository->update($request->all(), $id);

        Flash::success('Vision updated successfully.');

        return redirect(route('visions.index'));
    }

    /**
     * Remove the specified Vision from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vision = $this->visionRepository->find($id);

        if (empty($vision)) {
            Flash::error('Vision not found');

            return redirect(route('visions.index'));
        }

        $this->visionRepository->delete($id);

        Flash::success('Vision deleted successfully.');

        return redirect(route('visions.index'));
    }
}
