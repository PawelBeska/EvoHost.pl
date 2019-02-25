<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'group','balance','site','public_key','private_key'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function views()
    {
        return Movie::with('views')->get();
    }
    public function movies()
    {
        return $this->hasMany('App\Movie',  'author','id')->get();
    }
    public function notifications()
    {
        return $this->hasMany('App\Notification',  'user','id');
    }
    public function group()
    {
        return $this->hasOne('App\Group', 'id', 'group')->first();
    }
    public function hasPermission($permission)
    {
        if ($this->group()->permissions()->where('name', $permission)->first() || $this->group()->permissions()->where('name', '*')->first()) {
            return true;
        }
        return false;
    }
    public function hasAnyPermission($permissions)
    {
        if (is_array($permissions)) {
            foreach ($permissions as $permission) {

                if ($this->hasPermission($permission)) {
                    return true;
                }
            }
        } else {
            if ($this->hasPermission($permissions)) {
                return true;
            }
        }
        return false;
    }
}
