<?php

namespace App\Models;

use Eloquent as Model;
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
class User extends Model
{
    use SoftDeletes;

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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'avatar' => 'string',
        'name' => 'string',
        'email' => 'string',
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
