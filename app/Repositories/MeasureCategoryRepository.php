<?php

namespace App\Repositories;

use App\Models\MeasureCategory;
use App\Repositories\BaseRepository;

/**
 * Class MeasureCategoryRepository
 * @package App\Repositories
 * @version January 20, 2020, 11:25 pm UTC
*/

class MeasureCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return MeasureCategory::class;
    }
}
