<?php

namespace App\Repositories;

use App\Models\About;
use App\Repositories\BaseRepository;

/**
 * Class AboutRepository
 * @package App\Repositories
 * @version October 5, 2020, 12:15 pm UTC
*/

class AboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'welcome',
        'heading',
        'sub_heading',
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
        return About::class;
    }
}
