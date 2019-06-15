<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Setting
 * @package App\Models
 * @version June 15, 2019, 10:27 am UTC
 *
 * @property string key
 * @property string display_name
 * @property string value
 * @property string details
 * @property string type
 * @property string group
 */
class Setting extends Model
{
    use SoftDeletes;

    public $table = 'settings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'key',
        'display_name',
        'value',
        'details',
        'type',
        'group'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'key' => 'string',
        'display_name' => 'string',
        'value' => 'string',
        'details' => 'string',
        'type' => 'string',
        'group' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'key' => 'required|unique:settings',
        'display_name' => 'required',
        'value' => 'nullable',
        'details' => 'nullable',
        'type' => 'required',
        'group' => 'required'
    ];

    
}
