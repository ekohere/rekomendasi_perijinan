<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DataUsaha
 */
class DataUsaha extends Model
{
    protected $table = 'data_usaha';

    public $timestamps = true;

    protected $fillable = [
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

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }
        
}