<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id','name', 'email','role_id','password','is_active', 'created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];


    public function role(){

        return $this->belongsTo('App\Role');


    }
    public function isAdmin(){


        if($this->role->name  == "administrator" && $this->is_active == 1){
            return true;
        }
        return false;
    }

    public function product(){


        return $this->hasMany('App\Product');


    }


}
