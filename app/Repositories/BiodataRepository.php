<?php

namespace App\Repositories;

use App\Models\Biodata;
use InfyOm\Generator\Common\BaseRepository;

class BiodataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'nik',
        'npwp_pribadi',
        'scan_ktp',
        'scan_npwp',
        'jenjang_pendidikan_id',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'kewarganegaraan',
        'status_perkawinan',
        'agama_id',
        'website',
        'foto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Biodata::class;
    }
}
