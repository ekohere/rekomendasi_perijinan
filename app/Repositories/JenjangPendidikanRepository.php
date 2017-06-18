<?php

namespace App\Repositories;

use App\Models\JenjangPendidikan;
use InfyOm\Generator\Common\BaseRepository;

class JenjangPendidikanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JenjangPendidikan::class;
    }
}
