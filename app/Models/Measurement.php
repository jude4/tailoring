<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Measurement
 * @package App\Models
 * @version January 24, 2020, 5:44 am UTC
 *
 * @property integer user_id
 * @property string product_name
 * @property string fabric
 * @property string quantity
 * @property string length
 * @property string bust_size
 * @property string shoulder_size
 * @property string sleeve_length
 * @property string round_curve
 * @property string waist_size
 * @property string Hip_size
 * @property string knee_length
 * @property string thigh
 * @property string image
 */
class Measurement extends Model
{
    use SoftDeletes;

    public $table = 'measurements';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_name' => 'string',
        'fabric' => 'string',
        'quantity' => 'string',
        'length' => 'string',
        'bust_size' => 'string',
        'shoulder_size' => 'string',
        'sleeve_length' => 'string',
        'round_curve' => 'string',
        'waist_size' => 'string',
        'Hip_size' => 'string',
        'knee_length' => 'string',
        'thigh' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required'
    ];

    
}
