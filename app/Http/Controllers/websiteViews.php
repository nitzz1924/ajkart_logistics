<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteViews extends Controller
{
    // public function userloginpage()
    public function home()
    {
        return view('website.pages.home');
    }
    public function about()
    {
        return view('website.pages.about');
    }
    public function contactus()
    {
        return view('website.pages.contactus');
    }
    public function services()
    {
        return view('website.pages.services');
    }
    public function privacypolicy()
    {
        return view('website.pages.privacypolicy');
    }
    public function termsandconditions()
    {
        return view('website.pages.termsandconditions');
    }
}
