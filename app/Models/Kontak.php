<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Kontak
 */
class Kontak extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'kontak';

    protected $fillable = [
        'nomor',
        'biodata_id'
    ];

    protected static $rule=[
        'nomor' => 'required'
    ];

    public function biodata()
    {
        return $this->belongsTo('App\Models\Biodata');
    }
}