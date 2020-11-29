<?php

namespace App\Repositories;

use App\Models\Week;
use App\Repositories\BaseRepository;

/**
 * Class WeekRepository
 * @package App\Repositories
 * @version November 11, 2020, 7:18 am UTC
*/

class WeekRepository extends BaseRepository
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
        return Week::class;
    }
}
