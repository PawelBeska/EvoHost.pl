<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusfile extends Model
{
    protected $fillable = ['name','color'];

    public function files()
    {
        return $this->hasMany('App\Movies',  'status','id')->get();
    }
    public static function statuses($status)
    {
        $statuses = ['wait_for_admin'=>1,
            'wait_for_download'=>2,
            'downloading'=>3,
            'downloaded'=>4,
            'wait_for_remove'=>5,
            'bad_format'=>6];
        if(isset($statuses[$status]))
        {
            return $statuses[$status];
        }else
        {
            error_log('Brak statusu o takim id!');
        }
    }

}
