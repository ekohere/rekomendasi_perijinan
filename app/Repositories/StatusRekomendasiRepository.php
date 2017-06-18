<?php

namespace App\Repositories;

use App\Models\StatusRekomendasi;
use InfyOm\Generator\Common\BaseRepository;

class StatusRekomendasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'keterangan',
        'parent_status_id',
        'institusi_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return StatusRekomendasi::class;
    }
}
