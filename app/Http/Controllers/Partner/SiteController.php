<?php

namespace App\Http\Controllers\Partner;


use App\Http\Requests\PartnerEditSiteRequest;
use App\Movie;
use App\Server;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class SiteController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:partner_view_site');
    }
    public function index()
    {
        Server::check();
        $view = view('partner.pages.site');
        $view->with('site',Auth::user()->site);
        $view->with('public_key',Auth::user()->public_key);
        $view->with('private_key',Auth::user()->private_key);
        return  HTMLMin::blade($view);

    }
    public function edit(PartnerEditSiteRequest $request)
    {
        $input = $request->all();
        $message = new MessageBag();
        Auth::user()->update(['site'=>$input['site'],'public_key'=>str_random(32),'private_key'=>str_random(32)]);
        $message->add('success', "Pomyślnie edytowano serwis, oraz wygenerowano nowy klucz publiczny i prywatny!");
        return Redirect::back()->withErrors($message);
    }
}
