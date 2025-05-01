<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){

		if(\Auth::user()->user_type != 'Admin' && \Auth::user()->user_type!='Sub Admin'&& \Auth::user()->user_type!='Manager'&& \Auth::user()->user_type!='Sales Staff' && \Auth::user()->user_type!='Retailer'){
      
            return redirect('/');
        }
		
        if(\Auth::user()->status == "Pending" && \Auth::user()->user_type != 'Admin'){

            \Auth::logout();
            \Session::flash('5fernsadminerror', "Waiting for approval.Contact Admin");
            return redirect('Users/login');
        }

        return $next($request);
    }
}
