<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRekomReklame
 */
class TbRekomReklame extends Model
{
    protected $table = 'tb_rekom_reklame';

    public $timestamps = false;

    protected $fillable = [
        'jenis_reklame',
        'teks_reklame',
        'ukuran_reklame',
        'lama_pemasangan_from',
        'lama_pemasangan_to',
        'lokasi_pemasangan',
        'scan_desain_reklame',
        'tb_rekomendasi_id'
    ];

    protected $guarded = [];

    public function tb_rekomendasi(){
        return $this->belongsTo('App\Models\TbRekomendasi');
    }
}