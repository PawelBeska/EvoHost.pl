<?php

namespace App\Http\Controllers\Partner;


use App\Movie;
use App\Server;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:partner');
    }
    public function index()
    {
        $view = view('partner.pages.ads');
        return  HTMLMin::blade($view);

    }
    public function settings()
    {
        $view = view('partner.pages.ads.settings');
        return  HTMLMin::blade($view);
    }
}
