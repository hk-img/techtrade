<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

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
	 
    public function index(){  
      
        $result = \App\Models\Loginhistory::where('user_id',\Auth::user()->id)->orderBy('id','DESC')->limit('10')->get();

        if(\Auth::user()->designation_id == 2){
          
            $news=\App\Models\News::where('status','Active')->orderBy('id','desc')->get();

            return view('admin.customer_dashboard',compact('result','news'));

        }elseif(\Auth::user()->designation_id == 5){

            $levelIncome =\App\Models\Referralincome::where('user_id',\Auth::user()->id)->sum('amount');
            $autopoolIncome =\App\Models\Autopoolincome::where('user_id',\Auth::user()->id)->sum('amount');
            $discountWallet =\App\Helpers\commonHelper::getDiscountWalletBalance(\Auth::user()->id);

            $pinRequestPending=\App\Models\Pinrequest::where('user_id',\Auth::user()->id)->where('status','Pending')->count();
           
            $pinResult=\DB::select("SELECT COUNT(COALESCE(CASE WHEN status = 'Unused' THEN 1 END)) as unused, COUNT(COALESCE(CASE WHEN status = 'Used' THEN 1 END)) as used , COUNT(COALESCE(id)) as count FROM pins where user_id='".\Auth::user()->id."'");
            $shoppingWallet=\App\Helpers\commonHelper::getShoppingWalletBalance(\Auth::user()->id);
            $earningWallet=\App\Helpers\commonHelper::getEarningWalletBalance(\Auth::user()->id);
           
            $welcomePopup=\App\Models\Galleries::where('status','1')->first();
            $repurchaseincome = \App\Models\Repurchaseincome::where([['user_id', \Auth::user()->id],['type','level']])->sum('amount');
            $cashbackIncome = \App\Models\Repurchaseincome::where([['user_id', \Auth::user()->id],['type','cashback']])->sum('amount');
            
            $news=\App\Models\News::where('status','Active')->orderBy('id','desc')->get();
        
            return view('admin.customer_mlm_dashboard',compact('welcomePopup','cashbackIncome','repurchaseincome','levelIncome','autopoolIncome','discountWallet','pinRequestPending','pinResult','shoppingWallet','earningWallet','news'));

        }elseif(\Auth::user()->designation_id == 3 || \Auth::user()->designation_id == 4){
            
            return view('admin.vendor_dashboard',compact('result','Newsresult'));

        }
    }


   
 
}