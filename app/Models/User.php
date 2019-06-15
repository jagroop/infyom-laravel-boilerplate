<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version June 15, 2019, 6:15 am UTC
 *
 * @property string avatar
 * @property string name
 * @property string email
 * @property string email_verified_at
 * @property string password
 * @property integer status
 */
class User extends Authenticatable
{
    use Notifiable, HasRoles, SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'avatar',
        'name',
        'email',
        'email_verified_at',
        'password',
        'status'
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'avatar' => 'string',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'avatar' => 'nullable|image',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|min:8|max:255',
        'status' => 'numeric'
    ];

    
}
