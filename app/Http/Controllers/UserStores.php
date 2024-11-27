<?php
#{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
namespace App\Http\Controllers;

use App\Models\BookDelivery;
use App\Models\Campaign;
use App\Models\Contact;
use App\Models\GroupType;
use App\Models\Message;
use App\Models\RegisterCompany;
use App\Models\RegisterUser;
use App\Models\Template;
use App\Models\UserMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\PreetiZinta;
use Auth;
use Exception;
use Carbon\Carbon;
use Log;
class UserStores extends Controller
{
    public function registeruser(Request $rq)
    {
        try {
            $data = $rq->validate([
                'username' => 'required',
                'mobilenumber' => 'required',
                'email' => 'required',
            ]);

            RegisterUser::create([
                'username' => $rq->username,
                'mobilenumber' => $rq->mobilenumber,
                'email' => $rq->email,
            ]);
            return back()->with('success', 'Registration Successfull..!!!!');

        } catch (Exception $e) {
            return redirect()->route('createform')->with('error', $e->getMessage());
            //return redirect()->route('createform')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function proceedtootp(Request $rq)
    {
        $otp = rand(100000, 999999);
        try {
            $data = $rq->validate([
                'username' => 'required',
                'mobilenumber' => 'required',
                'email' => 'required',
            ]);

            $data = RegisterUser::create([
                'username' => $rq->username,
                'mobilenumber' => $rq->mobilenumber,
                'email' => $rq->email,
                'otp' => $otp,
            ]);
            return response()->json(['msg' => 'success', 'data' => ['id' => $data->id]]);

        } catch (Exception $e) {
            return response()->json(['msg' => 'failure']);
        }
    }

    public function verifyotp(Request $request)
    {
        try {
            $user = RegisterUser::find($request->registerid);
            if ($user && $user->otp == implode('', array_slice($request->all(), 1, 6))) {
                $user->verifystatus = '1';
                $user->save();
                return back()->with('success', 'Registration Successfull..!!!!');
            }
        } catch (Exception $e) {
            return redirect()->route('createform')->with('error', $e->getMessage());
        }
    }

    public function signup_user_otp(Request $request)
    {
        $credentials = $request->only('mobilenumber');
        $data = RegisterUser::where('mobilenumber', '=', $credentials)->first();
        if ($data) {
            $otp = rand(100000, 999999);
            $data->update([
                'otp' => $otp,
            ]);
            return response()->json(['msg' => 'success', 'data' => ['id' => $data->id, 'otp' => $otp]]);
        } else {
            return redirect()->route('userloginpage')->with('error', 'Invalid credentials');
        }
    }

    public function LoginOtpVerify(Request $request)
    {
        try {
            $user = RegisterUser::find($request->registerid);
            if ($user && $user->otp == implode('', array_slice($request->all(), 1, 6))) {
                // Log in the user with Auth guard for customer
                Auth::guard('customer')->login($user);
                // if (Auth::guard('customer')->check()) {
                //     dd("I am logged in");
                // }
                return redirect()->route('home');
            } else {
                // OTP does not match
                return redirect()->route('userloginpage')->with('error', 'OTP Not Verified');
            }
        } catch (Exception $e) {
            return redirect()->route('userloginpage')->with('error', $e->getMessage());
        }
    }

    public function insertinventory(Request $rq)
    {
        // dd($rq->all());
        $loggedinuser = Auth::guard('customer')->user();
        try {
            $data = $rq->validate([
                'category' => 'required',
                'subcategory' => 'required',
                'productname' => 'required',
                'price' => 'required',
                'saleprice' => 'required',
            ]);
            if ($rq->hasFile('coverimage')) {
                $rq->validate([
                    'coverimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $file = $rq->file('coverimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Services'), $filename);
            }
            $data = PreetiZinta::create([
                'userid' => $loggedinuser->id,
                'category' => $rq->category,
                'productname' => $rq->productname,
                'subcategory' => $rq->subcategory,
                'price' => $rq->price,
                'saleprice' => $rq->saleprice,
                'coverimage' => $filename,
            ]);
            //dd($data);
            return back()->with('success', 'Inventory Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('inventoryadd')->with('error', $e->getMessage());
            //return redirect()->route('inventoryadd')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deleteinventory($id)
    {
        // dd($id);
        $data = PreetiZinta::find($id);
        if (!$data) {
            return redirect()->back()->with('error', "Data not found.");
        }
        $data->delete();
        return redirect()->back()->with('success', "Deleted.!!!");
    }

    public function udpateinventory(Request $rq)
    {
        // dd($request->all());
        try {
            $pricingdata = PreetiZinta::find($rq->pricingid);
            $filename = $pricingdata->coverimage;
            if ($rq->hasFile('coverimage')) {
                $rq->validate([
                    'coverimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $rq->file('coverimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Services'), $filename);
            }
            $attributes = PreetiZinta::where('id', $rq->pricingid)->update([
                'category' => $rq->category,
                'productname' => $rq->productname,
                'subcategory' => $rq->subcategory,
                'price' => $rq->price,
                'saleprice' => $rq->saleprice,
                'coverimage' => $filename,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function createusermaster(Request $rq)
    {

        $loggedinuser = Auth::guard('customer')->user();
        // dd($loggedinuser);
        try {
            $attributes = UserMaster::create([
                'type' => $rq->type == 'Master' ? 'Master' : $rq->type,
                'label' => $rq->label,
                'userid' => $loggedinuser->id,
            ]);

            return back()->with('success', "Category Added..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function filtercategory($selectedtype)
    {
        $masterdata = UserMaster::where('type', $selectedtype)->get();
        // dd($statedata);
        return response()->json($masterdata);
    }

    public function updateusermaster(Request $request)
    {
        try {
            $carlist = UserMaster::where('id', $request->masterid)->update([
                'label' => $request->label,
                'type' => $request->type,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function deleteusermaster($id)
    {
        // dd($id);
        $data = UserMaster::find($id);
        if (!$data) {
            return redirect()->back()->with('error', "Data not found.");
        }
        $data->delete();
        return redirect()->back()->with('success', "Deleted.!!!");
    }

    public function bookingdelivery(Request $request)
    {
        //dd($request->all());
        $loggedinuser = Auth::guard('customer')->user();
        try {
            $data = BookDelivery::create([
                'userid' => $loggedinuser->id,
                'customername' => $request->customername,
                'email' => $request->email,
                'mobilebumber' => $request->mobilebumber,
                'product_data' => $request->product_data,    // this is products data in JSON
                'billingaddress' => $request->billingaddress,
                'shippingaddress' => $request->shippingaddress,
                'subtotal' => $request->subtotal,
                'totaldiscount' => $request->totaldiscount,
                'grandtotal' => $request->grandtotal,
                'status' => 'Processing',
            ]);
            //dd($data);

            return back()->with('success', "Product Booked..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function registercompany(Request $request)
    {
        $loggedinuser = Auth::guard('customer')->user();
        try {
            if ($request->hasFile('companylogo')) {
                $request->validate([
                    'companylogo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $companylogo = $request->file('companylogo');
                $filenamecompanylogo = time() . '_' . $companylogo->getClientOriginalName();
                $companylogo->move(public_path('assets/images/Services'), $filenamecompanylogo);
            }
            if ($request->hasFile('registrationimage')) {
                $request->validate([
                    'registrationimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $registrationimage = $request->file('registrationimage');
                $filenameregistrationimage = time() . '_' . $registrationimage->getClientOriginalName();
                $registrationimage->move(public_path('assets/images/Services'), $filenameregistrationimage);
            }
            if ($request->hasFile('pancardimage')) {
                $request->validate([
                    'pancardimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $pancardimage = $request->file('pancardimage');
                $filenamepancardimage = time() . '_' . $pancardimage->getClientOriginalName();
                $pancardimage->move(public_path('assets/images/Services'), $filenamepancardimage);
            }
            $data = RegisterCompany::create([
                'userid' => $loggedinuser->id,
                'companyname' => $request->companyname,
                'companylogo' => $filenamecompanylogo,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pincode' => $request->pincode,
                'contactnumber' => $request->contactnumber,
                'email' => $request->email,
                'officeaddress' => $request->officeaddress,
                'registrationimage' => $filenameregistrationimage,
                'pancardimage' => $filenamepancardimage,
            ]);
            //dd($data);

            return back()->with('success', "Company Registered..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function updateregistercompany(Request $request){
        try {
            if ($request->hasFile('companylogo')) {
                $request->validate([
                    'companylogo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $companylogo = $request->file('companylogo');
                $filenamecompanylogo = time() . '_' . $companylogo->getClientOriginalName();
                $companylogo->move(public_path('assets/images/Services'), $filenamecompanylogo);
            }
            if ($request->hasFile('registrationimage')) {
                $request->validate([
                    'registrationimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $registrationimage = $request->file('registrationimage');
                $filenameregistrationimage = time() . '_' . $registrationimage->getClientOriginalName();
                $registrationimage->move(public_path('assets/images/Services'), $filenameregistrationimage);
            }
            if ($request->hasFile('pancardimage')) {
                $request->validate([
                    'pancardimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $pancardimage = $request->file('pancardimage');
                $filenamepancardimage = time() . '_' . $pancardimage->getClientOriginalName();
                $pancardimage->move(public_path('assets/images/Services'), $filenamepancardimage);
            }
            $data = RegisterCompany::where('id', $request->recordid)->update([
                'companyname' => $request->companyname,
                'companylogo' => $filenamecompanylogo ?? RegisterCompany::find($request->recordid)->companylogo,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pincode' => $request->pincode,
                'contactnumber' => $request->contactnumber,
                'email' => $request->email,
                'officeaddress' => $request->officeaddress,
                'registrationimage' => $filenameregistrationimage ?? RegisterCompany::find($request->recordid)->registrationimage,
                'pancardimage' => $filenamepancardimage ?? RegisterCompany::find($request->recordid)->pancardimage,
            ]);

            //dd($data);

            return back()->with('success', "Details Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }
}

