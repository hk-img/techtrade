<?php
namespace App\Helpers;

use App\Models\Labtest;
use App\Models\LabTestCategory;
use App\Models\Medicine;
use App\Models\MedicineInventory;
use App\Models\Notification;
use App\Models\User;
use App\Providers\PushNotificationEvent;
use Ixudra\Curl\Facades\Curl;
use Session;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;
use Illuminate\Support\Facades\Http;

class commonHelper{
	
	public static function callAPI($method, $url, $data=array(),$files=array()){

        
		$url=env('APP_URL').'/api'.$url;
		
		if($method == 'GET'){
			
			return $response = Curl::to($url)
			->returnResponseObject()
            ->get();

        }elseif($method == 'PUT'){

            return $response = Curl::to($url)

            ->withData(['title'=>'Test', 'body'=>'body goes here', 'userId'=>1])
			->returnResponseObject()
            ->put();

        }elseif($method == 'DELETE'){

            return $response = Curl::to($url)

                ->delete();
        }elseif($method == 'patch'){

            return $response = Curl::to($url)

                ->withData(['title'=>'Test', 'body'=>'body goes here', 'userId'=>1])
				->returnResponseObject()
                ->patch();
        }elseif($method == 'POST'){

            return $response = Curl::to($url)
                ->withData($data)
				->returnResponseObject()
                ->post();
                
        }elseif($method == 'POSTFILE'){
			
            return $response = Curl::to($url)
                ->withData($data)
				->withFile($files['file_input'],$files['image_file'], $files['getMimeType'], $files['getClientOriginalName']) 
                ->post();
                
        }elseif($method == 'userTokenpost'){

            return $response = Curl::to($url)
                ->withData($data)
                ->withBearer(Session::get('userToken'))
				->returnResponseObject()
                ->post();
                
        }elseif($method == 'userTokenget'){
			$token = Session::get('userToken') ?? 'null';
            return $response = Curl::to($url)
            ->withBearer($token)
			->returnResponseObject()
            ->get();

        }
        
    }

	public static function buildMenu($parent, $menu, $sub = null) {
		$html = "";

		if (isset($menu['parents'][$parent])) {
			if (!empty($sub)) {
				$html .= "<ul id=" . $sub . " class='ml-menu'><li class=\"ml-menu\">" . $sub . "</li>\n";
			} else {
				$html .= "<ul class='list'>\n";
			}

			foreach ($menu['parents'][$parent] as $itemId) {
				$active = (request()->is($menu['items'][$itemId]['active_link'])) ? 'active' : '';
				$target = null;

				// Fetch order count (modify this logic as per your application)
				$orderCount = self::getCount($menu['items'][$itemId]['label']);

				if (!isset($menu['parents'][$itemId])) { // If no submenu
					$badge = ($orderCount > 0) ? "<span class='badge badge-danger'>$orderCount</span>" : '';
					$html .= "<li class='" . $active . "'>\n  
						<a $target title='" . $menu['items'][$itemId]['label'] . "' href='" . url($menu['items'][$itemId]['link']) . "'>
							<em class='" . $menu['items'][$itemId]['icon'] . " fa-fw'></em>
							<span>" . $menu['items'][$itemId]['label'] . " $badge</span>
						</a>\n
					</li>\n";
				}

				if (isset($menu['parents'][$itemId])) { // If submenu exists
					$html .= "<li class='" . $active . "'>\n  
						<a onclick='return false;' class='menu-toggle' href='#" . $menu['items'][$itemId]['label'] . "'>
							<em class='" . $menu['items'][$itemId]['icon'] . " fa-fw'></em>
							<span>" . $menu['items'][$itemId]['label'] . "</span>
						</a>\n";
					$html .= self::buildMenu($itemId, $menu, $menu['items'][$itemId]['label']);
					$html .= "</li>\n";
				}
			}

			$html .= "</ul>\n";
		}

		return $html;
	}

