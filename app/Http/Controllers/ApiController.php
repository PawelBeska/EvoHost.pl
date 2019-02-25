<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function addRemote($username,$password,$link)
    {

                if (Movie::where('remote_source', $link)->count() == 0) {
                    if (filter_var($link, FILTER_VALIDATE_URL)) {
                        Movie::create(['author' => User::where('name',$username)->first()->id, 'remote' => 1, 'remote_source' => $link, 'status' => Statusfile::statuses('wait_for_admin')]);
                        Notification::NFG('Masz nowy <a href="">materiał</a> do zatwierdzenia!');
                    }
                }

        }

}
