<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Category;

class CategoryController extends Controller
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
				
				
				$chkAlreadyExistName=Category::where([
													['name','=',$request->post('name')],
													['id','!=',$request->post('id')],
													])->first();
				if($chkAlreadyExistName){
					return response(array('message'=>"Category name already exist with this selected category."),403);
				}else{


					if((int) $request->post('id')>0){
						$category=Category::where('id',$request->post('id'))->first();
					}else{
						$category=new Category();
					}

					$category->name=$request->post('name');
					$category->parent_id=$request->post('parent_id');
					$category->slug=\Str::slug($request->post('name'));
					$category->link=$request->post('link');					
					$category->save();

					if((int) $request->post('id')==0){
						return response(array('message'=>'Category added successfully.','reset'=>true,'reload'=>true,'script'=>true),200);
					}else{
						return response(array('message'=>'Category updated successfully.','reload'=>true,'reset'=>false),200);
					
					}
					
				}
			}
			return response(array('message'=>'Data not found.'),403);
		}
		
		$result=[];
        $category=Category::where('status','1')->where('parent_id',NULL)->orderBy('id','DESC')->get();
        return view('admin.category.add',compact('result','category'));
    }
	
	public function categoryList(){	

        $result = \App\Models\Category::orderBy('id','DESC')->get();
		return view('admin.category.list',compact('result'));
	}

    public function updatecategory(Request $request,$id){
		
		$result=Category::where('id',$id)->first();
		
		if($result){
            $category=Category::where('status','1')->where('parent_id',NULL)->orderBy('id','DESC')->get();
			return view('admin.category.add',compact('result','category'));
			
		}else{
			
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}
	
	public function deleteCategory(Request $request,$id){

		$result= Category::find($id);
		
		if($result){
			$result->delete();
					
			return redirect()->back()->with('5fernsadminsuccess','Category deleted successfully.');
			
		}else{
			
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}
	
	public function changeStatus(Request $request){

		$id = $request->post('id');
		$status = $request->post('status');
		$result= Category::find($id);
		
		if($result){
			$result->update(['status'=>$status]);
		
			$msg = $request->post('status') == 1 ? 'Active' : 'Inactive';
			return response(array('message'=>'Category status '.$msg.' successfully.'),200);
			
		}else{

			return response(array('message'=>'Something went wrong. Please try again.'),400);
		}
		
	}
}
