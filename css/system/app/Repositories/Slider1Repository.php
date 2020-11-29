<?php

namespace App\Repositories;

use App\Models\Slider1;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class Slider1Repository
 * @package App\Repositories
 * @version September 28, 2020, 10:36 am UTC
*/

class Slider1Repository extends BaseRepository
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
        return Slider1::class;
    }

    public function createSlider1(Request $request){
        $file = $request->file('image_url');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'slides/'.uniqid().'.'.$extension;//maybe errror
        $img = Image::make($file);
        $img->save(($path));

        $input = $request->all();
        $input['image_url'] = $path;

        return $this->create($input);
    }
}
