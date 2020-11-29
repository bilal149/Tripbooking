<?php

namespace App\Repositories;

use App\Models\Servic;
use App\Repositories\BaseRepository;

/**
 * Class ServicRepository
 * @package App\Repositories
 * @version September 27, 2020, 8:29 am UTC
*/

class ServicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [ 
        'image',
        'heading',
        'details'
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
        return Servic::class;
    }
}
