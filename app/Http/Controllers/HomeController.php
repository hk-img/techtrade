<?php

namespace App\Http\Controllers;

use App\Helpers\commonHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{

    public function index(){

        return view('frontend.index');
    }
    
    public function kmp(){

        return view('frontend.kmp');
    }
    
    public function about(){

        return view('frontend.about');
    }
    
    public function investorCharter(){

        return view('frontend.investor');
    }
    
    public function branchLocator(){

        return view('frontend.branch-locator');
    }
    
    public function grievance(){

        return view('frontend.investor-grievance');
    }
    
    public function careers(Request $request)
    {
        if ($request->ajax()) {
            $request->validate([
                'fullName' => 'required|string|max:255',
                'email' => 'required|email',
                'mobile' => 'required',
                'qualification' => 'required',
                'experience' => 'required',
                // 'message' => 'required',
                'resumeCareer' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120', // 5MB max
            ]);

            $data = [
                'name' => ucfirst($request->fullName),
                'email' => $request->email,
                'mobile' => $request->mobile,
                'qualification' => $request->qualification,
                'experience' => $request->experience,
            ];

            $subject = 'Career Form Submission';

            $attachmentPath = null;
            $attachmentName = null;

            if ($request->hasFile('resumeCareer')) {
                $file = $request->file('resumeCareer');

                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension() ?: 'bin';
                $attachmentName = Str::random(10) . '_' . $originalName . '.' . $extension;

                $destinationPath = public_path('careers');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true);
                }

                $file->move($destinationPath, $attachmentName);

                $attachmentPath = $destinationPath . '/' . $attachmentName;

                $data['resumeCareer'] = 'careers/' . $attachmentName;
            }

            // Save to database
            \App\Models\Carrier::create($data);

            // Send mail with attachment
            Mail::send('emails.career-form', ['data' => $data], function ($mail) use ($subject, $attachmentPath, $attachmentName) {
                $mail->to('hr@techtrade.in')
                    ->subject($subject);

                if ($attachmentPath && file_exists($attachmentPath)) {
                    $mime = mime_content_type($attachmentPath) ?? 'application/octet-stream';

                    $mail->attach($attachmentPath, [
                        'as' => $attachmentName,
                        'mime' => $mime,
                    ]);
                }
            });

            return response()->json([
                'success' => true,
                'message' => 'Your application has been submitted successfully.',
            ]);
        }

        return view('frontend.careers');
    }
    
    public function contact(Request $request){

        if ($request->ajax()) {
            // Validate the input
            $validator = \Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'mobile' => 'required|digits:10',
                'email' => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|max:1000',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors(),
                ], 422);
            }
    
            // Save contact form submission to the database
            $contact = new \App\Models\Contact();
            $contact->name = $request->name;
            $contact->mobile = $request->mobile;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();
    
            // Prepare email content
            $name = ucfirst($contact->name); // Capitalizing the first letter of the name
            $email = $contact->email;
            $mobile = $contact->mobile;
            $subjectform = $contact->subject;
            $message = $contact->message;
            $subject = 'Contact Form Submission';
    
            // HTML Email Body
            $emailBody = "<h3>New Contact Form Submission</h3>
                        <p><strong>Full Name:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Mobile:</strong> $mobile</p>
                        <p><strong>Subject:</strong> $subjectform</p>
                        <p><strong>Message:</strong> $message</p>";
    
            // Send email using the HTML content
            Mail::html($emailBody, function ($mail) use ($subject) {
                $mail->to('hr@techtrade.in')
                     ->subject($subject);
            });
    
            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!',
            ], 200);
        }

        $info = \App\Models\Information::first();

        return view('frontend.contact',compact('info'));
    }
    
    public function dematAccount(Request $request){

        if ($request->ajax()) {
            // Validate the input
            $validator = \Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'mobile' => 'required|digits:10',
                'email' => 'required|email',
                'city' => 'required|string',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors(),
                ], 422);
            }
    
            // Save contact form submission to the database
            $contact = new \App\Models\DematAccount;
            $contact->name = $request->name;
            $contact->mobile = $request->mobile;
            $contact->email = $request->email;
            $contact->city = $request->city;
            $contact->save();
    
            // Prepare email content
            $name = ucfirst($contact->name); // Capitalizing the first letter of the name
            $email = $contact->email;
            $mobile = $contact->mobile;
            $city = $contact->city;
            $subject = 'Contact Form Submission';
    
            // HTML Email Body
            $emailBody = "<h3>New Contact Form Submission</h3>
                        <p><strong>Full Name:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Mobile:</strong> $mobile</p>
                        <p><strong>City:</strong> $city</p>";
    
            // Send email using the HTML content
            Mail::html($emailBody, function ($mail) use ($subject) {
                $mail->to('hr@techtrade.in')
                     ->subject($subject);
            });
    
            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!',
            ], 200);
        }
    }
    
    public function product(){

        return view('frontend.product');
    }
    
    public function fundTransfer(){

        return view('frontend.funds');
    }
    
    public function freezeUnfreeze(){

        return view('frontend.freeze-unfreeze');
    } 
    
    public function accountOpening(){

        return view('frontend.account');
    } 
    
    public function downloads(){

        $downloads = \App\Models\Category::with('children')
        ->whereNull('parent_id')
        ->where('status', '1')
        ->get();

        return view('frontend.downloads',compact('downloads'));
    }
    
    public function holidayCalender()
    {
        $holidays = \App\Models\Holiday::where('status', '1')
                                        ->get(['date', 'holiday_type', 'holiday','exchanges','weak_day']); // Only select necessary columns

        $groupedHolidays = $holidays->groupBy(function ($holiday) {
            return $holiday->holiday_type . '-' . \Carbon\Carbon::parse($holiday->holiday_date)->year;
        });

        $formattedGroupedHolidays = $groupedHolidays->map(function ($holidays, $key) {
            list($type, $year) = explode('-', $key);

            return [
                'type' => $type,
                'year' => $year,
                'holidays' => $holidays,
            ];
        });

        return view('frontend.holiday-calender', compact('formattedGroupedHolidays'));
    }

    
    public function fitAndProper(){

        return view('frontend.fit-and-proper');
    }


}