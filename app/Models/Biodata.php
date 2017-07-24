<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Biodata
 * @package App\Models
 * @version June 18, 2017, 12:53 am UTC
 */
class Biodata extends Model
{
    use SoftDeletes;

    public $table = 'biodata';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'foto',
        'kontak'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'nik' => 'string',
        'npwp_pribadi' => 'string',
        'scan_ktp' => 'string',
        'scan_npwp' => 'string',
        'jenjang_pendidikan_id' => 'integer',
        'tempat_lahir' => 'string',
        'tanggal_lahir' => 'date',
        'jenis_kelamin' => 'string',
        'kewarganegaraan' => 'string',
        'status_perkawinan' => 'string',
        'agama_id' => 'integer',
        'website' => 'string',
        'foto' => 'string',
        'kontak'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nik' => 'required',
        'scan_npwp' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function agama()
    {
        return $this->belongsTo(\App\Models\Agama::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jenjangPendidikan()
    {
        return $this->belongsTo(\App\Models\JenjangPendidikan::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function alamats()
    {
        return $this->hasMany(\App\Models\Alamat::class);
    }
    public function alamatAsal(){
        return $this->alamats()->where('alamat.status','asal')->first();
    }

    public function alamatSekarang(){
        return $this->alamats()->where('alamat.status','sekarang')->first();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function kontaks()
    {
        return $this->hasMany(\App\Models\Kontak::class);
    }
}
