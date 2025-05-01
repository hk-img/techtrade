<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showresetform(){

        return view('auth.reset');
    }

    public function sendresetlink(Request $request){

        $request->validate([
            'email'=>'required|exists:users,email'
        ]);

        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);

        $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);

        $data=[
            'action_link'=>$action_link,
            'email'=>$request->email
        ];

        $userResult = \App\Models\User :: where('email',$request->email)->first();

        if($userResult){
 
            \App\Helpers\commonHelper::emailSendToUser($userResult->email, 'Forgot Pasword', $data,$template='reset_password');
       
            return back()->with('5fernsadminsuccess','We have E-mailed your password reset link.');

        }else{

            return back()->with('5fernsadminerror','User not found. Please try again.');
        }
       
    }


    public function resetpasswordform(Request $request, $token=null){
        
        $email = \App\Models\User::where('email',$request->email)->first();
        if($email){
            
            return view('auth.resetpassword')->with(['token'=>$token,'email'=>$email->email]);

        }else{

            return redirect('login')->with('5fernsadminerror','User not found. Please try again.');

        }

        

    }

    public function resetpassword(Request $request){

        $request->validate([

            'email'=>'required|exists:users,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){

            return back()->with('5fernsadminerror','inavlid token');

        }else{

            \App\Models\User::where('email',$request->email)->update([

                'password'=>\Hash::make($request->password)

            ]);

            \DB::table('password_resets')->where([

                'email'=>$request->email
            ])->delete();

            return redirect('admin/login')->with("5fernsadminsuccess",'Your password has been changed! You can login with new password');
        }
    }
}
