<?php
#{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
namespace App\Http\Controllers;

use App\Models\DeliveryBoy;
use App\Models\FormAttribute;
use App\Models\Master;
use App\Models\PricingDetail;
use App\Models\RegisterUser;
use Illuminate\Http\Request;

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

}
