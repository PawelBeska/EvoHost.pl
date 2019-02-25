<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Server extends Model
{
    protected $fillable = ['name','ip','status'];
    public function movies()
    {
        return $this->hasMany('App\Movies',  'server','id')->get();
    }
    public function status()
    {
        return $this->belongsTo('App\Statusserver','status','id')->first();
    }
    public static function check()
    {

        foreach(self::where('status',Statusserver::statuses('turned_on'))->get() as $server)
        {
            if($server->updated_at->diffInMinutes(Carbon::now())>15)
            {
                    $server->update(['status'=>Statusserver::statuses('turned_off')]);
            }
        }
    }
    public function buttons()
    {
        if($this->status()->id == Statusserver::statuses('turned_off'))
        {
            return '<div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg"> 
                                                  <div class="btn-group dropdown-split-primary">
                                                  <button type="button" class="btn btn-mini btn-primary"><i class="fa fa-external-link-square"></i>Więcej</button>
                                                  <button type="button" class="btn btn-mini btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle primary</span>
                                                  </button>
                                                  <div class="dropdown-menu">
                                                  <a id="turn_on" class="dropdown-item waves-effect waves-light" href="#">Włącz</a>
                                                  </div>
                                                  </div>
                                                  <button id="edit" class="btn btn-mini btn-warning"><i class="fa fa-pencil-square"></i>Edytuj</button>
                                                  <button id="remove" class="btn btn-mini btn-danger"><i class="fa fa-minus-square"></i>Usuń</button>
                                                  </div>';
        }elseif($this->status()->id==Statusserver::statuses('turned_on'))
        {
            return '<div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg"> 
                                                  <div class="btn-group dropdown-split-primary">
                                                  <button type="button" class="btn btn-mini btn-primary"><i class="fa fa-external-link-square"></i>Więcej</button>
                                                  <button type="button" class="btn btn-mini btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle primary</span>
                                                  </button>
                                                  <div class="dropdown-menu">
                                                  <a id="turn_off" class="dropdown-item waves-effect waves-light" href="#">Wyłącz</a>
                                                  </div>
                                                  </div>
                                                  <button id="edit" class="btn btn-mini btn-warning"><i class="fa fa-pencil-square"></i>Edytuj</button>
                                                  <button id="remove" class="btn btn-mini btn-danger"><i class="fa fa-minus-square"></i>Usuń</button>
                                                  </div>';

        }else{
            return '<div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg"> 
                                                  <div class="btn-group dropdown-split-primary">
                                                  <button type="button" class="btn btn-mini btn-primary"><i class="fa fa-external-link-square"></i>Więcej</button>
                                                  <button type="button" class="btn btn-mini btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle primary</span>
                                                  </button>
                                                  <div class="dropdown-menu">
                                                  <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                                  <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                                  <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                                  <button id="edit" class="btn btn-mini btn-warning"><i class="fa fa-pencil-square"></i>Edytuj</button>
                                                  <button id="remove" class="btn btn-mini btn-danger"><i class="fa fa-minus-square"></i>Usuń</button>
                                                  </div>';

        }
    }
}
