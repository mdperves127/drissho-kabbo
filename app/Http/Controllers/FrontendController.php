<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
         return view('frontend.index');
    }
    public function application() {
        return view('frontend.application_form');
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function contactform(Request $request) {
        
        $request->validate([
            'name*' => 'required',
            'email*' => 'required',
            'phone_number' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Contact::insert($request->except('_token') + [
            'created_at' => Carbon::now()
        ]);
        return back()->with('contact_form_done', '✔️ ধন্যবাদ! আপনার ফর্মটি জমা হয়েছে।');
    }
    public function applicationform(Request $request) {
        
        $request->validate([
            'name*' => 'required',
            'number*' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'dob' => 'required',
            'education_qualification' => 'required',
            'present_address' => 'required',
            'occupation' => 'required',
            'blood_group' => 'required',
            'experience' => 'required',
            'purpose' => 'required',
        ]);
        Application::insert($request->except('_token') + [
            'created_at' => Carbon::now()
        ]);
        return back()->with('application_done', '✔️ ধন্যবাদ! আপনার আবেদন ফর্মটি জমা হয়েছে।');
    }
}
