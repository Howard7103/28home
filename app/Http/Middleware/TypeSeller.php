<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class TypeSeller
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
        if(Session::get('user_id') && (Session::get('user_type')=='2')){
            return $next($request);
        }
        return redirect("/login");
    }
}
