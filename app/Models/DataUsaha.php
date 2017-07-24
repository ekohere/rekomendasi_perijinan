<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DataUsaha
 * @package App\Models
 * @version June 17, 2017, 10:46 pm UTC
 */
class DataUsaha extends Model
{
    use SoftDeletes;

    public $table = 'data_usaha';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'nama' => 'string',
        'jenis' => 'string',
        'kontak' => 'string',
        'alamat' => 'string',
        'npwp_usaha' => 'string',
        'scan_npwp' => 'string',
        'nomor_siup' => 'string',
        'scan_siup' => 'string',
        'nomor_situ' => 'string',
        'scan_situ' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'jenis' => 'required',
        'npwp_usaha' => 'required',
        'scan_npwp' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function rekomendasiReklames()
    {
        return $this->hasMany(\App\Models\RekomendasiReklame::class);
    }
}
