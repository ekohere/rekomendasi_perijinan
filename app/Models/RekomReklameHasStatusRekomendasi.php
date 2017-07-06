<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RekomReklameHasStatusRekomendasi
 * @package App\Models
 * @version June 17, 2017, 10:45 pm UTC
 */
class RekomReklameHasStatusRekomendasi extends Model
{
    use SoftDeletes;

    public $table = 'rekom_reklame_has_status_rekomendasi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'rekomendasi_reklame_id',
        'status_rekomendasi_id',
        'users_id',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rekomendasi_reklame_id' => 'integer',
        'status_rekomendasi_id' => 'integer',
        'users_id' => 'integer',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function statusRekomendasi()
    {
        return $this->belongsTo(\App\Models\StatusRekomendasi::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function rekomendasiReklame()
    {
        return $this->belongsTo(\App\Models\RekomendasiReklame::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class,'users_id');
    }
}
