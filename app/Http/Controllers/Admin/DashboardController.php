<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB, Validator;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	 

    public function index(Request $request){

        $link = \App\Models\Link::count();
        $category = \App\Models\Category::count();
        $holiday = \App\Models\Holiday::count();
        $result = \App\Models\DematAccount::get();

        return view('admin.dashboard',compact('link','category','holiday','result')); 
    }  
        
}