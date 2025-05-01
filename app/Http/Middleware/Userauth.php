<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class Userauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       
        if(\Auth::check() && \Auth::user()->user_type != 'User'){
           
            return redirect('/');
        }
        
        if(\Auth::check() && \Auth::user()->status == 'Blocked' && \Auth::user()->user_type != 'Admin'){
            
            \Session::flash('5fernsadminerror', "Contact Admin to reactivate your account");
            \Auth::logout();
            return redirect('/');
        }

        return $next($request);
		
        
    }
}
