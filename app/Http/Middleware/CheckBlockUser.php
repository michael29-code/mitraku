<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // if (Auth::user()) {
        //     dd(Auth::user());
        // }
        if ($request->user()->level == 3) {
            // dd($request->user()->mitra->isBlocked);
            
            if (in_array($request->user()->mitra->isBlocked, $isBlocked)) {
                return $next($request);
            }
        }
        
        if ($request->user()) {
            // dd($request->user()->isBlocked);
            if (in_array($request->user()->isBlocked, $isBlocked)) {
                // dd($request->user()->isBlocked);
                return $next($request);
            }
        }
        return redirect('/');
    }
}
