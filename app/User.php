<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'name',
        'role_id',
        'email',
        'email_verified_at',
        'profile_pic',
        'referrer_link',
        'balance',
        'status',
        'phone_no',
        'referrer_by',
        'no_of_refs',
        'ref_level_id'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role_id' => 'integer',
        'referrer_by' => 'integer',
        'no_of_refs' => 'integer',
        'ref_level_id' => 'integer',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'profile_pic' => 'string',
        'referrer_link' => 'string',
        'balance' => 'string',
        'status' => 'boolean',
        'phone_no' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

     public function referrer()
    {
        return $this->belongsTo('App\User', 'referred_by');
    }

    public function referrals()
    {
        return $this->hasMany('App\User', 'referred_by');
    }

}
