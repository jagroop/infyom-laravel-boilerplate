<?php

namespace App\Repositories;

use App\Models\Page;
use App\Repositories\BaseRepository;

/**
 * Class PageRepository
 * @package App\Repositories
 * @version June 14, 2019, 8:30 am UTC
*/

class PageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Page::class;
    }
}
