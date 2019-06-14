<?php

namespace App\Repositories;

use App\Models\Award;
use App\Repositories\BaseRepository;

/**
 * Class AwardRepository
 * @package App\Repositories
 * @version June 14, 2019, 7:02 am UTC
*/

class AwardRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
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
        return Award::class;
    }
}
