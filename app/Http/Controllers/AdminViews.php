<?php
#{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
namespace App\Http\Controllers;

use App\Models\BookDelivery;
use App\Models\DeliveryBoy;
use App\Models\FormAttribute;
use App\Models\Master;
use App\Models\PreetiZinta;
use App\Models\PricingDetail;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use App\Models\UserMaster;

use Auth;
class AdminViews extends Controller
{
    public function master()
    {
        $masterdata = Master::orderBy('created_at', 'desc')->where('type', '=', 'Master')->get();
        return view('AdminPanel.master', compact('masterdata'));
    }

    public function submaster()
    {
        $submasterdata = Master::where('type', '=', 'Master')->get();
        return view('AdminPanel.submaster', compact('submasterdata'));
    }

    public function registerdeliveryboy(){
        return view('AdminPanel.deliveryboyregister');
    }

    public function deliverylist(){
        $deliverys = DeliveryBoy::orderBy('created_at','DESC')->get();
        return view('AdminPanel.alldeliveris',compact('deliverys'));
    }

    public function userslist(){
        if(Auth::check()){
            $vendors = RegisterUser::where('verifystatus','=','1')->orderBy('created_at','DESC')->get();
            // dd($vendors);
            return view('AdminPanel.allvendors',compact('vendors'));
        }else {
            return redirect()->route('adminlogin');
        }
    }
    public function myorders($id){
        if(Auth::check()){
            $data = UserMaster::where('userid', $id)->get();
            $myproducts = PreetiZinta::where('userid','=',$id)->orderBy('created_at','DESC')->get();
            //dd($myorders);
            return view('AdminPanel.myorders',compact('myproducts','data'));
        }else {
            return redirect()->route('adminlogin');
        }
    }
    public function allorders(){
        if(Auth::check()){
            $allorders = BookDelivery::orderBy('created_at','DESC')->get();
            //dd($allorders);
            return view('AdminPanel.allorders',compact('allorders'));
        }else {
            return redirect()->route('adminlogin');
        }
    }

    public function adminorderinvoice($orderid,$userid){
        $allproductdata = BookDelivery::where('id',$orderid)->where('userid',$userid)->first();
        //dd( $allproductdata);
        return view('AdminPanel.orderinvoice',compact('allproductdata'));
    }

    public function getordersbystatus($selectedStatus){
        $allorders = BookDelivery::where('status',$selectedStatus)->get();
        return response()->json( $allorders);
    }

}
