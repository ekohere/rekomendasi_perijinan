<?php

namespace App\Repositories;

use App\Models\Institusi;
use InfyOm\Generator\Common\BaseRepository;

class InstitusiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode',
        'nama',
        'kontak',
        'email',
        'jenis_institusi_id',
        'parent_institusi_id',
        'pimpinan_institusi_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Institusi::class;
    }
}
