<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JenjangPendidikan
 * @package App\Models
 * @version June 17, 2017, 10:22 pm UTC
 */
class JenjangPendidikan extends Model
{
    use SoftDeletes;

    public $table = 'jenjang_pendidikan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function biodata()
    {
        return $this->hasMany(\App\Models\Biodatum::class);
    }
}
