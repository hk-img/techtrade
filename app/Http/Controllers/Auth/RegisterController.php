<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Sellerequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function userStore(Request $request){

        if($request->ajax()){

            $rules = [
                'name' => 'required',
                'email' => 'required|email|unique:users,email', 
                'mobile' => 'required|numeric|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users,mobile',
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password',
            ];

            $messages = [
                'email.unique' => 'The email id is already associated with different account.',
                'mobile.unique' => 'The mobile is already associated with different account.',
            ];
            

            $validator = Validator::make($request->all(), $rules, $messages);
			
			if ($validator->fails()) {
				$message = [];
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message= $msg[0];
					break;
				} 	
				return response(array("error" => true, "message" => $message));
						
			}else{

				try{

                    $userData = User::where('email',$request->email)->first();
                    
                    if(!$userData){ 

                        $uniqueId = 'MED' . rand(11111, 99999);

                        $user = \App\Models\User::create([
                            'name' => $request->post('name'),
                            'email' => $request->post('email'),
                            'mobile' =>  $request->post('mobile'),
                            'username' =>  $uniqueId,
                            'unique_id' => $uniqueId ,
                            'otp' => 1111 ,
                            'status' => 'Active' ,
                            'user_type' => "User",
                            'designation_id' => "4",
                            'password' => Hash::make($request->password),
                        ]);

                        return response(array('error'=>false,"message" =>'OTP send Successfully'),200);
                    }else{

                        return response(array('error'=>true,"message" =>'User already exits'));
                    }



				}catch (\Exception $e){ 

                    return response(array("error"=> true, "message" => $e->getMessage())); 
				}
			}

        }else{

            return view('frontend.auth.register');
        }
			
			 
    }

    public function checkReferralCodeUser(Request $request){

        
        if($request->ajax()){

            $rules = [
                'referrer_id' => 'required',
			];
			
			$validator = \Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				$message = [];
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message= $msg[0];
					break;
				} 	
				return response(array("error" => true, "msg" => $message));
						
			}else{

				try{

                    $userData = User::where('unique_id',$request->referrer_id)->where('designation_id','5')->first();
 
                    if($userData){
  
                        $msg = $userData->name;

                        return response(array('error'=>false,"msg" =>'Referrer Name: '.$msg));
                        
                    }else{

                        return response(array('error'=>true,"msg" =>'Referrer id not found'));
                    }

				}catch (\Exception $e){ 

                    return response(array("error"=> true, "msg" => $e->getMessage())); 
				}
			}

        }
			 
    }

    public function vendorStore(Request  $request){
       
        if($request->ajax()){
            
            $rules = [
                'name' => 'string',
                'business_name' => 'required',
                'email'=>'required|email|unique:users',
                'mobile'=>'required|numeric|min:10|unique:users',
                'password'=>'required',
                "password_confirmation"=>"required|same:password|min:8",
			];

			$validator = \Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				$message = [];
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message= $msg[0];
					break;
				} 	
				return response(array("error" => true, "msg" => $message));
						
			}else{

				try{
                    
                    $userData = User::where([['mobile',$request->get('mobile')], ['email',$request->get('email')]])->first();

                    if(!$userData){ 

                        $uniqueId='OS'.rand(11111,99999);

                        $user=new \App\Models\User();
                        
                        $user->name = $request->post('name');
                        $user->email = $request->post('email');
                        $user->mobile = $request->post('mobile');
                        $user->business_name = $request->post('business_name');
                        $user->user_type = "Seller";
                        $user->designation_id = 4;
                        $user->unique_id = $uniqueId;
                        $user->password = Hash::make($request->password);
                        $user->save();

                        \App\Models\KYC::insert([
                            'user_id' => $user->id,
                        ]);
                        
                        \App\Models\UserDetails::insert([
                            'user_id' => $user->id,
                        ]);
    
                        \App\Models\Bankdetails::insert([
                            'user_id' => $user->id,
                        ]); 
 
                       
                        if($user){
                            $to = $request->post('email');
                            $subject = 'Welcome Email from Medhuntp';
                            $msg = [
                                'name'=>$user->name,
                                'unique_id'=>$user->unique_id,
                                'password'=>$request->password,
                                'mobile'=>$request->post('mobile'),
                            ];
                        //     \App\Helpers\commonHelper::emailSendToUser($to, $subject, $msg,$template='register');
                            $msgHtml='<div class="modal-body">
                            <div class="modal-txt text-center">
                             <h4 class="mb-3">CONGRATULATION! '.ucfirst($msg['name']).'</h4>
                             <h6>YOU HAVE SUCCESSFULLY SIGNED UP.</h6>
                           </div>
                           <div class="modal-table table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td class="text-dark">Your Profile Name</td>
                                    <td class="text-success">'.ucfirst($msg['name']).'</td>
                                  </tr>
                                  <tr>
                                    <td class="text-dark">Your Login User Id</td>
                                    <td class="text-success">'.$msg['unique_id'].'</td>
                                  </tr>
                                  <tr>
                                    <td class="text-dark">Your Login Password</td>
                                    <td class="text-success">'.$msg['password'].'</td>
                                  </tr>
                                </tbody>
                              </table>
                              <p class="not-box">NOTE: PLEASE SAVE THIS USER ID AND PASSWORD FOR FUTURE LOGIN!</p>
                           </div>
                          </div>';
                            return response(array('error'=>false,"msg" =>$msgHtml));
                        }else{
                            return response(array('error'=>true,"msg" =>'Something Wrong ! Please Try again.'));
                        }
                    }else{
                        return response(array('error'=>true,"msg" =>'Vendor already exits'));
                    }
				}catch (\Exception $e){ 
                    return response(array("error"=> true, "msg" => $e->getMessage())); 
				}
			}

        }else{

            $category=\App\Models\Category::where('recyclebin_status','0')->where('status','1')->whereNull('parent_id')->orderBy('name','ASC')->get();
            return view('auth.vendor_register',compact('category'));
        }
			
			 
    }

    public function verifyOtp(Request $request){

        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'otp' => 'required|numeric',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => true,'data'=>$request->all(), 'message' => $validator->errors()->first()]);
        }

        $user = User::where('otp', $request->otp)->where('mobile', $request->mobile)->first();

        if($user){
            $user->otp = null;
            $user->save();

            if(!auth()->check() && $request->post('type') == 'register'){

                \Auth::login($user);
                
                $token = \Auth::user()->createToken('authToken')->accessToken;
                \Session::put('userToken', $token);
            }

            $data = json_encode([
                'mobile' => $request->mobile,
                'timestamp' => now()->timestamp,
            ]);

            return response()->json(['error' => false, 'message' => 'OTP verified successfully.','mobile'=>Crypt::encryptString($data)]);
        }

        return response()->json(['error' => true, 'message' => 'OTP Invalid.']);


    }

    public function resendOtp(Request $request){

        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()->first()]);
        }

        $user = User::where('mobile', $request->mobile)->first();

        if($user){
            // $user->otp =1111;
            $user->otp = rand(1000, 9999);
            $user->save();

            $sms = \App\Helpers\commonHelper::sendOtpBysms($user->mobile,$user->otp);   

            if($sms){
    
                return response()->json(['error' => false, 'message' => 'OTP Resent successfully.']);
            }
    
            return response()->json(['message' => 'Failed to send otp.'], 200);
            
        }

        return response()->json(['error' => true, 'message' => 'OTP Invalid.']);
    }

    public function forgetPassword(Request $request){

        $validator = Validator::make($request->all(), [
            'mobile' => 'required_without:email',
            'email' => 'required_without:mobile',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()->first()]);
        }

        $user = User::query();

        if($request->mobile){
            $user->where('mobile', $request->mobile);
        }
        
        if($request->email){
            $user->where('email', $request->email);
        }

        $user = $user->first();

        if($user){

            // $checkotp = \App\Helpers\commonHelper::sendOTP($user->id, $user->mobile);
            
            // if($checkotp){

                return response()->json(['error' => false, 'message' => 'OTP sent successfully.','mobile'=>$user->mobile],200);
            // }
        }

        return response()->json(['error' => true, 'message' => 'OTP not sent.']);

    }


    public function newPassword(Request $request,$mobile){

        $data = Crypt::decryptString($mobile);
        $decoded = json_decode($data, true);

        if (now()->timestamp - $decoded['timestamp'] > 300) { // 5 minutes = 300 seconds
            \Session::flash('5fernsuser_error', 'URL expired.');
            return back();
        }

        if($request->isMethod('post')){

            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ]);
            
            if ($validator->fails()) {
                return response()->json(['error' => true, 'message' => $validator->errors()->first()]);
            }

            $mobile = $decoded['mobile'];
            $user = User::where('mobile', $mobile)->first();
            
            if($user){
                $user->password = Hash::make($request->password);
                $user->save();
                \Session::flash('5fernsuser_success', 'Password changed successfully.');
                return redirect()->route('userlogin');
            }

            \Session::flash('5fernsuser_error', 'Password Invalid.');
            return back();
        }

        return view('frontend.auth.forget-password',compact('mobile'));
    }
}
