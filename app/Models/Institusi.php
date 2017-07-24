<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Institusi
 * @package App\Models
 * @version June 17, 2017, 10:24 pm UTC
 */
class Institusi extends Model
{
    use SoftDeletes;

    public $table = 'institusi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'kode',
        'nama',
        'kontak',
        'email',
        'jenis_institusi_id',
        'parent_institusi_id',
        'pimpinan_institusi_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode' => 'string',
        'nama' => 'string',
        'kontak' => 'string',
        'email' => 'string',
        'jenis_institusi_id' => 'integer',
        'parent_institusi_id' => 'integer',
        'pimpinan_institusi_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode' => 'required',
        'nama' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pegawai()
    {
        return $this->belongsTo(\App\Models\Pegawai::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jenisInstitusi()
    {
        return $this->belongsTo(\App\Models\JenisInstitusi::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pegawais()
    {
        return $this->hasMany(\App\Models\Pegawai::class,'pimpinan_institusi_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pimpinan_institusi()
    {
        return $this->hasOne(\App\Models\Pegawai::class,'pimpinan_institusi_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function rekomendasis()
    {
        return $this->hasMany(\App\Models\Rekomendasi::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function statusRekomendasis()
    {
        return $this->hasMany(\App\Models\StatusRekomendasi::class);
    }
}
