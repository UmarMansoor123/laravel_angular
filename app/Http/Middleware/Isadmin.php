<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Isadmin
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
       if (Auth::user() &&  Auth::user()->admin == 1) {
           
            return redirect('admin/login_admin');
     }

        return $next($request);
    }
}
