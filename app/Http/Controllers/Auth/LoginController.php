<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;
Use App\Models\Loginhistory;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function userLogin(){

        return view('frontend.auth.login-with-num');
    }
	
    //Allow only Admin
    // public function login(Request $request)
    // {
    //     if ($request->email) {

    //         if(empty($request->password)){
    //             \Session::flash('5fernsuser_error', "Password is required");
    //             return redirect('/Users/login');
    //         }
            
    //         $request->validate([
    //             'email' => 'required',
    //             'password' => 'required',
    //         ]);

    //         if(!$request->email){
    //             \Session::flash('5fernsuser_error', "Email or Phone is required");
    //             return redirect('/user-login');
    //         }
    
    //         $credentials = [
    //             'password' => $request->password,
    //         ];
    
    //         if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
    //             $credentials['email'] = $request->email;
    //         } else {
    //             $credentials['mobile'] = $request->email;
    //         }

    //         $login = Auth::attempt($credentials);
    
    //     } elseif ($request->phone) {

    //         $request->validate([
    //             'phone' => 'required|exists:users,mobile',
    //             'otp' => 'required',
    //         ]);
    
    //         $user = \App\Models\User::where('mobile', $request->phone)->first();
    
    //         if (!$user) {
    //             \Session::flash('5fernsuser_error', "User with this phone number does not exist");
    //             return redirect('/Users/login');
    //         }
    
    //         if ($user->otp !== $request->otp) {
    //             \Session::flash('5fernsuser_error', "Invalid OTP");
    //             return redirect('/user-login');
    //         }
    
    //         $user->otp = null;
    //         $user->save();
    
    //         Auth::login($user);
    //         $login = true;
    
    //     } else {
    //         \Session::flash('5fernsuser_error', "Email or Phone is required");
    //         return back()->withErrors(['error' => 'Email or Phone is required']);
    //     }
    
    //     if ($login) {

    //         \App\Helpers\commonHelper::updateMenu(\Auth::user()->designation_id);
    
    //         if (\Auth::user()->status === 'Blocked') {
    //             Auth::logout();
    //             \Session::flash('5fernsuser_error', "Contact Admin to reactivate your account");
    //             return redirect('/');
    //         } elseif (\Auth::user()->status === 'Pending' && \Auth::user()->user_type !== 'Admin') {
    //             Auth::logout();
    //             \Session::flash('5fernsuser_error', "Waiting for approval. Contact Admin");
    //             return redirect('/');
    //         } else {

    //             if (\Auth::user()->user_type == 'User') {
    
    //                 \Session::flash('5fernsuser_success', "Login Successfully");
    //                 $token = \Auth::user()->createToken('authToken')->accessToken;
    //                 \Session::put('userToken', $token);
    
    //                 return redirect()->route('userDasboard');
    //             } else {
    //                 Auth::logout();
    //                 \Session::flash('5fernsuser_error', "User Not Allowed");
    //                 return redirect('/');
    //             }
    //         }
    //     }
    
    //     // If login fails
    //     \Session::flash('5fernsuser_error', "Oops! You have entered invalid credentials");
    //     return back();
    // }

    public function login(Request $request)
    {
        if ($request->phone) {

            $request->validate([
                'phone' => 'required|exists:users,mobile',
                'otp' => 'required',
            ]);
    
            $user = \App\Models\User::where('mobile', $request->phone)->first();
    
            if (!$user) {
                \Session::flash('5fernsuser_error', "User with this phone number does not exist");
                return redirect('/Users/login');
            }
    
            if ($user->otp !== $request->otp) {
                \Session::flash('5fernsuser_error', "Invalid OTP");
                return redirect('/Users/login');
            }
    
            $user->otp = null;
            $user->save();
    
            Auth::login($user);
            $login = true;
    
        } else {
            \Session::flash('5fernsuser_error', "Phone is required");
            return back()->withErrors(['error' => 'Phone is required']);
        }
    
        if ($login) {

            \App\Helpers\commonHelper::updateMenu(\Auth::user()->designation_id);
    
            if (\Auth::user()->status === 'Blocked') {
                Auth::logout();
                \Session::flash('5fernsuser_error', "Contact Admin to reactivate your account");
                return redirect('/');
            } elseif (\Auth::user()->status === 'Pending' && \Auth::user()->user_type !== 'Admin') {
                Auth::logout();
                \Session::flash('5fernsuser_error', "Waiting for approval. Contact Admin");
                return redirect('/');
            } else {

                if (\Auth::user()->user_type == 'User') {
                    // echo \Session::get('current_route');die;
                    \App\Helpers\commonHelper::updateMenu(\Auth::user()->designation_id);
    
                    \Session::flash('5fernsuser_success', "Login Successfully");
                    $token = \Auth::user()->createToken('authToken')->accessToken;
                    \Session::put('userToken', $token);

                    $cartData = \Session::get('cartData');

                    \App\Models\User::where('id', \Auth::user()->id)->update([
                        "otp_verify"=>'1'
                    ]);
                    
                    if(!empty($cartData)){

                        foreach($cartData['cart_items'] as $val){

                            $data = [
                                'product_id' => $val['product_id'],
                                'quantity' => $val['quantity'],
                                'user_id' => auth()->user()->id,
                            ];
                            
                            $addToCartApi = \App\Helpers\commonHelper::callAPI('userTokenpost', '/add-to-cart', $data);
                        }
                    }
                    // \Session::forget('cartData');

                    $previousUrl = parse_url(\Session::get('previous_url'), PHP_URL_PATH);

                    // Check if the relative path starts with '/products/single/'
                    if (\Session::get('current_route') == "productDetail" || \Session::get('cart_route') == "add-to-cart") {
                        return redirect()->route('cart');
                    }
                    
                    return redirect()->route('userDasboard');
                } else {
                    Auth::logout();
                    \Session::flash('5fernsuser_error', "User Not Allowed");
                    return redirect('/');
                }
            }
        }
    
        // If login fails
        \Session::flash('5fernsuser_error', "Oops! You have entered invalid credentials");
        return back();
    }
    

    public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {

            \App\Helpers\commonHelper::updateMenu(\Auth::user()->designation_id);
    
            if (\Auth::user()->status === 'Blocked') {
                Auth::logout();
                \Session::flash('5fernsadminerror', "Contact Admin");
                return back();
            } elseif (\Auth::user()->status === 'Pending' && \Auth::user()->user_type !== 'Admin') {
                Auth::logout();
                \Session::flash('5fernsadminerror', "Waiting for approval. Contact Admin");
                return back();
            } else {

                if (in_array(\Auth::user()->user_type, ['Admin', 'Sub Admin', 'Manager', 'Sales Staff','Retailer'])) {
                    return redirect('admin/dashboard');
                }  else {

                    Auth::logout();
                    \Session::flash('5fernsadminerror', "User Not Allowed");
                    return redirect('/');
                }
            }
        }
    
        // If login fails
        \Session::flash('5fernsadminerror', "Oops! You have entered invalid credentials");
        return back();
    }

    //Login with Adminn/Vendor/Customer
    // public function login(Request $request){

    //     $request->validate([
    //         'unique_id' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('unique_id', 'password');
    //     if (Auth::attempt($credentials)) {

    //         $loginData=new Loginhistory();
            
    //         $loginData->ip_address = $request->ip();
    //         $loginData->user_id = \Auth::user()->id;
    //         $loginData->save();

    //         \App\Helpers\commonHelper::updateMenu(\Auth::user()->designation_id); 
        
    //         if(\Auth::user()->user_type=='Admin' || \Auth::user()->user_type=='Seller'){
    
    //             return redirect('admin/dashboard');

    //         }else{
                    
                
    //             $token =  \Auth::user()->createToken('authToken')->accessToken;
    //             Session::put('userToken',$token); 
                
    //             \App\Helpers\commonHelper::movecartDataWithUser();

    //             if(\Auth::user()->designation_id=='2'){

    //                 \Session::flash('5fernsuser_success', "Login Successfully");
    //                 return redirect('/');

    //             }else{

    //                 return redirect('/user/dashboard');

    //             }
                
    //         } 

    //     }
        
    //     \Session::flash('5fernsadminerror', "Opps! You have entered invalid credentials");
    //     return redirect("login");
        
    // }

     public function logout() {

        
        if(\Auth::user()->user_type =='User'){
        
            Session::forget('userToken'); 
            \Session::forget('cartData');
            \Session::forget('current_route');
            \Session::forget('cart_route');
            // Session::forget('wishlist_user');
        }

        if(in_array(\Auth::user()->user_type, ['Admin', 'Sub Admin', 'Manager', 'Sales Staff','Retailer'])){
            Auth::logout();
            return redirect('/admin/login');
        }
        
        Auth::logout();
        Session::forget('fivefernsadminrexceptionurl');
        Session::forget('fivefernsadminmenu');

        return redirect('/Users/login');
    }

    public function otpSend(Request $request)
    {
        // Validate phone input
        $request->validate([
            'phone' => 'required|digits:10', // Adjust validation as needed
        ]);
    
        $phone = $request->input('phone');
    
        // Find user by mobile number
        $user = \App\Models\User::where('mobile', $phone)->first();
    
        if ($user) {

            if ($user->status == "Blocked") {
                return response()->json(["error"=>true,
                    'message' => 'Your account is blocked. Please contact the administrator to unblock it.'
                ], 200);
            }
            // Generate OTP
            $otp = rand(1000, 9999);
            // $otp = 1111; // Uncomment for testing with a fixed OTP
    
            // Update OTP in user record
            $user->otp = $otp;
            $user->save();
    
            $msg = "OTP sent successfully.";
        } else {
            // Generate a unique ID for a new user
            $uniqueId = 'HFP' . rand(11111, 99999);
            $otp = rand(1000, 9999);
            // $otp = 1111;
            // Create a new user
            $user = \App\Models\User::create([
                'name'            => '',
                'email'           => null,
                'mobile'          => $phone,
                'username'        => $uniqueId,
                'unique_id'       => $uniqueId,
                'otp'             => $otp, // Use generated OTP
                'status'          => 'Active',
                'user_type'       => "User",
                'designation_id'  => "4",
                'password'        => null,
            ]);
    
            $msg = "User registered successfully. OTP sent.";
        }

        $sms = \App\Helpers\commonHelper::sendOtpBysms($phone,$otp);   

        if($sms){

            return response()->json(["error"=>false,'message' => $msg], 200);
        }

        return response()->json(["error"=>true,'message' => 'Failed to send otp.'], 200);

    }
    

}
