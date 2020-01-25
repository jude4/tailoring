<?php

namespace App\Repositories;

use App\Models\Measurement;
use App\Repositories\BaseRepository;

/**
 * Class MeasurementRepository
 * @package App\Repositories
 * @version January 24, 2020, 5:44 am UTC
*/

class MeasurementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'product_name',
        'fabric',
        'quantity',
        'length',
        'bust_size',
        'shoulder_size',
        'sleeve_length',
        'round_curve',
        'waist_size',
        'Hip_size',
        'knee_length',
        'thigh',
        'image'
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
        return Measurement::class;
    }
}
