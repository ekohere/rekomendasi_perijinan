<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StatusRekomendasi
 * @package App\Models
 * @version June 17, 2017, 10:23 pm UTC
 */
class StatusRekomendasi extends Model
{
    use SoftDeletes;

    public $table = 'status_rekomendasi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'keterangan',
        'parent_status_id',
        'institusi_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'keterangan' => 'string',
        'parent_status_id' => 'integer',
        'institusi_id' => 'integer'
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
    public function institusi()
    {
        return $this->belongsTo(\App\Models\Institusi::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function rekomReklameHasStatusRekomendasis()
    {
        return $this->hasMany(\App\Models\RekomReklameHasStatusRekomendasi::class);
    }
}
