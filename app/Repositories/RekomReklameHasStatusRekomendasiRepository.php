<?php

namespace App\Repositories;

use App\Models\RekomReklameHasStatusRekomendasi;
use InfyOm\Generator\Common\BaseRepository;

class RekomReklameHasStatusRekomendasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rekomendasi_reklame_id',
        'status_rekomendasi_id',
        'users_id',
        'keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RekomReklameHasStatusRekomendasi::class;
    }
}
