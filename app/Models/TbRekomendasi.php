<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRekomendasi
 */
class TbRekomendasi extends Model
{
    protected $table = 'tb_rekomendasi';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'institusi_id',
        'users_id'
    ];

    protected $guarded = [];

    public function institusi(){
        return $this->belongsTo('App\Models\Institusi');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
        
}