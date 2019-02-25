<?php

namespace App\Http\Controllers\Partner;


use App\Movie;
use App\Server;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:partner');
    }
    public function ticket()
    {
        $view = view('partner.pages.ticket');
        return  HTMLMin::blade($view);

    }
}
