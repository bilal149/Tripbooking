<?php

namespace App\Repositories;

use App\Models\Flier;
use Illuminate\Support\Str;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


/**
 * Class FlierRepository
 * @package App\Repositories
 * @version November 11, 2020, 6:52 am UTC
*/

class FlierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image_url'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Flier::class;
    }

    public function createFlier(Request $request){
        $file = $request->file('image_url');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = ''.uniqid().'.'.$extension;//maybe errror
        $img = Image::make($file);
        $img->save(($path));

        $input = $request->all();
        $input['image_url'] = $path;

        return $this->create($input);
    } 

}
