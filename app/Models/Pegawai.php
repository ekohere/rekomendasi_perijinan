<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pegawai
 * @package App\Models
 * @version July 5, 2017, 1:30 pm UTC
 */
class Pegawai extends Model
{
    use SoftDeletes;

    public $table = 'pegawai';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nip',
        'institusi_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nip' => 'string',
        'institusi_id' => 'integer',
        'users_id' => 'integer'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class,'users_id');
    }

/*
    public function institusis()
    {
        return $this->hasMany(\App\Models\Institusi::class);
    }*/
}
