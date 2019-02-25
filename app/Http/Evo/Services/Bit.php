<?php
/**
 * Created by PhpStorm.
 * User: raz4r
 * Date: 20.11.18
 * Time: 15:08
 */

namespace App\Http\Evo\Services;


use App\Http\Evo\Evo;

class Bit
{
    private $src;
    public function __construct($url)
    {
        $this->src = Evo::web($url)->getElementsByTag('source')->item(0)->getAttribute('src');
        return $this;
    }
    public function source()
    {
        return $this->src;
    }

}