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
        return view('UserPanel.userdashboard');
    }
    public function logoutuserpanel()
    {
        Session::flush();
        Auth::guard('customer')->logout();
        return redirect()->route('userloginpage');
    }
    public function home()
    {
        if (Auth::guard('customer')->check()) {
            $services = Master::where('type', '=', 'Services')->get();
            // $consulting = Master::join('pricing_details', 'pricing_details.serviceid', '=', 'masters.id')
            //     ->select('pricing_details.price as price', 'masters.*')->where('type', '=', 'Consulting')->get();
            return view('UserPanel.home', compact('services'));
        } else {
            return view('auth.UserPanel.login');
        }
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
            $bookeddata = BookDelivery::orderby('created_at','DESC')->where('userid',$loggedinuser->id)->get();
            // dd( $bookeddata);
            return view('UserPanel.bookdeliverypro',compact('bookeddata'));
        } else {
            return view('auth.UserPanel.login');
        }
    }
    public function bookdeliveryform()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $productdata = PreetiZinta::where('userid',$loggedinuser->id)->get();
            return view('UserPanel.bookdelivery',compact('productdata'));
        } else {
            return view('auth.UserPanel.login');
        }
    }
    public function getproducts($id)
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $productdata = PreetiZinta::where('id',$id)->where('userid',$loggedinuser->id)->get();
            return response()->json($productdata);
        } else {
            return view('auth.UserPanel.login');
        }
    }
}
