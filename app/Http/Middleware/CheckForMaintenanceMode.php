<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Route;
use App\Maintenacelist;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Original;

class CheckForMaintenanceMode extends Original
{
    /**
     * Handle an incoming request.
     *
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    protected $excludedRoutes = ['login'];

    public function handle($request, Closure $next)
    {

     $maintenace=1;



        if($maintenace) {

            if (Auth::user()) {
                if(Auth::user()->HasPermission('admin')) {
                    app('debugbar')->warning('1');
                    return $next($request);
                }
                    elseif (Maintenacelist::Where('username', Auth::user()->name)->count()){
                        app('debugbar')->warning('2');
                        return $next($request);
                    }
            } elseif ( Maintenacelist::Where('ip',$request->ip())->count()) {
                return $next($request);
            } else {
                $response = $next($request);
                    if (in_array($request->route()->uri(), $this->excludedRoutes)) {
                        app('debugbar')->warning('2');
                        return $response;
                    }else{
                        app('debugbar')->warning('2');
                        return Response::make(view('pages.maintenace'));
                    }
            }
        }else{
            app('debugbar')->warning('2');
            return $next($request);
        }
    }
}