	// Example method to fetch order count
	public static function getCount($label) {
		// Replace this with your actual logic to get the total order count
		if($label == 'All Orders'){
			return \App\Models\Sales::count();
		}elseif($label == 'Pending Orders'){

			$query = \App\Models\Sales::query();

			if(auth()->check() && auth()->user()->user_type == 'Retailer'){
				$query->where('retailer_id', auth()->user()->id)->whereIn('retailer_status', ['0',NULL])->where('status', 'Confirmed')->whereIn('payment', ['cod','paid']);
			}else{
				$query->whereNull('retailer_id')->where('status','Pending')
				->where(function ($q) {
					$q->whereIn('retailer_status', ['2','0'])
						->orWhereNull('retailer_status');
				});
			}

			$query = $query->count();
			return $query;
		}elseif($label == 'Assigned Orders'){
			return \App\Models\Sales::where('retailer_id','!=', NULL)->count();
		}elseif ($label === 'Handover to logistics') {

			$query = \App\Models\Sales::where('status', 'Shipped')->whereNotNull('delivery_boy_name');
			if(auth()->check() && auth()->user()->user_type == 'Retailer'){
				$query->where('retailer_id',auth()->user()->id);
			}

			$query = $query->count();

			return $query;
			
		}elseif($label == 'COD Orders'){

			$query = \App\Models\Sales::where('status','Confirmed')->where('payment', 'COD');

			if(auth()->check() && auth()->user()->user_type == 'Retailer'){
				$query->where('retailer_id', auth()->user()->id);
			}else{
				$query
				->where(function ($q) {
					$q->whereIn('retailer_status', ['2','0'])
						->orWhereNull('retailer_status');
				});
			}

			$query = $query->count();
			return $query;
		}elseif($label == 'Confirmed Order'){

			$query = \App\Models\Sales::where('status','Confirmed')->where('payment','unpaid');

			if(auth()->check() && auth()->user()->user_type == 'Retailer'){
				$query->where('retailer_id', auth()->user()->id);
			}else{
				$query->whereNull('retailer_id')
				->where(function ($q) {
					$q->whereIn('retailer_status', ['2','0'])
						->orWhereNull('retailer_status');
				});
			}

			$query = $query->count();
			return $query;

		}elseif($label == 'Paid Order'){
			$query = \App\Models\Sales::where('status','Confirmed')->where('payment','paid');

			if(auth()->check() && auth()->user()->user_type == 'Retailer'){
				$query->where('retailer_id', auth()->user()->id);
			}else{
				$query
				->where(function ($q) {
					$q->whereIn('retailer_status', ['2','0'])
						->orWhereNull('retailer_status');
				});
			}

			$query = $query->count();
			return $query;

		}elseif($label == 'Ready to Ship'){
			$query = \App\Models\Sales::where('status','Shipped')->whereNULL('delivery_boy_name');

			if(auth()->check() && auth()->user()->user_type == 'Retailer'){
				$query->where('retailer_id', auth()->user()->id);
			}else{
				$query
				->where(function ($q) {
					$q->whereIn('retailer_status', ['2','1'])
						->orWhereNull('retailer_status');
				});
			}

			$query = $query->count();
			return $query;

		}elseif($label == 'Dispatch Order'){
			return \App\Models\Sales::where('status','Dispatch')->count();
		}elseif($label == 'Deliver Order'){
			return \App\Models\Sales::where('status','Delivered')->count();
		}elseif($label == 'Hold Orders'){
			return \App\Models\Sales::where('status','Hold')->count();
		}elseif($label == 'Denied Order'){
			return \App\Models\Sales::where('status','Denied')->count();
		}elseif($label == 'Cancel Order'){
			return \App\Models\Sales::where('status','Cancelled')->count();
		}elseif($label == 'Return Orders'){
			return \App\Models\Sales::whereHas('sale',function($q){
				$q->where('return_status','Approved')->where('order_status','Return');
			})->count();
		}elseif ($label == 'Approved Orders') {
			return \App\Models\Sales::where('retailer_status','1')->where('status','Confirmed')->where('retailer_id', auth()->user()->id)->count();
		}elseif ($label == 'Rejected Order') {
			return \App\Models\Sales::where('retailer_status','2')->where('status','Confirmed')->where('retailer_id', auth()->user()->id)->count();
		}elseif ($label == 'Remainder Orders') {
			return \App\Models\Sales::whereDate('reminder_date', Carbon::today())->count();
		}else{
			return 0;
		}
	}


	public static function updateMenu($designationId){

		$user_menu=\App\Models\User_role::select('user_roles.*','menus.*','menus.id as menuid')->leftJoin('menus','user_roles.menu_id','=','menus.id')->where('user_roles.designation_id',$designationId)->where('menus.status','1')->orderBy('sort','ASC')->get()->toArray();
                
		$all_menu=\App\Models\Menu::get()->toArray(); 	

		$restricted_link = array();
		foreach ($all_menu as $data1) {
			$duplicate = false;
			foreach ($user_menu as $data2) {
				if ($data1['id'] === $data2['menuid']) {
					$duplicate = true;
				}
			}
			if ($duplicate === false) {
				$restricted_link[] = $data1['link'];
			}
		}

		$exception_uris = $restricted_link;
		Session::put('fivefernsadminrexceptionurl',$exception_uris);
		Session::put('fivefernsadminmenu',$user_menu);  

	}

	public static function getSidebarMenu(){
		
		if(Session::has('fivefernsadminmenu')){

			$result=Session::get('fivefernsadminmenu');


			$menu = array(
				'items' => array(),
				'parents' => array()
			);
			
	
			foreach ($result as $v_menu) {
				$menu['items'][$v_menu['menu_id']] = $v_menu;
				$menu['parents'][$v_menu['parent']][] = $v_menu['menu_id'];
			}
	
			return  \App\Helpers\commonHelper::buildMenu(0, $menu);
		}

	}
  
	public static function getOtp(){
		
        // $otp = mt_rand(1000,9999);
		$otp = mt_rand(100000, 999999);
		
        return $otp;
	}
	
