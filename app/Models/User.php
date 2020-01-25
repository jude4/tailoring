<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version January 20, 2020, 7:51 pm UTC
 *
 * @property string name
 * @property string email
 * @property integer role_id
 * @property string|\Carbon\Carbon email_verified_at
 * @property string phone_no
 * @property string password
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'role_id',
        'email_verified_at',
        'phone_no',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'role_id' => 'integer',
        'email_verified_at' => 'datetime',
        'phone_no' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'role_id' => 'nullable',
        'password' => 'required'
    ];

    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
    
}
