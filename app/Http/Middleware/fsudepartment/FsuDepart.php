<?php

namespace App\Http\Middleware\fsudepartment;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FsuDepart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::has('user_login') && (Session::get('user_role') == 3 ||  Session::get('user_role') == 4) ){
            return $next($request);
        }
        return redirect()->back();
        
    }
}
