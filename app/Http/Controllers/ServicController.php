<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateServicRequest;
use App\Http\Requests\UpdateServicRequest;
use App\Repositories\ServicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\models\Servic;
use Flash; 
use Response;

class ServicController extends AppBaseController
{
    /** @var  ServicRepository */
    private $servicRepository;

    public function __construct(ServicRepository $servicRepo)
    {
        $this->servicRepository = $servicRepo;
    }

    /**
     * Display a listing of the Servic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servics = $this->servicRepository->all();

        return view('servics.index')
            ->with('servics', $servics);
    }

    /**
     * Show the form for creating a new Servic.
     *
     * @return Response
     */
    public function create()
    {
        return view('servics.create');
    }

    /**
     * Store a newly created Servic in storage.
     *
     * @param CreateServicRequest $request
     *
     * @return Response
     */
    public function store(CreateServicRequest $request)
    {
       // $input = $request->all();


         
        ///for image we writte some laravel code herer
        
        $image = $request->file('image');
        
        $image_name = rand(1111,9999) . '.' . $image->getClientOriginalExtension();
        
        $image->move(public_path('posts'), $image_name);


        $servic = new Servic;
        $servic->heading = $request->heading;
        $servic->details = $request->details;
        $servic->image = $image_name;
        
        //dd($servic);
        
        $servic->save();


/*$input = $request->all();

$file = $request->file('image');
$extension ="png";
 $new_image_name = time(). '.' .$extension;
 $file->move(public_path('posts'), $new_image_name);
 
//dd($new_image_name);

 //////////////our info inside database

 $servic = new Servic;
 $servic->image = $new_image_name;
 $servic->heading = $request->heading;
 $servic->details = $request->details;
 */
/*  dd($input); die;
// $admission = $this->admissionRepository->create($input);*/

Flash::success('Servic '.$request->heading.''.$request->details. 'saved successfully.');

return redirect(route('servics.index'));










    /*    $servic = $this->servicRepository->create($input);

        Flash::success('Servic saved successfully.');

        return redirect(route('servics.index'));*/
    }

    /**
     * Display the specified Servic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servic = $this->servicRepository->find($id);

        if (empty($servic)) {
            Flash::error('Servic not found');

            return redirect(route('servics.index'));
        }

        return view('servics.show')->with('servic', $servic);
    }

    /**
     * Show the form for editing the specified Servic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servic = $this->servicRepository->find($id);

        if (empty($servic)) {
            Flash::error('Servic not found');

            return redirect(route('servics.index'));
        }

        return view('servics.edit')->with('servic', $servic);
    }

    /**
     * Update the specified Servic in storage.
     *
     * @param int $id
     * @param UpdateServicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicRequest $request)
    {
        $servic = $this->servicRepository->find($id);

        if (empty($servic)) {
            Flash::error('Servic not found');

            return redirect(route('servics.index'));
        }

        $servic = $this->servicRepository->update($request->all(), $id);

        Flash::success('Servic updated successfully.');

        return redirect(route('servics.index'));
    }

    /**
     * Remove the specified Servic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servic = $this->servicRepository->find($id);

        if (empty($servic)) {
            Flash::error('Servic not found');

            return redirect(route('servics.index'));
        }

        $this->servicRepository->delete($id);

        Flash::success('Servic deleted successfully.');

        return redirect(route('servics.index'));
    }
}
