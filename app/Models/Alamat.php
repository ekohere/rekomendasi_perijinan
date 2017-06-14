<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alamat
 */
class Alamat extends Model
{
    protected $table = 'alamat';

    public $timestamps = true;

    protected $fillable = [
        'rt',
        'rw',
        'nomor',
        'jalan',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'status',
        'biodata_id'
    ];

    protected $guarded = [];


    public function biodata(){
        return $this->belongsTo('App\Models\Biodataum');
    }
        
}