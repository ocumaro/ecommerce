<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(Auth::check()){
            
            if(Auth::user()->is_admin=='1'){
                return $next($request);
            }else{
                return redirect('/')->with('message','access denied');
            }
        }else{
            return redirect('/login')->with('message','Login to access to the website');
        }


        return $next($request);
    }
    }

