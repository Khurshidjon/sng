<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function leaveApplication()
    {
        $countries = Country::all();
        return view('frontend.application', [
            'countries' => $countries
        ]);
    }

    public function aboutForum()
    {
        $countries = Country::all();
        return view('frontend.about');
    }

    public function createApplication(Request $request)
    {
        return redirect()->back();
    }

    public function becomePartners(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha'
        ]);
        return redirect()->back();
    }

    public function aboutPartners()
    {
        $countries = Country::all();
        return view('frontend.partners', [
            'countries' => $countries
        ]);
    }
}
