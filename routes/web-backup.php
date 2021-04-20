<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebformController;
use App\Http\Controllers\LandingOrdersController;
use App\Http\Controllers\DropshippingOrderController;
use App\Http\Controllers\ClientServicesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdditionalfeatureController;
use App\Http\Controllers\IncludeonpageController;
use App\Http\Controllers\PagetypeController;
use App\Http\Controllers\DropshippingController;
use App\Http\Controllers\AddonsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/website-page', function () {
    return view('website-page');
});
Route::get('/dropshipping-page', function () {
    return view('dropshipping-page');
});
Route::get('/landingpage-page', function () {
    return view('landingpage-page');
});
Route::get('/mobileapp-page', function () {
    return view('mobileapp-page');
});
Route::get('/webapp-page', function () {
    return view('webapp-page');
});
Route::get('/terms-page', function () {
    return view('terms-page');
});
Route::get('/privacy-page', function () {
    return view('privacy-page');
});


Auth::routes();

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/auth/redirect/{provider}',[SocialController::class,'redirect']);
Route::get('/callback/{provider}', [SocialController::class,'callback']);
Route::get('/registerSocial', [SocialController::class,'registerSocial']);
Route::post('/completeSocial', [SocialController::class,'completeSocial'])->name('completeSocial');
Route::get('password/reset/email', [MailController::class,'sendForgotPassword']);
// Route::get('password/reset/{id}', [MailController::class,'sendForgotPassword']);
Route::post('/mobileapp/store',[WebformController::class,'storemobileapp']);
Route::post('/webapp/store',[WebformController::class,'storewebapp']);

Route::get('/web-form', [WebformController::class, 'index']);
Route::get('/landing-form', [LandingOrdersController::class, 'index']);
Route::get('/dropshipping-form', [DropshippingOrderController::class, 'index'])->name('dropshippingform');
Route::get('/packages', [PackagesController::class, 'index']);
Route::get('/order-details/{id}', [OrderdetailsController::class, 'show']);
Route::post('/promo', [OrderdetailsController::class, 'getAllOrderPromoCode']);
Route::get('/client-portal', [ClientServicesController::class, 'index'])->name('client.portal');
Route::post('/client-portal/addons/store', [ClientServicesController::class, 'addonsorderStore']);
Route::post('/webform/store', [WebformController::class, 'store']);
Route::post('/dropshipping/store', [DropshippingOrderController::class, 'store']);
Route::post('/landing-form/store', [LandingOrdersController::class, 'store']);

Route::post('/payment/create', [StripeController::class, 'create']);
Route::post('/payment/update', [StripeController::class, 'update']);
Route::put('/userdetail/update/{id}', [ClientServicesController::class, 'updateuserinfo']);
Route::get('/download/{id}',[App\Http\Controllers\AdminController::class,'download']);
Route::get('/delivery/{id}',[App\Http\Controllers\AdminController::class,'delivery']);
Route::get('/receipt/{id}',[App\Http\Controllers\AdminController::class,'receipt']);

Route::get('/downloads/{id}',[App\Http\Controllers\AdminController::class,'downloads']);

Route::group([

    'middleware' => 'role:ROLE_ADMIN', 
    'prefix' => 'admin'

], function ($router) {
    
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/pages', [AdditionalfeatureController::class, 'showfeatures']);
    #Route::get('/users', [AdminController::class, 'showusers']);
    Route::get('/users', [AdminController::class, 'showusers'])->name('users.showusers');
    Route::post('/pages/feature', [AdditionalfeatureController::class, 'storefeature']);
    Route::get('/pages/feature/delete/{id}', [AdditionalfeatureController::class, 'destroy']);
    Route::get('/orders', [App\Http\Controllers\AdminController::class, 'showorders'])->name('orders.showorders');
    Route::get('/messages', [App\Http\Controllers\AdminController::class, 'showmessages'])->name('messages.show');
    Route::get('/custom-order', [App\Http\Controllers\AdminController::class, 'showcustomorder'])->name('customorders.show');
    // Route::get('/orders/latest', [App\Http\Controllers\AdminController::class, 'showorders']);
    // Route::get('/orders/oldest', [App\Http\Controllers\AdminController::class, 'showorders'])->name('oldest');
    Route::get('/orders/{id}', [App\Http\Controllers\AdminController::class, 'orderdetails']);
    Route::post('/messages/store', [App\Http\Controllers\AdminController::class, 'storemessages'])->name('messages.store');
    Route::get('/messages/remove/{id}', [App\Http\Controllers\AdminController::class, 'removemessages'])->name('messages.remove');
    Route::post('/custom-order/store', [App\Http\Controllers\AdminController::class, 'storecustomorder'])->name('customorder.store');
    Route::post('/orders/{id}/edit', [App\Http\Controllers\AdminController::class, 'orderedit']);
    Route::post('/pages/include', [IncludeonpageController::class, 'storeinclude']);
    Route::get('/pages/include/delete/{id}', [IncludeonpageController::class, 'destroy']);
    Route::post('/pages/pagetype', [PagetypeController::class, 'storepagetype']);
    Route::get('/pages/pagetype/delete/{id}', [PagetypeController::class, 'destroy']);
    Route::post('/pages/addon', [AddonsController::class, 'storeaddons']);
    Route::get('/pages/addon/delete/{id}', [AddonsController::class, 'destroy']);
    Route::get('/users/latest', [AdminController::class, 'showusers'])->name('latest');
    Route::get('/users/oldest', [AdminController::class, 'showusers'])->name('oldest');
    Route::post('/pages/promocode', [AddonsController::class, 'storepromocode']);
    Route::get('/pages/promocode/delete/{id}', [AddonsController::class, 'destroypromocode']);
    Route::post('/upload/{id}',[App\Http\Controllers\AdminController::class,'upload']);
    Route::get('/download/{id}',[App\Http\Controllers\AdminController::class,'download']);



});


