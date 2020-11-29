<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWeekRequest;
use App\Http\Requests\UpdateWeekRequest;
use App\Repositories\WeekRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\models\Week;
use Flash;
use Response;

class WeekController extends AppBaseController
{
    /** @var  WeekRepository */
    private $weekRepository;

    public function __construct(WeekRepository $weekRepo)
    {
        $this->weekRepository = $weekRepo;
    }

    /**
     * Display a listing of the Week.
     * 
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $weeks = $this->weekRepository->all();

        return view('weeks.index')
            ->with('weeks', $weeks);
    }

    /**
     * Show the form for creating a new Week.
     *
     * @return Response
     */
    public function create()
    {
        return view('weeks.create');
    }

    /**
     * Store a newly created Week in storage.
     *
     * @param CreateWeekRequest $request
     *
     * @return Response
     */
    public function store(CreateWeekRequest $request)
    {


        $image = $request->file('image');
        
        $image_name = rand(1111,9999) . '.' . $image->getClientOriginalExtension();
        
        $image->move(public_path('flier'), $image_name);


        $week = new Servic;
        $week->heading = $request->heading;
        $week->details = $request->details;
        $week->image = $image_name;
        
        //dd($servic);
        
        $week->save();




/*
        $input = $request->all();

        $week = $this->weekRepository->create($input);*/

        Flash::success('Week saved successfully.');

        return redirect(route('weeks.index'));
    }

    /**
     * Display the specified Week.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $week = $this->weekRepository->find($id);

        if (empty($week)) {
            Flash::error('Week not found');

            return redirect(route('weeks.index'));
        }

        return view('weeks.show')->with('week', $week);
    }

    /**
     * Show the form for editing the specified Week.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $week = $this->weekRepository->find($id);

        if (empty($week)) {
            Flash::error('Week not found');

            return redirect(route('weeks.index'));
        }

        return view('weeks.edit')->with('week', $week);
    }

    /**
     * Update the specified Week in storage.
     *
     * @param int $id
     * @param UpdateWeekRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWeekRequest $request)
    {
        $week = $this->weekRepository->find($id);

        if (empty($week)) {
            Flash::error('Week not found');

            return redirect(route('weeks.index'));
        }

        $week = $this->weekRepository->update($request->all(), $id);

        Flash::success('Week updated successfully.');

        return redirect(route('weeks.index'));
    }

    /**
     * Remove the specified Week from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $week = $this->weekRepository->find($id);

        if (empty($week)) {
            Flash::error('Week not found');

            return redirect(route('weeks.index'));
        }

        $this->weekRepository->delete($id);

        Flash::success('Week deleted successfully.');

        return redirect(route('weeks.index'));
    }
}
