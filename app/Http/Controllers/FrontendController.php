<?php

namespace App\Http\Controllers;

use App\Country;
use App\Partner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        toastr()->success('Data has been saved successfully!');
        return view('frontend.landing-page');
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
            'captcha' => 'required|captcha',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:partners',
            'company' => 'string:255',
        ]);
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->email = $request->email;
        $partner->phone = $request->phone;
        $partner->company = $request->company;
        $partner->save();
        toastr()->success('Data has been saved successfully!');
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
