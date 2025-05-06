<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Holiday;
class HolidayController extends Controller
{
    public function add(Request $request){
			
		if($request->isMethod('post')){
			$rules=[
				// 'id'=>'numeric|required',
				'holiday_type'=>'string|required',
				'year'=>'required',
				'holiday'=>'string|required',
				'exchanges'=>'string|required',
				'date' => 'required',
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
				
				
                $chkAlreadyExistName = Holiday::where('date', $request->post('date'))
                ->where('id', '!=', $request->post('id'))
                ->first();

				if($chkAlreadyExistName){
					return response(array('message'=>"Holiday already exist."),403);
				}else{


					if((int) $request->post('id')>0){
						$holiday = Holiday::where('id',$request->post('id'))->first();
					}else{
						$holiday=new Holiday();
					}

					$holiday->holiday_type=$request->post('holiday_type');
					$holiday->holiday=$request->post('holiday');
					$holiday->exchanges=$request->post('exchanges');
					$holiday->year=$request->post('year');
					$holiday->date = $request->post('date');
                    $holiday->weak_day = date('l', strtotime($holiday->date));	
					$holiday->save();

					if((int) $request->post('id')==0){
						return response(array('message'=>'Holiday added successfully.','reset'=>true,'reload'=>true,'script'=>true),200);
					}else{
						return response(array('message'=>'Holiday updated successfully.','reload'=>true,'reset'=>false),200);
					
					}
					
				}
			}
			return response(array('message'=>'Data not found.'),403);
		}
		
		$result=[];
        return view('admin.holiday.add',compact('result'));
    }
	
	public function holidayList(){	

        $result = \App\Models\Holiday::orderBy('id','DESC')->get();
		return view('admin.holiday.list',compact('result'));
	}

    public function updateHoliday(Request $request,$id){
		
		$result=Holiday::where('id',$id)->first();
		
		if($result){

            return view('admin.holiday.add',compact('result'));
			
		}else{
			
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}
	
	public function deleteHoliday(Request $request,$id){

		$result= Holiday::find($id);
		
		if($result){
			$result->delete();
					
			return redirect()->back()->with('5fernsadminsuccess','Holiday deleted successfully.');
			
		}else{
			
			return redirect()->back()->with('5fernsadminerror','Something went wrong. Please try again.');
		}
		
	}
	
	public function changeStatus(Request $request){

		$id = $request->post('id');
		$status = $request->post('status');
		$result= Holiday::find($id);
		
		if($result){
			$result->update(['status'=>$status]);
		
			$msg = $request->post('status') == 1 ? 'Active' : 'Inactive';
			return response(array('message'=>'Holiday status '.$msg.' successfully.'),200);
			
		}else{

			return response(array('message'=>'Something went wrong. Please try again.'),400);
		}
		
	}
}
