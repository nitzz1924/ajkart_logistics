<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryBoy;
use Auth;
use Exception;
class DeliveryStores extends Controller
{
    public function signup_delivery_otp(Request $request)
    {
        $credentials = $request->only('mobilenumber');
        $data = DeliveryBoy::where('mobilenumber', '=', $credentials)->first();
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

    public function LoginDeliveryotp(Request $request)
    {
        try {
            $user = DeliveryBoy::find($request->registerid);
            if ($user && $user->otp == implode('', array_slice($request->all(), 1, 6))) {
                // Log in the user with Auth guard for customer
                Auth::guard('delivery')->login($user);
                // if (Auth::guard('delivery')->check()) {
                //     dd("I am logged in");
                // }
                return redirect()->route('deliverydashboard');
            } else {
                //dd("OTP Not Verified");
                // OTP does not match
                return redirect()->route('userloginpage')->with('error', 'OTP Not Verified');
            }
        } catch (Exception $e) {
            return redirect()->route('userloginpage')->with('error', $e->getMessage());
        }
    }
}
