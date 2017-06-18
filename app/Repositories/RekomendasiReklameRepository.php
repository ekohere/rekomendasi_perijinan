<?php

namespace App\Repositories;

use App\Models\RekomendasiReklame;
use InfyOm\Generator\Common\BaseRepository;

class RekomendasiReklameRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_reklame',
        'teks_reklame',
        'ukuran_reklame',
        'lama_pemasangan_from',
        'lama_pemasangan_to',
        'lokasi_pemasangan',
        'scan_desain_reklame',
        'rekomendasi_id',
        'data_usaha_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RekomendasiReklame::class;
    }
}
