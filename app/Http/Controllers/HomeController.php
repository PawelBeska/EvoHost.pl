<?php

namespace App\Http\Controllers;


use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Redirect;
use nSolutions\Filmweb;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return HTMLMin::blade(view('pages.index'));
    }
    public function regulations()
    {
        return HTMLMin::blade(view('pages.regulations'));
    }
    public function dmca()
    {
        foreach (Filmweb_Parser::getMovie('nie oddychaj') as $movie)
        {
            var_dump(Filmweb::instance()->getFilmInfoFull($movie[1])->execute());
          print_r('URL:'. $movie[0].'<br>');
            print_r('Tytuł:'. $movie[3].'<br>');
            print_r('Orginalny tytuł:'. $movie[4].'<br>');
            print_r('<br>');
        }
    }
    public function contact()
    {
        return HTMLMin::blade(view('pages.contact'));
    }
    public function partnership()
    {
        return HTMLMin::blade(view('pages.partnership'));
    }
    public function about_us()
    {
        return HTMLMin::blade(view('pages.about_us'));
    }
    public function cooperation()
    {
        return HTMLMin::blade(view('pages.cooperation'));
    }
    public function advertisement()
    { 
        return HTMLMin::blade(view('pages.advertisement'));
    }
}
