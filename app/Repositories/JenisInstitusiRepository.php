<?php

namespace App\Repositories;

use App\Models\JenisInstitusi;
use InfyOm\Generator\Common\BaseRepository;

class JenisInstitusiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JenisInstitusi::class;
    }
}
