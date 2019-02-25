<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Partner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guest())
        {
            return redirect()->route('index');
        }
        elseif(Auth::user()->hasPermission('partner'))
        {
            return $next($request);
        }else{
            return redirect()->route('index');
        }
    }
}
