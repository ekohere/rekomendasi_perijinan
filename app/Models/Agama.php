<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agama
 */
class Agama extends Model
{
    protected $table = 'agama';

    public $timestamps = true;

    protected $fillable = [
        'nama'
    ];

    protected $guarded = [];

        
}