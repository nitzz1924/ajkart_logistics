<?php
#{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
namespace App\Http\Controllers;

use App\Models\BookDelivery;
use App\Models\Campaign;
use App\Models\Contact;
use App\Models\GroupType;
use App\Models\Message;
use App\Models\Master;
use App\Models\PreetiZinta;
use App\Models\PricingDetail;
use App\Models\RegisterCompany;
use App\Models\RegisterUser;
use App\Models\Template;
use App\Models\UserMaster;
use Illuminate\Http\Request;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Session;
use Auth;
use Carbon\Carbon;
class UserViews extends Controller
{
    public function userloginpage()
    {
        return view('auth.UserPanel.login');
    }
    public function registration()
    {
        return view('auth.UserPanel.registration');
    }
    public function userdashboard()
    {
        return view('UserPanel.dashboard');
    }
    public function logoutuserpanel()
    {
        Session::flush();
        Auth::guard('customer')->logout();
        return redirect()->route('userloginpage');
    }

    public function inventoryadd()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $data = UserMaster::where('userid', $loggedinuser->id)->get();
            $inventory = PreetiZinta::orderBy('created_at', 'Desc')->get();
            return view('UserPanel.warehouseinventory', compact('data', 'inventory'));
        } else {
            return view('auth.UserPanel.login');
        }
    }

    public function usermaster()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $data = UserMaster::where('userid', $loggedinuser->id)->get();
            return view('UserPanel.usermaster', compact('data'));
        } else {
            return view('auth.UserPanel.login');
        }
    }

    public function bookdeliverypro()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $bookeddata = BookDelivery::orderby('created_at', 'DESC')->where('userid', $loggedinuser->id)->get();
            return view('UserPanel.bookdeliverypro', compact('bookeddata'));
        } else {
            return view('auth.UserPanel.login');
        }
    }
    public function bookdeliveryform()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $productdata = PreetiZinta::where('userid', $loggedinuser->id)->get();
            return view('UserPanel.bookdelivery', compact('productdata'));
        } else {
            return view('auth.UserPanel.login');
        }
    }
    public function getproducts($id)
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $productdata = PreetiZinta::where('id', $id)->where('userid', $loggedinuser->id)->get();
            return response()->json($productdata);
        } else {
            return view('auth.UserPanel.login');
        }
    }

    public function companyregister()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $companydata = RegisterCompany::where('userid', $loggedinuser->id)->get();
            // dd(  $companydata);
            return view('UserPanel.companyregister', compact('companydata'));
        } else {
            return view('auth.UserPanel.login');
        }
    }

    public function editorderdetails($id)
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $data = BookDelivery::where('id', $id)->first();
            $allproducts = PreetiZinta::where('userid', $loggedinuser->id)->get();
            // dd($data);
            return view('UserPanel.editorder', compact('data','allproducts'));
        } else {
            return view('auth.UserPanel.login');
        }
    }
}
