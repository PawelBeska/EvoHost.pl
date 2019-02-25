<?php

namespace App\Http\Middleware;

use Closure;

class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() == null) {
            return $next($request);
        }
        $actions = $request->route()->getAction();
        $permissions = isset($actions['permissions']) ? $actions['permissions'] : null;
        if($request->user()->hasAnyPermission($permissions) || !$permissions)
        {
            return $next($request);
        }
        return redirect('/');
    }
}
