<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    public static $rules = array(
        'password' => 'required|min:6',
    );

    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function biodata()
    {
        return $this->hasOne(\App\Models\Biodata::class);
    }

   

    public function rekomendasis()
    {
        return $this->hasMany(\App\Models\Rekomendasi::class);
    }
}
