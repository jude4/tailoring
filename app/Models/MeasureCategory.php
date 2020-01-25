<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MeasureCategory
 * @package App\Models
 * @version January 20, 2020, 11:25 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection measurements
 * @property string name
 */
class MeasureCategory extends Model
{
    use SoftDeletes;

    public $table = 'measure_categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function measurements()
    {
        return $this->hasMany(\App\Models\Measurement::class, 'measure_category_id');
    }
}
