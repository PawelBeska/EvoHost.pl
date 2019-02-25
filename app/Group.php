<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->hasMany('App\Permission',  'group','id')->get();
    }
    public function users()
    {
        return $this->belongsTo('App\User','id','group')->get();
    }
    public static function grups($status)
    {
        $statuses = [
            'admin'=>1,
            'moderator'=>2,
            'user'=>3,
            'partner'=>4];
        if(isset($statuses[$status]))
        {
            return $statuses[$status];
        }else
        {
            return false;
        }
    }
}
