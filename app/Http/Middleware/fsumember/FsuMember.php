<?php

namespace App\Http\Middleware\fsumember;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FsuMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::has('user_login') && Session::get('user_role') == 2){
            return $next($request);
        }
        return redirect()->back();
    }
}
