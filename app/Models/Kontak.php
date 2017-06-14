<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Kontak
 */
class Kontak extends Model
{
    protected $table = 'kontak';

    public $timestamps = true;

    protected $fillable = [
        'nomor',
        'biodata_id'
    ];

    protected $guarded = [];

    public function biodata(){
        return $this->belongsTo('App\Models\Biodata');
    }
        
}