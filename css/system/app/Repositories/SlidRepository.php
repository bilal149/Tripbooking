<?php

namespace App\Repositories;

use App\Models\Slid;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class SlidRepository
 * @package App\Repositories
 * @version September 28, 2020, 7:41 am UTC
*/

class SlidRepository extends BaseRepository
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
        return Slid::class;
    }

    public function createSlid(Request $request){
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
