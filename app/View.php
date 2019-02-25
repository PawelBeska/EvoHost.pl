<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
        'movie', 'ip'
    ];
    public function movie()
    {
        return $this->belongsTo('App\Movie','movie','id')->first();

    }
}
