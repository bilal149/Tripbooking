<?php

namespace App\Repositories;

use App\Models\Vision;
use App\Repositories\BaseRepository;

/**
 * Class VisionRepository
 * @package App\Repositories
 * @version October 5, 2020, 12:26 pm UTC
*/

class VisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Vision::class;
    }
}
