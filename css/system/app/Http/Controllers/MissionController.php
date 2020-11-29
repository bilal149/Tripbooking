<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMissionRequest;
use App\Http\Requests\UpdateMissionRequest;
use App\Repositories\MissionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MissionController extends AppBaseController
{
    /** @var  MissionRepository */
    private $missionRepository;

    public function __construct(MissionRepository $missionRepo)
    {
        $this->missionRepository = $missionRepo;
    }

    /**
     * Display a listing of the Mission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $missions = $this->missionRepository->all();

        return view('missions.index')
            ->with('missions', $missions);
    }

    /**
     * Show the form for creating a new Mission.
     *
     * @return Response
     */
    public function create()
    {
        return view('missions.create');
    }

    /**
     * Store a newly created Mission in storage.
     *
     * @param CreateMissionRequest $request
     *
     * @return Response
     */
    public function store(CreateMissionRequest $request)
    {
        $input = $request->all();

        $mission = $this->missionRepository->create($input);

        Flash::success('Mission saved successfully.');

        return redirect(route('missions.index'));
    }

    /**
     * Display the specified Mission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mission = $this->missionRepository->find($id);

        if (empty($mission)) {
            Flash::error('Mission not found');

            return redirect(route('missions.index'));
        }

        return view('missions.show')->with('mission', $mission);
    }

    /**
     * Show the form for editing the specified Mission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mission = $this->missionRepository->find($id);

        if (empty($mission)) {
            Flash::error('Mission not found');

            return redirect(route('missions.index'));
        }

        return view('missions.edit')->with('mission', $mission);
    }

    /**
     * Update the specified Mission in storage.
     *
     * @param int $id
     * @param UpdateMissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMissionRequest $request)
    {
        $mission = $this->missionRepository->find($id);

        if (empty($mission)) {
            Flash::error('Mission not found');

            return redirect(route('missions.index'));
        }

        $mission = $this->missionRepository->update($request->all(), $id);

        Flash::success('Mission updated successfully.');

        return redirect(route('missions.index'));
    }

    /**
     * Remove the specified Mission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mission = $this->missionRepository->find($id);

        if (empty($mission)) {
            Flash::error('Mission not found');

            return redirect(route('missions.index'));
        }

        $this->missionRepository->delete($id);

        Flash::success('Mission deleted successfully.');

        return redirect(route('missions.index'));
    }
}