	public static function sendMsg($url){
        
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
		curl_close($ch);
	}

    public static function emailSendToUser($to, $subject, $msg, $template = false, $result = false){
		
		if (!$template) {
			$template = 'mail';
		}
		if (!$result) {
			$result = array();
		}

		\Mail::send('email_templates.'.$template, compact('to', 'subject', 'msg', 'result'), function($message) use ($to, $subject) {
			$message->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
			$message->subject($subject);
			$message->to($to);
			
		});
	}
	    
	public static function uploadProduct($file,$folder){

        // Ensure the folder path ends with a slash
		$folder = rtrim($folder, '/') . '/';

		// Generate a unique filename
		$filename = time() . '_' . $file->getClientOriginalName();

		// Upload the file to S3 within the specified folder
		$path = $file->storeAs($folder, $filename, 's3');

		// Optional: Get the URL of the uploaded file
		// $url = Storage::disk('s3')->url($path);

		// Return the filename
		\Log::info('Upload successfullly:',['filename' => $filename]);
		return $filename;
	}

	public static function getImageUrl($folder, $filename) {
		// Generate the file path
		$filePath = "$folder/$filename";
			
		if (file_exists('images/'.$filePath) && !empty($filename)) {
			return asset('images/'.$filePath);
		} else {
			return asset('images/no_images.webp');
		}
	}

	// public static function uploadFile($file,$folder){

	// 	$filename = strtotime(date('Y-m-d H:i:s')).rand(11,99) . '.' . $file->getClientOriginalExtension();
	// 	$file->move(public_path('/uploads/'.$folder), $filename);

	// 	// image convert in to webp
	// 	$ext=$file->getClientOriginalExtension();
	// 	$quality = "50";
	// 	$dir = public_path('/uploads/'.$folder.'/');
	// 	$img=imagecreatefromstring(file_get_contents($dir.$filename));
	// 	imagepalettetotruecolor($img);
	// 	unlink($dir.$filename);
	// 	$filename =preg_replace('"\.(jpg|jpeg|png|webp)$"','.webp', $filename);  
	// 	imagewebp($img, $dir.$filename, 50); 

	// 	return $filename;
	// }

	public static function uploadFile($file, $folder)
	{
		// Generate a unique filename with a timestamp and random number
		$filename = strtotime(date('Y-m-d H:i:s')) . rand(11, 99) . '.' . $file->getClientOriginalExtension();

		// Define the destination path for the root/images folder
		$destinationPath = base_path('images/' . $folder);

		// Create the folder if it doesn't exist
		if (!file_exists($destinationPath)) {
			mkdir($destinationPath, 0755, true);
		}

		// Get the file extension
		$ext = strtolower($file->getClientOriginalExtension());

		// Check if the file is a PDF
		if ($ext === 'pdf') {
			// Move the PDF file directly without conversion
			$file->move($destinationPath, $filename);
		} else {
			// Move the uploaded file temporarily
			$file->move($destinationPath, $filename);

			// Define quality for WebP conversion
			$quality = 50; 

			// Create the file path
			$filePath = $destinationPath . '/' . $filename;

			// Create an image resource from the file
			$img = imagecreatefromstring(file_get_contents($filePath));

			// Convert to true color to ensure proper WebP conversion
			imagepalettetotruecolor($img);

			// Remove the original file after conversion
			unlink($filePath);

			// Update the filename to use the .webp extension
			$filename = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $filename);

			// Save the WebP image
			imagewebp($img, $destinationPath . '/' . $filename, $quality);
		}

