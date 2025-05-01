<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function add(Request $request){
			
		if($request->isMethod('post')){
			$rules=[
				// 'id'=>'numeric|required',
				'name'=>'string|required',
				'link' => 'nullable|url',
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
				
				
				$chkAlreadyExistName=Link::where([
													['name','=',$request->post('name')],
													['id','!=',$request->post('id')],
													])->first();
				if($chkAlreadyExistName){
					return response(array('message'=>"Link name already exist."),403);
				}else{


					if((int) $request->post('id')>0){
						$link=Link::where('id',$request->post('id'))->first();
					}else{
						$link=new Link();
					}

					$link->name=$request->post('name');
					$link->link=$request->post('link');					
					$link->save();

					if((int) $request->post('id')==0){
						return response(array('message'=>'Link added successfully.','reset'=>true,'reload'=>true,'script'=>true),200);
					}else{
						return response(array('message'=>'Link updated successfully.','reload'=>true,'reset'=>false),200);
					
					}
					
				}
			}
			return response(array('message'=>'Data not found.'),403);
		}
		
		$result=[];
        return view('admin.link.add',compact('result'));
    }
	
	public function linkList(){	

        $result = \App\Models\Link::orderBy('id','DESC')->get();
		return view('admin.link.list',compact('result'));
	}

    public function updatelink(Request $request,$id){
		
		$result=Link::where('id',$id)->first();
		
		if($result){

            return view('admin.link.add',compact('result'));
			
		}else{
			
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}
	

	public function deleteLink(Request $request,$id){

		$result= Link::find($id);
		
		if($result){
			$result->delete();
					
			return redirect()->back()->with('5fernsadminsuccess','Link deleted successfully.');
			
		}else{
			
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}
	
	public function changeStatus(Request $request){

		$id = $request->post('id');
		$status = $request->post('status');
		$result= Link::find($id);
		
		if($result){
			$result->update(['status'=>$status]);
		
			$msg = $request->post('status') == 1 ? 'Active' : 'Inactive';
			return response(array('message'=>'Link status '.$msg.' successfully.'),200);
			
		}else{

			return response(array('message'=>'Something went wrong. Please try again.'),400);
		}
		
	}
}
