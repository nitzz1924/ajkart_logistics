<?php
#{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
namespace App\Http\Controllers;

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

    public function inventoryadd(){
        $loggedinuser = Auth::guard('customer')->user();
        $data = UserMaster::where('userid',$loggedinuser->id)->get();
        $inventory = PreetiZinta::orderBy('created_at','Desc')->get();
        return view('auth.UserPanel.warehouseinventory',compact('data','inventory'));
    }

    public function usermaster()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $data = UserMaster::where('userid',$loggedinuser->id)->get();
            return view('UserPanel.usermaster',compact('data'));
        } else {
            return view('auth.UserPanel.login');
        }
    }

    public function bookdeliverypro()
    {
        $loggedinuser = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            return view('UserPanel.usermaster');
        } else {
            return view('auth.UserPanel.login');
        }
    }
}
