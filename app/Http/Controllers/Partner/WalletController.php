<?php

namespace App\Http\Controllers\Partner;


use HTMLMin\HTMLMin\Facades\HTMLMin;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:partner');
    }
    public function index()
    {
        $view = view('partner.pages.wallet');
        return  HTMLMin::blade($view);

    }
    public function settings()
    {
        $view = view('partner.pages.wallet.settings');
        return  HTMLMin::blade($view);
    }
}
