<?php

namespace App\Repositories;

use App\Models\Uploader;
use Illuminate\Support\Str;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


/**
 * Class UploaderRepository
 * @package App\Repositories
 * @version September 28, 2020, 7:01 am UTC
*/

class UploaderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'heading',
        'details',
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
        return Uploader::class;
    }
    public function createUploader(Request $request){
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
