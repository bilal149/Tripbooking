<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUploaderRequest;
use App\Http\Requests\UpdateUploaderRequest;
use App\Repositories\UploaderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UploaderController extends AppBaseController
{
    /** @var  UploaderRepository */
    private $uploaderRepository;

    public function __construct(UploaderRepository $uploaderRepo)
    {
        $this->uploaderRepository = $uploaderRepo;
    }

    /**
     * Display a listing of the Uploader.
     * 
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uploaders = $this->uploaderRepository->all();

        return view('uploaders.index')
            ->with('uploaders', $uploaders);
    }

    /**
     * Show the form for creating a new Uploader.
     *
     * @return Response
     */
    public function create()
    {
        return view('uploaders.create');
    }

    /**
     * Store a newly created Uploader in storage.
     *
     * @param CreateUploaderRequest $request
     *
     * @return Response
     */
    public function store(CreateUploaderRequest $request)
    {
        //$input = $request->all(); 
 
        $uploader = $this->uploaderRepository->createUploader($request);

        Flash::success('Uploader saved successfully.');

        return redirect(route('uploaders.index'));
    }

    /**
     * Display the specified Uploader.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uploader = $this->uploaderRepository->find($id);

        if (empty($uploader)) {
            Flash::error('Uploader not found');

            return redirect(route('uploaders.index'));
        }

        return view('uploaders.show')->with('uploader', $uploader);
    }

    /**
     * Show the form for editing the specified Uploader.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uploader = $this->uploaderRepository->find($id);

        if (empty($uploader)) {
            Flash::error('Uploader not found');

            return redirect(route('uploaders.index'));
        }

        return view('uploaders.edit')->with('uploader', $uploader);
    }

    /**
     * Update the specified Uploader in storage.
     *
     * @param int $id
     * @param UpdateUploaderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUploaderRequest $request)
    {
        $uploader = $this->uploaderRepository->find($id);

        if (empty($uploader)) {
            Flash::error('Uploader not found');

            return redirect(route('uploaders.index'));
        }

        $uploader = $this->uploaderRepository->update($request->all(), $id);

        Flash::success('Uploader updated successfully.');

        return redirect(route('uploaders.index'));
    }

    /**
     * Remove the specified Uploader from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uploader = $this->uploaderRepository->find($id);

        if (empty($uploader)) {
            Flash::error('Uploader not found');

            return redirect(route('uploaders.index'));
        }

        $this->uploaderRepository->delete($id);

        Flash::success('Uploader deleted successfully.');

        return redirect(route('uploaders.index'));
    }


}
