<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Biodatum
 */
class Biodatum extends Model
{
    protected $table = 'biodata';

    public $timestamps = true;

    protected $fillable = [
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

    protected $guarded = [];

    public function alamat(){
        return $this->hasMany('App\Models\Alamat');
    }

    public function agama(){
        return $this->belongsTo('App\Models\Agama');
    }

    public function kontak(){
        return $this->hasMany('App\Models\Kontak');
    }

    public function user(){
        return $this->hasOne('App\User');
    }

    public function jenjang_pendidikan(){
        return $this->belongsTo('App\Models\JenjangPendidikan');
    }
        
}