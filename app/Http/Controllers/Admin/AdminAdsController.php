<?php

namespace App\Http\Controllers\Admin;


use App\Movie;
use App\Server;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAdsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:admin');
    }
    public function ads()
    {
        $view = view('admin.pages.ads.ads');
        return  HTMLMin::blade($view);

    }
    public function ads_settings() {
        $view = view('admin.pages.ads.ads_settings');
        return  HTMLMin::blade($view);
    }
}
