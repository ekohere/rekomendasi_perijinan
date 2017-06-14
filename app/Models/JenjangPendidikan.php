<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JenjangPendidikan
 */
class JenjangPendidikan extends Model
{
    protected $table = 'jenjang_pendidikan';

    public $timestamps = true;

    protected $fillable = [
        'nama'
    ];

    protected $guarded = [];

        
}