		// Return the filename
		return $filename;
	}


	// public static function deleteImage($folder, $filename) {
	// 	// Generate the file path
	// 	$filePath = "$folder/$filename";

	// 	if (File::exists(public_path('uploads/'.$filePath))) {
	// 		File::delete(public_path('uploads/'.$filePath));
	// 		return true;
	// 	} else {
	// 		return false; // File does not exist
	// 	}
	// }

	public static function deleteImage($folder, $filename)
	{
		// Generate the file path in the root images directory
		$filePath = base_path('images/' . $folder . '/' . $filename);

		// Check if the file exists and delete it
		if (File::exists($filePath)) {
			File::delete($filePath);
			return true; // File successfully deleted
		} else {
			return false; // File does not exist
		}
	}

	public static function sendNotification($to, $from, $msg){

		$notfication = new Notification();
		
		$notfication->to = $to;
		$notfication->from = $from;
		$notfication->message = $msg;
		$notfication->status = 1;
		$notfication->save();
	}

	public static function generatInvoice($order_id, $type = 'medicine'){

			$data = \App\Helpers\commonHelper::getDataForInvoice($order_id, $type);
			$pdf = PDF::loadView('admin.sales.invoice', $data);
			return $pdf;
	}

	public static function getDataForInvoice($order_id, $type){

		$query = \App\Models\OrderStore::where('sub_order_id', $order_id)
		->leftJoin('orders', 'orders.order_id', '=', 'order_stores.order_id')
		->leftJoin('addressbooks', 'addressbooks.id', '=', 'orders.address_id')
		->leftJoin('users', 'users.id', '=', 'orders.user_id');
		$query->when($type == 'medicine', function($q){
			$q->leftJoin('users as vendor', 'vendor.id', '=', 'order_stores.store_id') 
			->leftJoin('k_y_c_s', 'k_y_c_s.user_id', '=', 'vendor.id')
			->leftJoin('userdetails', 'userdetails.user_id', '=', 'vendor.id')
			// Use 'store_id' or adjust based on your actual column
			->select(
				'order_stores.order_id',
				'orders.coupon_discount',
				'order_stores.sub_order_id',
				'addressbooks.*',
				'users.name as customer_name',
				'vendor.name as vendor_name', // Corrected alias here
				'userdetails.address_fullname as vendor_address',
				'k_y_c_s.gst_number',
			);
		});
		$query->when($type == 'test', function($q){
			$q->leftJoin('laboratory','laboratory.id','=','order_stores.lab_id')
			->leftJoin('users as vendor', 'vendor.lab_id', '=', 'laboratory.id') 
			->leftJoin('k_y_c_s', 'k_y_c_s.user_id', '=', 'vendor.id')
			->leftJoin('userdetails', 'userdetails.user_id', '=', 'vendor.id')
			->select(
				'order_stores.order_id',
				'orders.coupon_discount',
				'order_stores.sub_order_id',
				'addressbooks.*',
				'users.name as customer_name',
				// 'vendor.name as vendor_name', // Corrected alias here
				'laboratory.name as vendor_name', // Corrected alias here
				'userdetails.address_fullname as vendor_address',
				'k_y_c_s.gst_number',
			);
		});
		
		$order = $query->first();
		if(intval($order->coupon_discount) > 0){
			$getOrder = \App\Models\OrderStore::where('order_id', $order->order_id)->count();
			if($getOrder > 1){
				$order->coupon_discount = $order->coupon_discount/$getOrder;
			}
		}
			
			$sql = \App\Models\OrderItem::where('sub_order_id', $order_id);
			$order_items = $sql->get();

			$ordeItem = [];
			foreach($order_items as $item){
				$type = $item->type;
				$product_id = $item->product_id;
				$product_name = '';
				if($type == 'medicine'){
					$product_name = \App\Models\Medicine::where('id', $product_id)->first()->name ?? '';
				}elseif($type == 'product'){
					$product = \App\Models\Variantproduct::leftJoin('products','products.id','=','variantproducts.product_id')
					->where('variantproducts.id', $product_id)
					->first();
					$AttributeResult = \App\Helpers\commonHelper::getAttribute($product->variant_attributes);
					$product_name = $product->name.' ('.$AttributeResult.')';

				}else{
					$product_name = LabTestCategory::where('id', $product_id)->first()->name ?? '';
				}

				$ordeItem[] = [
					'item' => $product_name,
					'expiry_date' => $item->expiry_date != null ? date('d M, Y', strtotime($item->expiry_date)) : 'N/A',
					'product_price' => $item->product_price,
					'qty' => $item->qty,
					'sub_total' => $item->sub_total
				];
			}

			$order_items = $sql->get()->toArray();
			/** invoice number */
			$invoiceNumber= 'INV-' . time();
			
			/** invoice date */
			$formattedDate = date('F j, Y');
			$date = $formattedDate;

			$data = [
				'invoice_date' => $date,
				'invoice_number' => $invoiceNumber,
				'customer_name' => $order->customer_name,
				'coupon_discount' => $order->coupon_discount,
				'deliver_to' => $order->name,
				'address' => $order->address_line1.','.$order->pincode,
				'mobile' => $order->mobile,
				'order_id' =>$order->sub_order_id,
				'vendor_name' => $order->vendor_name,
				'vendor_address' => $order->vendor_address,
				'gst_number' => $order->gst_number,
				'order_items' => $ordeItem,
				'total' => array_sum(array_column($order_items, 'sub_total')),
			];

			return $data;
	}

	public static function checkStockQty($vendor_id, $product_id, $qty, $type, $collection_type = null, $slot = null){
		$stock = true;
		if($type == 'medicine'){
			// dd($type);
			$checkStock = \App\Models\MedicineInventory::where('vendor_id',$vendor_id)->where('medicine_id',$product_id)->first();
			if($checkStock){
				$stock = $checkStock->stock >= $qty;
			}
		}
		elseif($type == 'product'){
			$checkStock = \App\Models\ProductInventory::where('vendor_id',$vendor_id)->where('variantproduct_id',$product_id)->first();
			if($checkStock){
				$stock = $checkStock->stock >= $qty;
			}
		}
		else{
			$checkStock = \App\Models\Labtest::where('id', $vendor_id)->first();
			if($checkStock){
				$data =  json_decode($checkStock->test_list, true);
	
				foreach ($data as $item) {
					if ($item["id"] == $product_id) {
						if (isset($item["collection_type"][$collection_type])) {
							$collectionType = $item["collection_type"][$collection_type];
					
							if (isset($collectionType[$slot])) {
								// Found the desired collection type and inner key
								$result = $collectionType[$slot];
								$stock = $result >= $qty;
								break;
							}
						}
					}
				}
			}
		}
		return $stock;
	}

	public static function getProductName($product_id, $type){
		$product_name = '';
		if($type == 'medicine'){
			$product_name = \App\Models\Medicine::where('id', $product_id)->first()->name ?? '';
		}elseif($type == 'product'){
			$product = \App\Models\Variantproduct::leftJoin('products','products.id','=','variantproducts.product_id')
			->where('variantproducts.id', $product_id)
			->first();
			$AttributeResult = \App\Helpers\commonHelper::getAttribute($product->variant_attributes);
			$product_name = $product->name.' ('.$AttributeResult.')';

		}else{
			$product_name = LabTestCategory::where('id', $product_id)->first()->name ?? '';
		}

		return $product_name;
	}

	// Notification Message
	public static function notificationMessage($type , $val = null){
		$msg = '';
		if($type == 'store'){
			if(is_numeric($val) && intval($val) > 0){
				$msg = 'Store went offline for '.$val.' hour';
			}
			elseif($val == '-1'){
				$msg = 'Store went offline';
			}
			elseif($val == '-2'){
				$msg = 'Store went offline till tomorrow';
			}
			elseif($val == '-3'){
				$msg = 'Store is online';
			}
		}
		elseif($type == 'off_time'){
			$msg = 'Store is offline from '.date('D, d M Y',strtotime($val['start_date'])).' '.$val['start_time'].' to '.date('D, d M Y',strtotime($val['end_date'])).' '.$val['end_time'];
		}
		elseif($type == 'commission'){
			$status = $val['status'];
			if($status == 1){
				$statusVal = 'Pending';
			}elseif($status == 2){
				$statusVal = 'Paid';

			}elseif($status == 3){
				$statusVal = 'Received';	
			}
			else{

			}
			$msg ='Payment '.$statusVal.' for '.$val['order_id'];
		}
		elseif($type == 'health_report'){

			$msg ='Report for patient'.$val['patient_name'].' is uploaded by '.$val['lab_name'];
		}
		elseif($type == 'reupload_pres'){

			$msg ='Please reupload the prescription for order '.$val['order'];
		}
		elseif($type == 'request_pincode'){

			$msg ='Requests to add a new pincode '.$val['pincode'];
		}
		elseif($type == 'profile'){
			if($val == 'add_profile'){
				$msg = 'Added profile details';
			}
			elseif($val == 'add_lab'){
				$msg = 'Added lab details';
			}
			elseif($val == 'add_bank'){
				$msg = 'Added bank details';
			}
			elseif($val == 'add_deliveryboy'){
				$msg = 'Added new delivery Boy';
			}
			elseif($val == 'upload_document'){
				$msg = 'Uploaded Document';
			}
			else{

			}

		}
		else{

		}

		return $msg;
	}

	public static function removeItemCart($id,$type){

		$getUserAll = \App\Models\Addtocart::where('product_id',$id)->where('type', $type)->get();

		if($type == 'medicine'){
			$product_name = \App\Models\Medicine::where('id',$id)->first()->name ?? 'Product';
		}else{
			$product_name = \App\Models\Product::where('id',$id)->first()->name ?? 'Product';
		}
		$notificationMessage = $product_name." is no longer available and has been removed from your cart.";

		foreach($getUserAll as $user){
			//Push notification
			$device_tok= [];
			$token = \App\Models\DeviceToken::where('user_id', $user->user_id,'customer')->first();
			if($token){
				$device_tok[]= $token->device_token;
				$device_token = $device_tok;
				$title = "Item removed";
				$message = $notificationMessage;
				$event = event(new PushNotificationEvent($device_token, $title, $message));
				$event = json_decode($event[0], true);
			}

			$to = $user->user_id;
			$from = config('global.admin');
			$msg = $notificationMessage;
			commonHelper::sendNotification($to, $from, $msg);
		}
		$getUserAll = \App\Models\Addtocart::where('product_id',$id)->where('type', $type)->delete();
	}

	public static function sendMessageThroughFCM(
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
	) {
		$specificFCM = "";
	
		// Determine FCM token
		if (!empty($userMobile)) {
			$specificUser = User::where('mobile', $userMobile)->first();
			if ($specificUser) {
				$specificFCM = $specificUser->fcm_token;
			}
		} else {
			$specificFCM = "/topics/medivikio";
		}
	
		// FCM endpoint
		$url = 'https://fcm.googleapis.com/fcm/send';
	
		// Payload for FCM
		$fields = [
			'to' => $specificFCM,
			'notification' => [
				'title' => $title,
				'body' => $message,
				'icon' => $notification_icon,
				'tag' => $notification_image,
				'sound' => 'default',
			],
			'data' => [
				'dataText' => $dataText,
				'dataSubText' => $dataSubText,
				'dataImage' => $dataImage,
				// 'dataSendFlag' => $dataSendFlag,
				'dataAlertOkMsg' => $dataAlertOkMsg,
				'update' => $update,
			],
		];
	
		// Headers for FCM request
		$headers = [
			// 'Authorization' => 'key=AAAA_YqS9Ag:APA91bG4R4volYa6wa0dzStfmU_oPBEI-nX9jIY9fupMYgFkv77FLEX5aZqj8r8h21YwA4yZHaGJvzErfql5wNa4gLPr3sFY1G33FTZcXOx0V-NxFUmhAdiMttC7-xY5mR8CgTJXUF-b',
			'Authorization' => 'key=' . env('FCM_SERVER_KEY'),
			'Content-Type' => 'application/json',
		];
	
		// Send the FCM request using Laravel's Http client
		$response = Http::withHeaders($headers)->post($url, $fields);
	
		// Check for successful response
		if ($response->failed()) {
			throw new \Exception('FCM request failed: ' . $response->body());
		}
	
		return $response->json(); // Return the response as JSON
	}

	public static function countSaltAddedInProduct($id){

		$saltCount = \App\Models\Product::where('salt_id', $id)->where('deleted_at', null)->count();

		return $saltCount;
	}
	
	public static function countBrandAddedInProduct($id){

		$brandCount = \App\Models\Product::where('brand_id', $id)->where('deleted_at', null)->count();

		return $brandCount;
	}

	public static function getBrandName($id){
		
		$result=\App\Models\Brand::where('id',$id)->first();	
		
		if($result){
			return ucfirst($result->name);

		}else{
			return 'Not Available';
		}
	}
	
	public static function getUserName($id){
		
		$result=\App\Models\User::where('id',$id)->first();	
		
		if($result){
			return $result->name ? ucfirst($result->name) : "User";

		}else{
			return 'Not Available';
		}
	}

	public static function getCategorNameById($id){
		
		$result=\App\Models\Category::where('id',$id)->first();	
		
		if($result){
			return ucfirst($result->name);

		}else{
			return 'Not Available';
		}
	}
	
	public static function getsaltNameById($id){
		
		$result=\App\Models\Salts::where('id',$id)->first();	
		
		if($result){
			return ucfirst($result->name);

		}else{
			return 'Not Available';
		}
	}
	
	public static function getProductNameById($id){
		
		$result=\App\Models\Product::where('id',$id)->first();	
		
		if($result){
			return ucfirst($result->name);

		}else{
			return 'Not Available';
		}
	}

	public static function calculateDiscountAmount($mrp, $offer, $offerValue, $offerDate = null)
	{
		$discountAmount = (float) $mrp; // Ensure float

		if (($offerDate === null && $offer) || strtotime(date('Y-m-d')) <= strtotime($offerDate)) {
			if ($offerValue === "%") {  
				$discount = ($mrp * floatval($offer)) / 100;
				$discountAmount = $mrp - $discount;
			} else {
				$discountAmount = $mrp - floatval($offer);
			}
		}

		return (float) round($discountAmount, 2); // Ensure float return
	}


	public static function getProductCount($field, $id,$slug=null)
	{
		$productCount = 0;

		if ($field == 'category_id') {
			$categoryIds = self::getCategoryIds($field, $id);
			$categoryIds[] = $id; 

			$productCount = \App\Models\Product::whereNull('deleted_at')
				->whereIn($field, $categoryIds)
				->count();
		} else {
			
			$productCount = \App\Models\Product::whereNull('deleted_at')
				->where($field, $id);

			if ($slug && !in_array($slug, ['index', 'brand', 'medicines'])) {
				$productCount->where(function ($query) use ($slug) {
					$query->whereHas('getCategory', function ($q) use ($slug) {
						$q->where('slug', $slug);
					})->orWhereHas('getBrand', function ($q) use ($slug) {
						$q->where('slug', $slug);
					});
				});
			}

			$productCount = $productCount->count();

		}

		return $productCount;
	}

	public static function getCategoryIds($field, $id)
	{
		if ($field == 'category_id') {
			$query = "
				WITH RECURSIVE descendants AS (
					SELECT id FROM categories WHERE parent_id = ?
					UNION ALL
					SELECT c.id FROM categories c
					JOIN descendants d ON c.parent_id = d.id
				)
				SELECT id FROM descendants
			";

			$categories = DB::select($query, [$id]);

			return array_column($categories, 'id');
		}

		return [];
	}

	public static function getCategoryProductCount($id)
	{
		// Get direct subcategories count
		$categoryCount = \App\Models\Category::whereNull('deleted_at')
			->where('parent_id', $id)
			->count();

		// Get current category's product count
		$productCount = \App\Models\Product::whereNull('deleted_at')
			->where('category_id', $id)
			->count();

		// Get all subcategories of this category
		$subcategories = \App\Models\Category::whereNull('deleted_at')
			->where('parent_id', $id)
			->pluck('id'); // Extract only IDs

		// Recursively get product count from subcategories
		foreach ($subcategories as $subcategoryId) {
			$subCategoryData = self::getCategoryCount($subcategoryId);
			// $categoryCount += $subCategoryData['category']; // Add subcategories count
			$productCount += $subCategoryData['product']; // Add subcategories' products count
		}

		return [
			"category" => $categoryCount, // Total subcategories count
			"product" => $productCount // Total products count (including all subcategories)
		];
	}

	public static function getCategoryCount($id)
	{
		// Get direct subcategories count
		$categoryCount = \App\Models\Category::whereNull('deleted_at')
			->where('parent_id', $id)
			->count();

		return [
			"category" => $categoryCount, // Total subcategories count
		];
	}

	public static function sendOTP($userId, $mobile)
	{
		$user = \App\Models\User::where('id', $userId)->first();

		if ($user) {
			// Generate OTP
			$otp = rand(100000, 999999);
			// $otp = 1111; // Uncomment for testing with a fixed OTP

			// Save OTP in the database
			$user->otp = $otp;
			$user->save();

			// Prepare API URL
			$apiUrl = "http://sms.bulksmsserviceproviders.com/api/send_http.php";
			
			// Prepare message
			$message = urlencode("$otp is the OTP for your Health account. NEVER SHARE YOUR OTP WITH ANYONE. - IMG GLOBAL");

			// Prepare API parameters
			$params = [
				'authkey'  => '718d1067e29c468eb61abf38d1f402cd',
				'mobiles'  => $mobile,
				'message'  => $message,
				'sender'   => 'FANAUC',
				'route'    => 'B',
			];

			// Send SMS via API using cURL
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $apiUrl . '?' . http_build_query($params));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);

			// Check if SMS sent successfully
			if ($response) {
				return true;
			}
		}

		return false;
	}


	public static function dateFormat($datetime){
		$dateTime = date('d-M-Y h:i A', strtotime($datetime));
		return $dateTime;
	}

	public static function generateTransactionHash($txnid, $amount, $productinfo, $firstname, $email)
	{
		$key = env('PAYU_MERCHANT_KEY');
		$salt = env('PAYU_MERCHANT_SALT');
		$hashString = $key . '|' . $txnid . '|' . $amount . '|' . $productinfo . '|' . $firstname . '|' . $email . '|||||||||||' . $salt;

		// Generate hash using SHA-512
		$hash = hash('sha512', $hashString);

		return $hash;
	}

	public static function generateTxnId()
	{
		$timestamp = time(); // Current timestamp
		$randomString = (bin2hex(random_bytes(4))); // Random 8 character string
		$txnid = 'txn_' . $timestamp . $randomString;
		return $txnid;
	}

	public static function calculateProductDetails($unserializedData){
		// Calculate subtotal
		$subtotal = 0;
		$mrpTotal = 0;

		foreach ($unserializedData['product'] as $item) {
			$product = $item;
			$mrpTotal += ($product['price'] * $product['quan']) * 10/100;
			$subtotal += $product['price'] * $product['quan'];
		}

		// Additional variables
		$discount = $unserializedData['total_discount'] ?? 0; // Assuming a 10% discount
		$cartValue = $subtotal - $discount;
		$shippingCharge = $unserializedData['ship_charge'] ?? 0; // Default to 0 if not set
		$estimatedTotal = $cartValue + $shippingCharge;
		$paid_amount = $estimatedTotal;
		$savings = $subtotal - $cartValue;

		return [
			'sub_total' => $subtotal,
			'mrp_total' => $mrpTotal,
			'discount' => $discount,
			'cart_value' => $cartValue,
			'shipping_charge' => $shippingCharge,
			'estimated_total' => $paid_amount,
			'paid_amount' => $paid_amount,
			'savings' => $savings,
		];
	}

	public static function updateOrderSummary($productDetails){
		$subTotal = 0;
		$discount = 0;
		$shipping = 0;
		$cartValue = 0;
		$shippingCharge = 0;
		$estimatedTotal = 0;
		$savings = 0;

		foreach ($productDetails['product'] as $cart) {
			$sellingPrice = \App\Helpers\commonHelper::calculateDiscountAmount($cart['price'], $cart['offer'], $cart['offer_value'], $cart['offer_date']);
			$subTotal += $sellingPrice * $cart['quan'];
			$discountAmount = ($cart['price'] * $cart['quan']) - ($sellingPrice * $cart['quan']);
			$discount += $discountAmount;
		}

		if ($subTotal < 700) {
			$shipping = 45;
		}
		
		$cartValue = $subTotal - $discount;
		$estimatedTotal = $cartValue + $shippingCharge;
		$savings = $subTotal - $cartValue;


		// Data structure as per the format
		$productDetails['sub_total'] = $subTotal;
		$productDetails['ship_charge'] = $shipping;
		$productDetails['cart_value'] = $cartValue;
		$productDetails['total_discount'] = $discount;
		$productDetails['estimated_total'] = $estimatedTotal;
		$productDetails['savings'] = $savings;

		return $productDetails;
	}

	public static function sendOtpBysms($mobile, $otp){

		$api_key = env('OTP_API_KEY');
		$sender_id = env('OTP_API_SENDER_ID');
		$api_url = env('OTP_API_URL');
		$route = env('OTP_API_ROUTE');
		$add_name = env('APP_NAME');

		
        // SMS API details
        $apiUrl = $api_url;
    
        // Encode message to prevent URL issues
        $message = urlencode("$otp is the OTP for your $add_name account. NEVER SHARE YOUR OTP WITH ANYONE. - IMG GLOBAL");
    
        // API parameters
        $params = [
            'authkey' => $api_key,
            'mobiles' => $mobile,
            'message' => $message,
            'sender'  => $sender_id,
            'route'   => $route,
        ];
    
        // Send SMS using cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl . '?' . http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

		// $sendTo = "91".$phone; 
		// $templateId = "otp_ae"; 
		// $headerValues = ["1" => "Invoice #12345"];  
		// $bodyValues = ["1" => $otp];  
		// $buttonValues = [
		// 	"1" => 'demo',
		// ]; 

		// $res = \App\Helpers\commonHelper::sendWhatsAppMessage($sendTo, $templateId, $headerValues, $bodyValues, $buttonValues);
        
        // echo "<pre>";print_r($response);die;
        // Check for API errors
        if ($error) {
            // return response()->json([
            //     'message' => 'OTP sending failed. Please try again.',
            //     'error'   => $error,
            // ], 500);

			return false;
        }

		return true;
    
	}

	public static function sendWhatsAppMessage($sendTo, $templateId, $headerValues, $bodyValues, $buttonValues) {

		$clientId = env('CLIENT_ID');  
		$clientSecret = env('CLIENT_SECRET'); 
	
		$payload = json_encode([
			"sendTo" => $sendTo,
			"channel" => "WHATSAPP",
			"templateId" => $templateId,
			"headerValues" => $headerValues,
			"bodyValues" => $bodyValues,
			"buttonValues" => $buttonValues
		]);
		
		// return $payload;
		$curl = curl_init();
	
		curl_setopt_array($curl, [
			CURLOPT_URL => 'https://marketing.otpless.app/v1/api/send',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $payload,
			CURLOPT_HTTPHEADER => [
				'Content-Type: application/json',
				'clientId: ' . $clientId,
				'clientSecret: ' . $clientSecret
			],
		]);
	
		$response = curl_exec($curl);
		curl_close($curl);
	
		return json_decode($response, true);
	}

	public static function orderHistories($orderId,$status){

		$checkExist = \App\Models\OrderHistory::where('order_id', $orderId)->where('perform_status', $status)->first();

		if(!empty($checkExist)){
			$checkExist->delete();
		}

		$orderHistory = new \App\Models\OrderHistory();
		$orderHistory->order_id = $orderId;
		$orderHistory->perform_status = $status;
		$orderHistory->date = now();
		$orderHistory->activity_performer = auth()->check() && auth()->user()->id == '1' ? "Admin":(auth()->check() && auth()->user()->retailer_id > 0 ? "Retailer" : 'User');
		$orderHistory->save();

		return true;
	}

	public static function getPayUAccessToken()
	{
		$url = env('TOKEN_URL');

		$data = [
			'grant_type'    => 'client_credentials',
			'client_id'     => env('CLIENT_ID_TOKEN'),
			'client_secret' => env('CLIENT_SECRET_TOKEN'),
			'scope'         => 'create_payment_links update_payment_links read_payment_links'
		];

		$headers = [
			'Accept: application/json',
			'Content-Type: application/x-www-form-urlencoded'
		];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if ($http_code == 200) {
			$decodedResponse = json_decode($response, true);
			return $decodedResponse['access_token'] ?? null; // सिर्फ `access_token` return करो
		} else {
			return null; // Error होने पर `null` return करो
		}
	}

	public static function createPayUPaymentLink($subAmount, $description,$transactionId)
	{
		$url = env('CREATE_PAYMNET_LINK');
		
		$merchantId = env('MERCENT_ID');
		$accessToken = self::getPayUAccessToken();

		if (!$accessToken) {
			return ['error' => 'Failed to get access token'];
		}

		$data = [
			"subAmount" => $subAmount,
			"isPartialPaymentAllowed" => false,
			"description" => $description,
			"source" => "API",
			"transactionId"=> $transactionId,
		];

		$headers = [
			'merchantId: ' . $merchantId,
			'Content-Type: application/json',
			'Authorization: Bearer ' . $accessToken
		];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if ($http_code == 200 || $http_code == 201) {
			return json_decode($response, true);
		} else {
			return ['error' => 'Failed to create payment link', 'details' => json_decode($response, true)];
		}
	}

	
}

?>