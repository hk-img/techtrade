<?php

namespace App\Http\Middleware;

use App\Models\DeliveryBoy;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class DelievryBoyProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd('ff');
        $data=User::where('status','!=',"Active")->where('id',auth()->user()->id)->first();
        if($data){
            return response(array('message'=>'Profile is '.$data->status),200);
        }
        return $next($request);
    }
}
