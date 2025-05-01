<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Hash;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index(Request $request)
	{

		return view('admin.dashboard'); // Return the dashboard view
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

	public function adminList(Request $request){
		$result=User::where('user_type', 'Admin')
			->where('designation_id', 8)
			->orderBy('id','DESC')
			->get();
		return view('admin.admin.list', compact('result'));
	}

	public function add(Request $request){

		if($request->isMethod('post')){		
			$rules=[				
				'name'=>'string|required',
				'email'=>'required|email|unique:users,email,' . $request->post('id'),    
            	'mobile' => 'required|numeric|digits:10|unique:users,mobile,' . $request->post('id'),				
			];
			 
			if($request->hasFile('image')){
				$rules['image']='required|image|mimes:jpeg,png,jpg,gif,svg,webp';
			}
					
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

				try{
					if((int) $request->post('id')>0){
						
						$admin=User::where('id',$request->post('id'))->first();
					}else{
						$admin=new User();
					}
					
					$email = $request->post('email');
					$filename=$request->post('old_image');

					if($request->hasFile('image')){
						$filename = \App\Helpers\commonHelper::uploadFile($request->file('image'),'user'); 
					} 
										
					$admin->profileimage=$filename;
					$admin->name=$request->post('name');
					$admin->email=$request->post('email');
					$admin->mobile=$request->post('mobile');
					$uniqueId='AS'.rand(11111,99999);
					$admin->password=bcrypt('12345678');
					$admin->unique_id = $uniqueId;
					$admin->user_type = 'Admin';
					$admin->designation_id = 8;					
					$admin->status = 'Active';									
					$admin->save();

					if((int) $request->post('id')>0){
						
						return response(array('message'=>'Admin updated successfully.','reset'=>false),200);
					}else{
						$token = \Str::random(64);
						\DB::table('password_resets')->insert([
							'email'=>$uniqueId,
							'token'=>$token,
							'created_at'=>Carbon::now(),
						]);
						$action_link = route('reset.password.form',['token'=>$token,'unique_id'=>$uniqueId]);
						
						$data=[
							'action_link'=>$action_link,
							'unique_id'=>$uniqueId
						];
					
						Mail::to($email)->send(new \App\Mail\SendMail($data, 'Welcome Mail'));
						return response(array('message'=>'Admin added successfully.','reset'=>true,'script'=>true),200);
					
					}
				}catch (\Exception $e){
					return response(array("message" => $e->getMessage()),403); 
				}
			}
		
			return response(array('message'=>'Data not found.'),403);
    	}
		$result=[];
        return view('admin.admin.add',compact('result'));
    }

	public function add_old(Request $request){

		if($request->isMethod('post')){		
			$rules=[				
				'name'=>'string|required',
				'email'=>'required|email|unique:users,email,' . $request->post('id'),    
            	'mobile' => 'required|numeric|digits:10|unique:users,mobile,' . $request->post('id'),				
			];
			 
			if($request->hasFile('image')){
				$rules['image']='required|image|mimes:jpeg,png,jpg,gif,svg,webp';
			}
					
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

				try{
					if((int) $request->post('id')>0){
						
						$admin=User::where('id',$request->post('id'))->first();
					}else{
						$admin=new User();
					}
					
					$email = $request->post('email');
					$filename=$request->post('old_image');

					if($request->hasFile('image')){
						$filename = \App\Helpers\commonHelper::uploadFile($request->file('image'),'user'); 
					} 
										
					$admin->profileimage=$filename;
					$admin->name=$request->post('name');
					$admin->email=$request->post('email');
					$admin->mobile=$request->post('mobile');
					$uniqueId='AS'.rand(11111,99999);
					if((int) $request->post('id')<0){
						$admin->password=bcrypt('12345678');
						// $uniqueId='AS'.rand(11111,99999);
						$admin->unique_id = $uniqueId;
						$admin->user_type = 'Admin';
						$admin->designation_id = 8;					
						$admin->status = 'Active';					
					}					
					$admin->save();

					if((int) $request->post('id')>0){
						
						return response(array('message'=>'Admin updated successfully.','reset'=>false),200);
					}else{
						$token = \Str::random(64);
						\DB::table('password_resets')->insert([
							'email'=>$uniqueId,
							'token'=>$token,
							'created_at'=>Carbon::now(),
						]);
						$action_link = route('reset.password.form',['token'=>$token,'unique_id'=>$uniqueId]);
						
						$data=[
							'action_link'=>$action_link,
							'unique_id'=>$uniqueId
						];
					
						Mail::to($email)->send(new \App\Mail\SendMail($data, 'Welcome Mail'));
						return response(array('message'=>'Admin added successfully.','reset'=>true,'script'=>true),200);
					
					}
				}catch (\Exception $e){
					return response(array("message" => $e->getMessage()),403); 
				}
			}
		
			return response(array('message'=>'Data not found.'),403);
    	}
		$result=[];
        return view('admin.admin.add',compact('result'));
    }

    public function changeStatus(Request $request){
		 
		$adminList=\App\Models\User::where('id',$request->post('id'))->first();
 
		if($adminList){
			
			User::where('id',$request->post('id'))->update(['status'=>$request->post('status')]);
		
			return response(array('message'=>'Admin status changed successfully.'),200);
			
		}else{
			
			return response(array('message'=>'Unauthorised Access.'),403);
		}
		
	}

	public function updateAdmin(Request $request,$id){

		$result=User::where('id',$id)->first();
		
		if($result){
			
			return view('admin.admin.add',compact('result'));
			
		}else{
			
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}
}
