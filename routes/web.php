<?php
#---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏---------------------------”
use App\Http\Controllers\AdminStores;
use App\Http\Controllers\AdminViews;
use App\Http\Controllers\DeliveryStores;
use App\Http\Controllers\DeliveryViews;
use App\Http\Controllers\UserStores;
use App\Http\Controllers\UserViews;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelContactSheet;
use App\Http\Middleware\VerifyCsrfToken;


Route::get('/', function () {
    return view('auth.login');
});

Route::post('/logoutuser', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logoutuser');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('AdminPanel.dashboard');
    })->name('dashboard');
});



//Admin Panel Routes
Route::controller(AdminViews::class)->group(function () {
    Route::get('master', 'master')->name('master');
    Route::get('submaster', 'submaster')->name('submaster');
    Route::get('registerdeliveryboy', 'registerdeliveryboy')->name('registerdeliveryboy');
    Route::get('deliverylist', 'deliverylist')->name('deliverylist');

});

Route::controller(AdminStores::class)->group(function () {
    Route::post('storemaster', 'storemaster')->name('storemaster');
    Route::post('storesubmaster', 'storesubmaster')->name('storesubmaster');
    Route::get('getsubmasterajax/{selectedCat}', 'getsubmasterajax')->name('getsubmasterajax');
    Route::post('updatesubmaster', 'updatesubmaster')->name('updatesubmaster');
    Route::get('deletemaster/{id}', 'deletemaster')->name('deletemaster');
    Route::post('updatemaster', 'updatemaster')->name('updatemaster');
    Route::post('updatesubmaster', 'updatesubmaster')->name('updatesubmaster');
    Route::get('/filterservice/{selectedtype}', 'filterservice')->name('filterservice');
    Route::post('insertform', 'insertform')->name('insertform');
    Route::get('/getattributes/{servicetype}/{servicename}', 'getattributes')->name('getattributes');
    Route::get('/deleteattribute/{id}', 'deleteattribute')->name('deleteattribute');
    Route::post('updateattributes', 'updateattributes')->name('updateattributes');
    Route::post('insertpricingform', 'insertpricingform')->name('insertpricingform');
    Route::get('/deleteuser/{id}', 'deleteuser')->name('deleteuser');
    Route::post('registerboy', 'registerboy')->name('registerboy');
    Route::get('/deletedelivery/{id}', 'deletedelivery')->name('deletedelivery');
    Route::post('updatedelivery', 'updatedelivery')->name('updatedelivery');
});




//User Panel Routes
Route::controller(UserViews::class)->group(function () {
    Route::get('user/login', 'userloginpage')->name('userloginpage');
    Route::get('user/registration', 'registration')->name('registration');
    Route::get('userdashboard', 'userdashboard')->name('userdashboard');
    Route::get('logoutuserpanel', 'logoutuserpanel')->name('logoutuserpanel');
    Route::get('inventoryadd', 'inventoryadd')->name('inventoryadd');
    Route::get('usermaster', 'usermaster')->name('usermaster');
    Route::get('bookdeliverypro', 'bookdeliverypro')->name('bookdeliverypro');
    Route::get('bookdeliveryform', 'bookdeliveryform')->name('bookdeliveryform');
    Route::get('getproducts/{id}', 'getproducts')->name('getproducts');
    Route::get('companyregister', 'companyregister')->name('companyregister');
    Route::get('editorderdetails/{id}', 'editorderdetails')->name('editorderdetails');
});


Route::controller(UserStores::class)->group(function () {
    Route::post('/signup_user_otp', 'signup_user_otp')->name('signup_user_otp');
    Route::post('registeruser', 'registeruser')->name('registeruser');
    Route::post('proceedtootp', 'proceedtootp')->name('proceedtootp');
    Route::post('verifyotp', 'verifyotp')->name('verifyotp');
    Route::post('LoginOtpVerify', 'LoginOtpVerify')->name('LoginOtpVerify');
    Route::post('insertinventory', 'insertinventory')->name('insertinventory');
    Route::get('/deleteinventory/{id}', 'deleteinventory')->name('deleteinventory');
    Route::post('udpateinventory', 'udpateinventory')->name('udpateinventory');
    Route::post('createusermaster', 'createusermaster')->name('createusermaster');
    Route::get('filtercategory/{selectedtype}', 'filtercategory')->name('filtercategory');
    Route::post('updateusermaster', 'updateusermaster')->name('updateusermaster');
    Route::get('deleteusermaster/{id}', 'deleteusermaster')->name('deleteusermaster');
    Route::post('bookingdelivery', 'bookingdelivery')->name('bookingdelivery');
    Route::post('registercompany', 'registercompany')->name('registercompany');
    Route::post('updateregistercompany', 'updateregistercompany')->name('updateregistercompany');
    Route::post('updateorderdetails', 'updateorderdetails')->name('updateorderdetails');
});



//Delivery Panel Routes
Route::controller(DeliveryViews::class)->group(function () {
    Route::get('delivery/dashboard', 'deliverydashboard')->name('deliverydashboard');
    Route::get('delivery/login', 'deliverylogin')->name('deliverylogin');
    Route::get('logoutdeliverypanel', 'logoutdeliverypanel')->name('logoutdeliverypanel');


});
Route::controller(DeliveryStores::class)->group(function () {
    Route::post('/signup_delivery_otp', 'signup_delivery_otp')->name('signup_delivery_otp');
    Route::post('LoginDeliveryotp', 'LoginDeliveryotp')->name('LoginDeliveryotp');

});







// //Excel Routes
// Route::get('/import-excel', [ExcelContactSheet::class, 'index'])->name('import.excel');
// Route::post('/import-excel', [ExcelContactSheet::class, 'import']);

