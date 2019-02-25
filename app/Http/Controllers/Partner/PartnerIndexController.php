<?php

namespace App\Http\Controllers\Partner;


use App\Movie;
use App\Server;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerIndexController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:partner');
    }
    public function index()
    {
        Server::check();
        $view = view('partner.pages.index');
        return  HTMLMin::blade($view);

    }
}
