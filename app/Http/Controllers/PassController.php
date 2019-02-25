<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassController extends Controller
{
    public static function createPass($movie)
    {
        self::create(['movie'=>$movie,'ip'=>Request::ip(),'pass'=>str_random(16)]);
    }
    public function delete()
    {

    }
}
