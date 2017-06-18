<?php

namespace App\Repositories;

use App\Models\Rekomendasi;
use InfyOm\Generator\Common\BaseRepository;

class RekomendasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'institusi_id',
        'url',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rekomendasi::class;
    }
}
