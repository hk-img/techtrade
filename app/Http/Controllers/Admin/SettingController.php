<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\commonHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function info(Request $request){
        if ($request->isMethod('post')) {
			$rules = [
				'username' => ['required', 'regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z0-9]+$/'],
				'email' => 'required|email|unique:users,email,' . auth()->user()->id,
				'mob' => 'required|digits:10',
				'address' => 'required',
			];

			$messages = [
				'username.required' => 'Username is required.',
				'username.regex' => 'Username must contain at least one letter and one number, and should not have special characters.',
				'mob.required' => 'Mobile number is required.',
			];
			
			$validator = Validator::make($request->all(), $rules, $messages);

			if ($validator->fails()) {
				$message = "";
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message = $msg[0];
					break;
				}
				return response(array('message' => $message), 403);
			} else {
                    $user = User::where('id', Auth::user()->id)->first();
					$user->username = $request->post('username');
					$user->email =    $request->post('email');
					$user->mobile =   $request->post('mob');
					$user->address =  $request->post('address');
					$user->save();

                    return response(array('message' => 'Info updated successfully.', 'reset' => false), 200);
				}
		}else{
            return view('admin.settings.info');
        }
    }

    public function changePassword(Request $request){

		if($request->ajax()){
			
			$rules=[
				'old_pass' => 'required',
				'password' => 'required|min:8',
				'confirm_password' => 'required|min:8|same:password',
			];
			
			$validator = Validator::make($request->all(), $rules);
 
			if ($validator->fails()) {
				$message = [];
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message= $msg[0];
					break;
				} 
				
				return response(array("error"=>false,"message" => $message),403); 
						
			}else{
				
				$checkUser = User::where(['id'=>Auth::user()->id])->first();
				
				if(!Hash::check($request->old_pass, $checkUser->password)){
					
					return response(array('message'=>'Old password does not match. please try again.'),403);
					
				}else{
					
					User::where('id',Auth::user()->id)->update(['password'=>Hash::make($request->password)]);
					
					return response(array('message'=>'Password updated successfully.','reset'=>true),200);
				}

			}
		}
		
		return view('admin.change_password');
	}

    public function notification(Request $request){
        if ($request->isMethod('post')) {
            // dd($request->all());
			$rules = [
                "user" => "required",
                "title" => "required",
                "body" => "required",
                "notification_icon" => "required",
                "notification_image" => "required",
                "dataText" => "required",
                "dataSubText" => "required",
                "dataImage" => "required",
                "dataAlertOkMsg" => "required"
            ];
            
			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				$message = "";
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message = $msg[0];
					break;
				}
				return response(array('message' => $message), 403);
			} else {
                $userMobile = $request->user;
                $title = $request->title;
                $message = $request->body;
                $notification_icon = $request->notification_icon;
                $notification_image = $request->notification_image;
        
                // Additional data
                $dataText = $request->dataText;
                $dataSubText = $request->dataSubText;
                $dataImage = $request->dataImage;
                $dataAlertOkMsg = $request->dataAlertOkMsg;
                // $dataSendFlag = $request->dataSendFlag;
                $update = $request->update;
                // Check if all necessary inputs are set
                if (
                    isset($title, $message, $notification_icon, $notification_image, $dataText,
                        $dataSubText, $dataImage, $dataAlertOkMsg,$update)
                    // isset($title, $message, $notification_icon, $notification_image, $dataText,
                    //     $dataSubText, $dataImage, $dataAlertOkMsg, $dataSendFlag, $update)
                ) {
                    // dd('fdfd');
                    // Call the function to send the notification through FCM
                    $pushStatus = commonHelper::sendMessageThroughFCM(
                        $userMobile,
                        $title,
                        $message,
                        $notification_icon,
                        $notification_image,
                        $dataText,
                        $dataSubText,
                        $dataImage,
                        $dataAlertOkMsg,
                        // $dataSendFlag,
                        $update
                    );
                }

                    return response(array('message' => 'Message Sent Successfully.', 'reset' => false), 200);
				}
		}else{
            return view('admin.settings.notification');
        }
    }

    public function add(Request $request){
		if($request->isMethod('post')){
            // dd($request->all());
			$rules=[
                "username" => "required",
                "mobile" => "required|digits:10",
                "email" => "required|email",
                "password" => "required",
                "address" => "required",
                "role" => "required"
			];
			
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()){
				$message = "";
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message= $msg[0];
					break;
				}
				return response(array('message'=>$message),403);
			}else{				
				if((int) $request->post('id')>0){
                    $user=User::where('id',$request->post('id'))->first();
                }else{
                    $user=new User();
                }
 
                $user->username = $request->post('username');					
                $user->mobile= $request->post('mobile');					
                $user->email= $request->post('email');					
                $user->password= Hash::make($request->post('password'));
                $user->address= $request->post('address');
                $user->designation_id= $request->post('role');
                $user->status= 'Active';
                $user->save();
    
                if((int) $request->post('id')==0){
                    return response(['message'=>'User added successfully.','reset'=>false],200);
                }else{
                    return response(['message'=>'User updated successfully.','reset'=>false],200);
                }
			}
			return response(['message'=>'Data not found.'],403);
		}
		$result=[];
        return view('admin.settings.user.add',compact('result'));
    }
	
	public function list(){
		$result=User::orderBy('id','DESC')->get();
		
		return view('admin.settings.user.list',compact('result'));
	}
	
	public function update(Request $request,$id){
        $result = User::where('id', $id)->first();
        if($result){
            return view('admin.settings.user.assign_role',compact('result'));
        }else{
            return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
        }
	}

	public function assignRole(Request $request){
        $rules=[
            "role" => "required"
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            $message = "";
            $messages_l = json_decode(json_encode($validator->messages()), true);
            foreach ($messages_l as $msg) {
                $message= $msg[0];
                break;
            }
            return response(array('message'=>$message),403);
        }else{		

            $user=User::where('id',$request->post('id'))->first();
            $user->designation_id= $request->post('role');
            $user->save();

            return response(['message'=>'User Role updated successfully.','reset'=>false],200);
        }
        return response(['message'=>'Data not found.'],403);
	}
	
	public function deleteOffer(Request $request,$id){
		$result=Offer::where('id',$id)->first();
		if($result){
			Offer::where('id',$id)
							->update(['recyclebin_status'=>'1',
									 'recyclebin_datetime'=>date('Y-m-d H:i:s')]);
			return redirect()->back()->with('5fernsadminsuccess','Offer deleted successfully.');
		}else{
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}

    public function changeStatus(Request $request){
		User::where('id',$request->post('id'))
						->update(['status'=>$request->post('status')]);
		return response(array('message'=>'Status changed successfully.'),200);
	}

    public function headLine(Request $request)
	{
		if ($request->isMethod('post')) {
			
			$request->validate([
                'head_line' => 'required|string|max:255',
            ], [
                'head_line.required' => 'The header discount field is required.',
                'head_line.string' => 'The header discount must be a string.',
                'head_line.max' => 'The header discount may not be greater than 255 characters.',
            ]);

			$checkUser = User::find(\Auth::id());
			if ($checkUser && $checkUser->designation_id == '1') {
				$checkUser->head_line = $request->head_line;
				$checkUser->save();

				return response()->json(['success' => true,'message'=>"Header discount updated successfully."]);
			} else {
				return response()->json(['success' => false,'message'=>"You are not a admin"]);
			}

			return response()->json(['success' => false,'message'=>"User not found."]);
		}

        return view('admin.settings.home');
	} 
    
    public function charges(Request $request)
	{
		if ($request->isMethod('post')) {
			
			$request->validate([
                'delivery_charge' => 'required',
                'applicable_charge' => 'required',
            ], [
                'delivery_charge.required' => 'The delivery charge field is required.',
                'applicable_charge.required' => 'The applicable charge field is required.',
            ]);
            
			$checkUser = User::find(\Auth::id());
			if ($checkUser && $checkUser->designation_id == '1') {
				$checkUser->delivery_charge = $request->delivery_charge;
				$checkUser->applicable_charge = $request->applicable_charge;
				$checkUser->save();

				return response()->json(['success' => true,'message'=>"Charges updated successfully."]);
			} else {
				return response()->json(['success' => false,'message'=>"You are not a admin"]);
			}

			return response()->json(['success' => false,'message'=>"User not found."]);
		}

	}
}
