<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{



    public function Evaluations() {
        return $this->hasOne(Evaluations::class);
    }

    public function Ontwerps() {
        return $this->hasMany(Ontwerps::class);
    }

    public function Inhouds() {
        return $this->hasMany(Inhouds::class);
    }
    public function Technieks() {
        return $this->hasMany(Technieks::class);
    }

    public function Hostings() {
        return $this->hasMany(Hostings::class);
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
