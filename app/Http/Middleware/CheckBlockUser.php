<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckBlockUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$isBlocked): Response
    {
        if($request->user()){
            if (in_array($request->user()->isBlocked, $isBlocked)) {
                return $next($request);
            }
        }
        return redirect('/');
    }
}
