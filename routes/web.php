<?php

use App\Http\Controllers\Admin\LabTestController;
use Illuminate\Support\Facades\Route;
use Psy\VersionUpdater\Downloader;
use App\Http\Controllers\PayUMoneyController;
use App\Http\Controllers\HomeController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use \App\Models\Product;
use \App\Models\Category;
use \App\Models\Brand;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	// Route::get('test', "MyController@test");

	// Route::fallback(function () {
	// 	if (request()->isMethod('post')) {
	// 		return redirect('/'); // Redirect to home instead of showing an error
	// 	}
	// 	return response()->view('frontend.404', [], 404);
	// });

	// Route::get('/not-found', function () {
	// 	return view('frontend.404');
	// });

	//Home
	Route::get('/', "HomeController@index")->name('home');
	Route::match(['get','post'],'/contact-us', "HomeController@contact")->name('contact');
	Route::match(['get','post'],'/careers', "HomeController@careers")->name('careers');
	Route::get('/about', "HomeController@about")->name('about');
	Route::get('/investor-charter', "HomeController@investorCharter")->name('investorCharter');
	Route::get('/product', "HomeController@product")->name('product');
	Route::get('/funds-transfer', "HomeController@fundTransfer")->name('fundTransfer');
	Route::get('/freeze-unfreeze-trading-account', "HomeController@freezeUnfreeze")->name('freezeUnfreeze');
	Route::get('/account-opening-process', "HomeController@accountOpening")->name('accountOpening');
	Route::get('/downloads', [HomeController::class, 'downloads'])->name('downloads');
	Route::get('/holiday-calendar', "HomeController@holidayCalender")->name('holidayCalender');
	Route::get('/fit-and-proper-declaration', "HomeController@fitAndProper")->name('fitAndProper');
	Route::get('/investor-grievance', "HomeController@grievance")->name('grievance');
	Route::get('/branch-locator', "HomeController@branchLocator")->name('branchLocator');
	Route::get('/kmp', "HomeController@kmp")->name('kmp');
	Route::post('/open-demat-account', "HomeController@dematAccount")->name('dematAccount');
	
	// Route::get('/', "Auth\LoginController@showLoginForm");
	
	//User login & register
	
	Route::match(['get','post'],'forget-password', 'Auth\RegisterController@forgetPassword')->name('forgetPassword');
	Route::any('new-password/{mobile}',"Auth\RegisterController@newPassword")->name('newPassword');
	
	Route::get('admin/login', 'Auth\LoginController@showLoginForm');
	Route::post('admin/login', 'Auth\LoginController@adminlogin')->name('adminlogin'); 

	Route::get('/login',function(){
		return redirect('admin/login');
	})->name('login');

	//Reset Password

	Route::get('reset', 'Auth\ResetPasswordController@showresetform')->name('reset'); 
	Route::post('reset', 'Auth\ResetPasswordController@sendresetlink')->name('sendresetlink'); 
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@resetpasswordform')->name('reset.password.form'); 
	Route::post('password/reset', 'Auth\ResetPasswordController@resetpassword')->name('reset.password'); 

	Route::match(['get','post'],'/change-password', 'Admin\AdminController@changePassword')->name('changepassword');
	
	// admin routes
	Route::group(['prefix'=>'admin','as'=>'admin','middleware'=>['auth','checkadmin'],'as'=>'admin.'],function() {
		Route::match(['get','post'],'/admin-logout','Auth\LoginController@logout')->name('adminlogout');
		Route::match(['get','post'],'/dashboard', 'Admin\DashboardController@index');
		
		//category
		Route::group(['prefix'=>'resources/download/category'],function() {
			Route::match(['get','post'],'add', 'Admin\CategoryController@add')->name('category.add');
			Route::get('/list', 'Admin\CategoryController@categoryList');
			Route::get('category-update/{id}','Admin\CategoryController@updatecategory');
			Route::get('category-delete/{id}','Admin\CategoryController@deletecategory');
			Route::post('change-status','Admin\CategoryController@changeStatus')->name('category.changestatus');

		});
		
		
		//category
		Route::group(['prefix'=>'resources/holiday'],function() {
			Route::match(['get','post'],'add', 'Admin\HolidayController@add')->name('holiday.add');
			Route::get('/list', 'Admin\HolidayController@holidayList');
			Route::get('holiday-update/{id}','Admin\HolidayController@updateHoliday');
			Route::get('holiday-delete/{id}','Admin\HolidayController@deleteHoliday');
			Route::post('change-status','Admin\HolidayController@changeStatus')->name('holiday.changestatus');

		});
		
		//Important links
		Route::group(['prefix'=>'important-links'],function() {
			Route::match(['get','post'],'add', 'Admin\LinkController@add')->name('link.add');
			Route::get('/', 'Admin\LinkController@linkList');
			Route::get('link-update/{id}','Admin\LinkController@updatelink');
			Route::get('link-delete/{id}','Admin\LinkController@deleteLink');
			Route::post('change-status','Admin\LinkController@changeStatus')->name('link.changestatus');

		});

		Route::match(['get','post'],'information/contact-info', 'Admin\InformationController@contactInfo')->name('contact-info');
		Route::match(['get','post'],'/contact', 'Admin\InformationController@contact')->name('contact-list');
		Route::match(['get','post'],'/carrier', 'Admin\InformationController@carrier')->name('carrier-list');

	});


Route::match(['get','post'],'users/logout','Auth\LoginController@logout')->name('logouts')->middleware('auth') ;

