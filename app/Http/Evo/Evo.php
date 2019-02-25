<?php
/**
 * Created by PhpStorm.
 * User: raz4r
 * Date: 20.11.18
 * Time: 14:38
 */

namespace App\Http\Evo;


use App\Http\Evo\Web\Web;
use Illuminate\Support\Facades\Facade;


class Evo extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Evo';
    }
    public static function services($service,$url)
    {
        $class = "App\Http\Evo\Services\\$service";
        $service = new $class($url);
        return $service->source();
    }
    public static function web($site, $referer = 'https://google.pl/')
    {
        return new Web($site,$referer);
    }
}