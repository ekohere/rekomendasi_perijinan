<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Institusi
 */
class Institusi extends Model
{
    protected $table = 'institusi';

    public $timestamps = true;

    protected $fillable = [
        'kode',
        'nama',
        'kontak',
        'email',
        'jenis_institusi_id',
        'parent_institusi_id'
    ];

    protected $guarded = [];

    public function jenis_institusi(){
        return $this->belongsTo('App\Models\JenisInstitusi');
    }

    public function parent_institusi(){
        return $this->hasMany('App\Models\Institusi');
    }
        
}