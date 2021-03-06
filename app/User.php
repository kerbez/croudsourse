<?php

namespace App;

use App\Models\socialProvider as socialProvider;
use Illuminate\Notifications\Notifiable;
use App\Notifications\newCom;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    function socialProviders(){
        return $this->hasMany(socialProvider::class);
    }
}
