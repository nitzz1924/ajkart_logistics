<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
class DeliveryViews extends Controller
{
    public function deliverydashboard()
    {
        if (Auth::guard('delivery')->check()) {

            return view('DeliveryBoyPanel.dashboard');
        }else {
            return view('auth.DeliveryPanel.login');
        }
    }

    public function deliverylogin(){
        return view('auth.DeliveryPanel.login');
    }

    public function logoutdeliverypanel()
    {
        Session::flush();
        Auth::guard('delivery')->logout();
        return redirect()->route('deliverylogin');
    }
}
