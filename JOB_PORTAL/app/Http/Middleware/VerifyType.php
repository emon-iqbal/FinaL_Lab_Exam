<?php

namespace App\Http\Middleware;

use Closure;

class VerifyType
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
        if($request->session()->get('userType') == "admin"){
            return $next($request);
        }
        else if($request->session()->get('userType') == "employee"){
            return $next($request);
        }
        else
        {
          return redirect('/home');
        }

    }
}
