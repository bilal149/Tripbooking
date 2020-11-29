<?php

namespace App\Repositories;

use App\Models\Mission;
use App\Repositories\BaseRepository;

/**
 * Class MissionRepository
 * @package App\Repositories
 * @version October 5, 2020, 12:25 pm UTC
*/

class MissionRepository extends BaseRepository
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
        return Mission::class;
    }
}
