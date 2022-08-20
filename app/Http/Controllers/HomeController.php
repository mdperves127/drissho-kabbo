<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.home.index');
    }
    public function application() {
        return view('backend.application.index', [
            'applications' => Application::latest()->get(),
        ]);
    }
    public function applicationview($id) {
        return view('backend.application.detail', [
            'detail' => Application::find($id),
        ]);
    }
    public function applicationdelete(Request $request, $id) {
        Application::find($id)->delete();
        return back()->with('delete_application', 'Application Deleted Successfully.');
    }
    public function contact() {
        return view('backend.contact.index', [
            'contacts' => Contact::latest()->get(),
        ]);
    }
    public function contactview($id) {
        return view('backend.contact.detail', [
            'detail' => Contact::find($id),
        ]);
    }
    public function contactdelete(Request $request, $id) {
        Contact::find($id)->delete();
        return back()->with('delete_contact', 'Contact Deleted Successfully.');
    }
}
