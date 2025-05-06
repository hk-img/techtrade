<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Information;

class InformationController extends Controller
{
    public function contactInfo(Request $request){
			
		if($request->isMethod('post')){
			$rules=[
				// 'id'=>'numeric|required',
				'email'=>'string|required',
				'contact_no' => 'required',
				'registered_office' => 'required',
				'corporate_office' => 'required',
			];
			
			$validator = \Validator::make($request->all(), $rules);
			
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
                    $information=Information::where('id',$request->post('id'))->first();
                }else{
                    $information=new Information();
                }

                $information->email=$request->post('email');
                $information->contact_no=$request->post('contact_no');
                $information->registered_office=$request->post('registered_office');
                $information->corporate_office=$request->post('corporate_office');				
                $information->link=$request->post('link');				
                $information->save();

                if((int) $request->post('id')==0){
                    return response(array('message'=>'Information added successfully.','reset'=>true,'reload'=>true,'script'=>true),200);
                }else{
                    return response(array('message'=>'Information updated successfully.','reload'=>true,'reset'=>false),200);
                
                }
                
            }
			
			return response(array('message'=>'Data not found.'),403);
		}
		
		$result=[];
        $result=Information::first();
        return view('admin.information.contact',compact('result'));
    }

    public function contact(Request $request){

        $result = \App\Models\Contact::orderBy('id','DESC')->get();
        return view('admin.contact',compact('result'));

    }
    
    public function carrier(Request $request){

        $result = \App\Models\Carrier::orderBy('id','DESC')->get();
        return view('admin.carrier',compact('result'));

    }
}
