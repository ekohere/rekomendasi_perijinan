<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JenisInstitusi
 */
class JenisInstitusi extends Model
{
    protected $table = 'jenis_institusi';

    public $timestamps = true;

    protected $fillable = [
        'nama',
        'keterangan'
    ];

    protected $guarded = [];

        
}