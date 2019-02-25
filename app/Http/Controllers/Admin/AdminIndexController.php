<?php

namespace App\Http\Controllers\Admin;


use App\Movie;
use App\Server;
use App\User;
use App\View;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminIndexController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:admin');
    }
    public function index()
    {
        $view = view('admin.pages.index');

        $view->with('most_viewed_movies',Movie::limit(5)->get());
        $view->with('worst_viewed_movies',Movie::limit(5)->get());
        $view->with('servers',Server::all());
        $view->with('latest_registered_users',User::latest()->limit(5)->get());
        $view->with('views_count',View::whereRaw('MONTH(created_at) = ?',[date('m')])->count());
        $view->with('free_space',Server::sum('free_space'));
        $view->with('used_space',Movie::sum('size'));
        $view->with('users_count',User::count());
        $view->with('files_count',Movie::count());
        $view->with('servers_count',Server::count());
        return  HTMLMin::blade($view);

    }
}
