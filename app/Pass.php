<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Pass extends Model
{
    protected $table = 'pass';
    protected $fillable = ['movie','ip','pass'];
    /*
     * Tworzenie nowego tokenu dla filmu {$MOVIE}
     */
    public static function createPass($movie)
    {
       return self::create(['movie'=>$movie,'ip'=>Request::ip(),'pass'=>str_random(16)]);
    }
    public function delete()
    {

    }
    /*
     * Relacja TOKEN -> FILM
     */
    public function movie()
    {
        return $this->belongsTo('App\Movie','movie','id')->first();
    }
      /*
       * Zwracanie źródła wraz z tokenem
       * {SERWER}/{FILM}/{TOKEN}
       *
       */
    public function url()
    {

        return  "{$this->movie()->server()->ip}/v/{$this->movie()->embed}/{$this->pass}";
    }
    public function poster()
    {
        return  "{$this->movie()->server()->ip}/v/{$this->movie()->embed}/{$this->pass}.jpg";
    }
}
