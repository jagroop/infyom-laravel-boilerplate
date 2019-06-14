<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models
 * @version June 14, 2019, 8:30 am UTC
 *
 * @property integer author_id
 * @property string title
 * @property string excerpt
 * @property string body
 * @property string image
 * @property string slug
 * @property string meta_description
 * @property string meta_keywords
 * @property string status
 */
class Page extends Model
{
    use SoftDeletes;

    public $table = 'pages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'author_id',
        'title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keywords',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'title' => 'string',
        'excerpt' => 'string',
        'image' => 'string',
        'slug' => 'string',
        'meta_description' => 'string',
        'meta_keywords' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
