<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Alamat
 */
class Alamat extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'alamat';

    protected $fillable = [
        'rt',
        'rw',
        'nomor',
        'jalan',
        'kelurahan',
        'kabupaten',
        'kecamatan',
        'provinsi',
        'status',
        'biodata_id'
    ];

    public static $rules = [
        'kabupaten' => 'required',
        'provinsi' => 'required',
        'status' => 'required'
    ];

    public function alamatLengkap(){
        return (isset($this->jalan)?'Jalan '.$this->jalan.',':'').
        (isset($this->rt)?'RT '.$this->rt.',':'').
        (isset($this->rw)?'RW '.$this->rw.',':'').
            (isset($this->nomor)?'Nomor '.$this->nomor.',':'').
                (isset($this->kelurahan)?'Kelurahan '.$this->kelurahan.',':'').
                    (isset($this->kecamatan)?'Kecamatan '.$this->kecamatan.',':'').
                        (isset($this->kabupaten)?'Kabupaten '.$this->kabupaten.',':'').
                            (isset($this->provinsi)?'Provinsi '.$this->provinsi:'');
    }

    public function biodata()
    {
        return $this->belongsTo('App\Models\Biodata');
    }
}