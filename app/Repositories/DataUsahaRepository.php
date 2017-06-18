<?php

namespace App\Repositories;

use App\Models\DataUsaha;
use InfyOm\Generator\Common\BaseRepository;

class DataUsahaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'nama',
        'jenis',
        'kontak',
        'alamat',
        'npwp_usaha',
        'scan_npwp',
        'nomor_siup',
        'scan_siup',
        'nomor_situ',
        'scan_situ'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DataUsaha::class;
    }
}
