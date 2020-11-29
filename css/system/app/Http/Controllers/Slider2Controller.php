<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlider2Request;
use App\Http\Requests\UpdateSlider2Request;
use App\Repositories\Slider2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash; 
use Response;

class Slider2Controller extends AppBaseController
{
    /** @var  Slider2Repository */
    private $slider2Repository;

    public function __construct(Slider2Repository $slider2Repo)
    {
        $this->slider2Repository = $slider2Repo;
    }

    /**
     * Display a listing of the Slider2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $slider2s = $this->slider2Repository->all();

        return view('slider2s.index')
            ->with('slider2s', $slider2s);
    }

    /**
     * Show the form for creating a new Slider2.
     *
     * @return Response
     */
    public function create()
    {
        return view('slider2s.create');
    }

    /**
     * Store a newly created Slider2 in storage.
     *
     * @param CreateSlider2Request $request
     *
     * @return Response
     */
    public function store(CreateSlider2Request $request)
    {
//        $input = $request->all();

        $slider2 = $this->slider2Repository->createSlider2($request);

        Flash::success('Slider2 saved successfully.');

        return redirect(route('slider2s.index'));
    }

    /**
     * Display the specified Slider2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slider2 = $this->slider2Repository->find($id);

        if (empty($slider2)) {
            Flash::error('Slider2 not found');

            return redirect(route('slider2s.index'));
        }

        return view('slider2s.show')->with('slider2', $slider2);
    }

    /**
     * Show the form for editing the specified Slider2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slider2 = $this->slider2Repository->find($id);

        if (empty($slider2)) {
            Flash::error('Slider2 not found');

            return redirect(route('slider2s.index'));
        }

        return view('slider2s.edit')->with('slider2', $slider2);
    }

    /**
     * Update the specified Slider2 in storage.
     *
     * @param int $id
     * @param UpdateSlider2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateSlider2Request $request)
    {
        $slider2 = $this->slider2Repository->find($id);

        if (empty($slider2)) {
            Flash::error('Slider2 not found');

            return redirect(route('slider2s.index'));
        }

        $slider2 = $this->slider2Repository->update($request->all(), $id);

        Flash::success('Slider2 updated successfully.');

        return redirect(route('slider2s.index'));
    }

    /**
     * Remove the specified Slider2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slider2 = $this->slider2Repository->find($id);

        if (empty($slider2)) {
            Flash::error('Slider2 not found');

            return redirect(route('slider2s.index'));
        }

        $this->slider2Repository->delete($id);

        Flash::success('Slider2 deleted successfully.');

        return redirect(route('slider2s.index'));
    }
}
