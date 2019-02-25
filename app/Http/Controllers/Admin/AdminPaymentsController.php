<?php

namespace App\Http\Controllers\Admin;


use App\Movie;
use App\Server;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPaymentsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:admin');
    }


    public function cash_in()
    {
            $view = view('admin.pages.payments.cash_in');
            return HTMLMin::blade($view);
    }
    public function cash_out()
    {
            $view = view('admin.pages.payments.cash_out');
            return HTMLMin::blade($view);
    }
    public function settings()
    {
            $view = view('admin.pages.payments.settings');
            return HTMLMin::blade($view);
    }
}
