<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\File; 
use App\Http\Requests\CreateFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Repositories\FileRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\models\File; //----> thats for image handling instead of facades
use Flash;

use Response;

class FileController extends AppBaseController
{
    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }

    /**
     * Display a listing of the File.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $files = $this->fileRepository->all();

        return view('files.index')
            ->with('files', $files);
    }

    /**
     * Show the form for creating a new File.
     *
     * @return Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created File in storage.
     *
     * @param CreateFileRequest $request
     *
     * @return Response
     */
    public function store(CreateFileRequest $request)
    {
        $input = $request->all();



       if($request->hasFile('image'))
        {
        $fullimage=$request->file('image')->getClientOriginalName();
        $imagename=pathinfo($fullimage,PATHINFO_FILENAME);
        $imageext=$request->file('image')->getClientOriginalExtension();
        $imagefile=$imagename.'_'.time().'.'.$imageext;
        $path=$request->file('image')->storeAs('public/posts',$imagefile);

        }
        else
        {
        $imagefile="nofile";
        }
        $file = new File;
        $file->image=$imagefile;
        $file->save();

/*
if($request->hasFile('image'))
        { 
        $fullimage=$request->file('image')->getClientOriginalName();
        $imagename=pathinfo($fullimage,PATHINFO_FILENAME);
        $imageext=$request->file('image')->getClientOriginalExtension();
        $imagefile=$imagename.'_'.time().'.'.$imageext;
        $request->img->move(public_path('posts'), $filename);

        //echo "<img src='$request->file('image')'>"      
//        $path=$request->file('image')->storeAs('public/posts',$imagefile);
 
        }
        else
        {
        $imagefile="nofile";
        }


       // dd($imagefile);


        $file = new File;
        $file->image=$imagefile;
       // $file->save();
*/

     //  $file = $this->fileRepository->create($input);

        Flash::success('File saved successfully.');

        return redirect(route('files.index'));
    }

    /**
     * Display the specified File.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('files.index'));
        }

        return view('files.show')->with('file', $file);
    }

    /**
     * Show the form for editing the specified File.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('files.index'));
        }

        return view('files.edit')->with('file', $file);
    }

    /**
     * Update the specified File in storage.
     *
     * @param int $id
     * @param UpdateFileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileRequest $request)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('files.index'));
        }

        $file = $this->fileRepository->update($request->all(), $id);

        Flash::success('File updated successfully.');

        return redirect(route('files.index'));
    }

    /**
     * Remove the specified File from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('files.index'));
        }

        $this->fileRepository->delete($id);

        Flash::success('File deleted successfully.');

        return redirect(route('files.index'));
    }
}
