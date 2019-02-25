<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name','group'];
    public function group()
    {
        return $this->belongsTo('App\Group','group','id')->first();
    }
}
