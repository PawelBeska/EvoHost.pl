<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','name','server','status','embed','author','remote_source','remote','source','poster'];
    public function author()
    {
        return $this->belongsTo('App\User','author','id')->first();
    }
    public function views()
    {
        return $this->hasMany('App\View',  'movie','id')->get();
    }
    public function url()
    {
        if($this->embed) {
            return route('embed', $this->embed);
        }return null;
    }
    public function status()
    {
       return $this->belongsTo('App\Statusfile','status','id')->first();
    }
    public function server()
    {
        if(isset($this->server)) {
            return $this->belongsTo('App\Server', 'server', 'id')->first();
        }else{
            return null;
        }
    }
    public function buttons()
    {
        if($this->status()->id == Statusfile::statuses('wait_for_admin'))
        {
            return '<div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg"> 
                                                  <div class="btn-group dropdown-split-primary">
                                                 <button route="'.route('admin.files.accept',['id'=>$this->id]).'" id="accept" class="btn btn-mini btn-success"><i class="fa fa-plus-square"></i>Zatwierdź</button>
                                                 <button id="edit" class="btn btn-mini btn-warning"><i class="fa fa-pencil-square"></i>Edytuj</button>
                                                 <button route="'.route('admin.files.discard',['id'=>$this->id]).'"  id="discard" class="btn btn-mini btn-danger"><i class="fa fa-minus-square"></i>Usuń</button>
                                                  </div>
                                                  </div>';
        }
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
