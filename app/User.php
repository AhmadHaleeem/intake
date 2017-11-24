<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{



    public function Evaluations() {
        return $this->hasMany(Evaluations::class);
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
//    public function roles() {
//        return $this->belongsToMany('App\Role', 'users_role', 'user_id', 'role_id');
//    }

//    public function hasAnyRole($roles) {
//        if(is_array($roles)) {
//            foreach ($roles as $role) {
//                if ($this->hasRole($role)) {
//                    return true;
//                }
//            }
//        } else {
//            if ($this->hasRole($roles)) {
//                return true;
//            }
//        }
//    }
//
//    public function hasRole($role) {
//        if ($this->roles()->where('name', $role)->first()) {
//            return true;
//        }
//        return false;
//    }

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