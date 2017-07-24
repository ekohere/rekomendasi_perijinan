<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RekomendasiReklame
 * @package App\Models
 * @version June 17, 2017, 10:44 pm UTC
 */
class RekomendasiReklame extends Model
{
    use SoftDeletes;

    public $table = 'rekomendasi_reklame';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'jenis_reklame',
        'teks_reklame',
        'ukuran_reklame',
        'lama_pemasangan_from',
        'lama_pemasangan_to',
        'lokasi_pemasangan',
        'scan_desain_reklame',
        'rekomendasi_id',
        'data_usaha_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenis_reklame' => 'string',
        'teks_reklame' => 'string',
        'ukuran_reklame' => 'string',
        'lama_pemasangan_from' => 'date',
        'lama_pemasangan_to' => 'date',
        'lokasi_pemasangan' => 'string',
        'scan_desain_reklame' => 'string',
        'rekomendasi_id' => 'integer',
        'data_usaha_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'scan_desain_reklame' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function dataUsaha()
    {
        return $this->belongsTo(\App\Models\DataUsaha::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function rekomendasi()
    {
        return $this->belongsTo(\App\Models\Rekomendasi::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function rekomReklameHasStatusRekomendasis()
    {
        return $this->hasMany(\App\Models\RekomReklameHasStatusRekomendasi::class);
    }

    public function lastStatusRekomendasi()
    {
        return $this->rekomReklameHasStatusRekomendasis()->orderBy('created_at','desc')->first();
    }
}
