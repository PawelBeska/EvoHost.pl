<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Pass;
use App\View;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

class MovieController extends Controller
{

    public function embed($embed)
    {
        if(Movie::where('embed',$embed)->count()>0) {
            $pass = Pass::createPass(Movie::where('embed',$embed)->first()->id);
           $view = view('layouts.video.video');
           $view->with('pass', $pass);
           return HTMLMin::blade($view);
        }else{
            $view = view('layouts.video.video_removed');
            return HTMLMin::blade($view);
        }
    }


    public function player($embed,$pass)
    {

        if (Request::ajax()) {
            if (Movie::where('embed', $embed)->count() > 0) {
                if (Pass::where('pass', $pass)->where('ip', \request()->ip())->count() > 0) {
                    if (!View::where('ip', Request::ip())->where('movie', Movie::where('embed', $embed)->first()->id)->count()) {
                        View::create(['movie' => Movie::where('embed', $embed)->first()->id, 'ip' => Request::ip()]);
                    }

                    return null;
                }
                return abort(404);
            }
            return abort(404);
        }
    }
}
