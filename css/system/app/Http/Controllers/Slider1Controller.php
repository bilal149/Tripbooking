<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlider1Request;
use App\Http\Requests\UpdateSlider1Request;
use App\Repositories\Slider1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Slider1Controller extends AppBaseController
{
    /** @var  Slider1Repository */
    private $slider1Repository;

    public function __construct(Slider1Repository $slider1Repo)
    {
        $this->slider1Repository = $slider1Repo;
    }

    /**
     * Display a listing of the Slider1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $slider1s = $this->slider1Repository->all();

        return view('slider1s.index')
            ->with('slider1s', $slider1s);
    }

    /**
     * Show the form for creating a new Slider1.
     *
     * @return Response
     */
    public function create()
    {
        return view('slider1s.create');
    }

    /**
     * Store a newly created Slider1 in storage.
     *
     * @param CreateSlider1Request $request
     *
     * @return Response
     */
    public function store(CreateSlider1Request $request)
    {
      //  $input = $request->all();

        $slider1 = $this->slider1Repository->createSlider1($request);

        Flash::success('Slider1 saved successfully.');

        return redirect(route('slider1s.index'));
    }

    /**
     * Display the specified Slider1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slider1 = $this->slider1Repository->find($id);

        if (empty($slider1)) {
            Flash::error('Slider1 not found');

            return redirect(route('slider1s.index'));
        }

        return view('slider1s.show')->with('slider1', $slider1);
    }

    /**
     * Show the form for editing the specified Slider1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slider1 = $this->slider1Repository->find($id);

        if (empty($slider1)) {
            Flash::error('Slider1 not found');

            return redirect(route('slider1s.index'));
        }

        return view('slider1s.edit')->with('slider1', $slider1);
    }

    /**
     * Update the specified Slider1 in storage.
     *
     * @param int $id
     * @param UpdateSlider1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateSlider1Request $request)
    {
        $slider1 = $this->slider1Repository->find($id);

        if (empty($slider1)) {
            Flash::error('Slider1 not found');

            return redirect(route('slider1s.index'));
        }

        $slider1 = $this->slider1Repository->update($request->all(), $id);

        Flash::success('Slider1 updated successfully.');

        return redirect(route('slider1s.index'));
    }

    /**
     * Remove the specified Slider1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slider1 = $this->slider1Repository->find($id);

        if (empty($slider1)) {
            Flash::error('Slider1 not found');

            return redirect(route('slider1s.index'));
        }

        $this->slider1Repository->delete($id);

        Flash::success('Slider1 deleted successfully.');

        return redirect(route('slider1s.index'));
    }
}
