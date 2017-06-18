<?php

namespace App\Repositories;

use App\Models\Agama;
use InfyOm\Generator\Common\BaseRepository;

class AgamaRepository extends BaseRepository
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
        return Agama::class;
    }
}
