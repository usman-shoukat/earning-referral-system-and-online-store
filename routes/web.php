<?php

use Illuminate\Support\Facades\Route;
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
Auth::routes();
//<---------------------simpleregistered--------------------->
Route::get('/registered', 'RegisteredController@show')->name('registered');
Route::post('/registered', 'RegisteredController@store')->name('registered.store');
Route::get('/confirmation', 'RegisteredController@confirmation')->name('confirmation');
//<---------------------simpleregistered--------------------->
//<---------------------referralregistered--------------------->
Route::get('makereferral/{ref}', 'UserController@create')->name('makereferral');
Route::post('makereferral/{ref}', 'UserController@store')->name('store');
Route::get('/confirmation', 'RegisteredController@confirmation')->name('confirmation');
//<---------------------referralregistered--------------------->
//<---------------------userroute--------------------->
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/productdetails/{id}', 'HomeController@productdetails')->name('productdetails');
Route::get('/sitereferrals', 'HomeController@sitereferrals')->name('sitereferrals');
Route::get('/wallet', 'HomeController@wallet')->name('wallet');
Route::get('/withrawapply/{jazz}', 'HomeController@jazzapply')->name('withrawapply');
Route::post('/withrawapply/{jazz}', 'HomeController@withapplysave')->name('withraw.apply');
Route::get('/blog', 'BlogController@create')->name('blog');
Route::get('/viewmore/{id}', 'BlogController@viewmore')->name('viewmore');
Route::get('/jazzcashtransaction', 'JazzwithController@jazzcashtransaction')->name('jazzcashtransaction');
Route::get('/easypaisatransaction', 'EasywithController@easypaisatransaction')->name('easypaisatransaction');
Route::get('/skrilltransaction', 'SkrillwithController@skrilltransaction')->name('skrilltransaction');
Route::get('/payoneertransaction', 'PaywithController@payoneertransaction')->name('payoneertransaction');
Route::get('/bag/{id}', 'BagController@store')->name('add.bag');
Route::get('/dtbag/{id}', 'BagController@cart')->name('add.tobag');
Route::get('/cart', 'BagController@cartproduct')->name('cartproduct');
Route::post('/updatecart/{id}', 'BagController@updatecart')->name('updatecart');
Route::get('/delcart/{id}', 'BagController@delcart')->name('delcart');
Route::get('/order', 'ProductorderController@weborder')->name('order.get');
Route::get('/checkout', 'BagController@checkout')->name('checkout');
Route::post('/checkout', 'ProductorderController@store')->name('checkout.save');

//<---------------------userroute--------------------->
//<---------------------Adminroute--------------------->
Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\LoginAdminController@showLoginForm')->name('adminloginshow');
    Route::post('/login', 'Auth\LoginAdminController@login')->name('admin.login');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
});
Route::post('admin/dashboard', 'AdminController@makeadmin')->name('makeadmin.store');
Route::get('/update/{id}', 'AdminController@update')->name('update');
Route::post('updateprofile/{id}', 'AdminController@updateadmin')->name('admin.update');
Route::get('/jazzcashusers', 'AdminController@jazzcashusers')->name('jazzcashusers');
Route::get('/appjazzcash/{id}', 'AdminhomeController@appjazzcash')->name('appjazzcash');
Route::get('/rejectjazzcash/{id}', 'AdminhomeController@rejectjazzcash')->name('rejectjazzcash');
Route::get('/easypaisauser', 'AdminController@paisausers')->name('easypaisauser');
Route::get('/apppaisa/{id}', 'AdminhomeController@apppaisa')->name('apppaisa');
Route::get('/rejectpaisa/{id}', 'AdminhomeController@rejectpaisa')->name('rejectpaisa');
Route::get('/payoneeruser', 'AdminController@payusers')->name('payoneeruser');
Route::get('/apppay/{id}', 'AdminhomeController@apppay')->name('apppay');
Route::get('/rejectpay/{id}', 'AdminhomeController@rejectpay')->name('rejectpay');
Route::post('/reject/{id}', 'AdminController@reject');
Route::get('/userreferrals', 'AdminhomeController@userreferrals')->name('userreferrals');
Route::get('/sreach', 'AdminhomeController@search')->name('sreach');
Route::get('/checkreferrals/{id}', 'AdminhomeController@checkreferrals')->name('checkreferrals');
Route::prefix('addproduct')->group(function (){
    Route::get('/', 'ProductController@index')->name('addproduct');
    Route::post('/', 'ProductController@store')->name('product.store');
});
Route::get('/showproduct', 'ProductController@show')->name('showproduct');
Route::get('/rejectproduct/{id}', 'ProductController@destroy')->name('rejectproduct');
Route::get('/updateproduct/{id}', 'ProductController@edit')->name('updateproduct');
Route::post('/updateproduct/{id}', 'ProductController@update')->name('product.update');
Route::get('/addmainimg', 'ImageController@addmainimg')->name('addmainimg');
Route::get('/delmainimg/{id}', 'ImageController@delmainimg')->name('delmainimg');
Route::post('/addmainimg', 'ImageController@addmainimge')->name('add.mainimg');
Route::get('/showofferimg', 'ImageController@showofferimg')->name('showofferimg');
Route::post('/offeraddmainimg', 'ImageController@offeraddmainimge')->name('offer.mainimg');
Route::get('/showjazzwith', 'AdminhomeController@showjazzwith')->name('showjazzwith');
Route::get('/appjazzwith/{id}', 'AdminhomeController@appjazzwith')->name('appjazzwith');
Route::get('/rejectjazz/{id}', 'AdminhomeController@rejectjazzwith')->name('rejectjazzwith');
Route::get('/showeasywith', 'AdminhomeController@showeasywith')->name('showeasywith');
Route::get('/appeasywith/{id}', 'AdminhomeController@appeasywith')->name('appeasywith');
Route::get('/rejecteasywith/{id}', 'AdminhomeController@rejecteasywith')->name('rejecteasywith');
Route::get('/showskrillwith', 'AdminhomeController@showskrillwith')->name('showskrillwith');
Route::get('/appskrillwith/{id}', 'AdminhomeController@appskrillwith')->name('appskrillwith');
Route::get('/rejectskrillwith/{id}', 'AdminhomeController@rejectskrillwith')->name('rejectskrillwith');
Route::get('/showpaywith', 'AdminhomeController@showpaywith')->name('showpaywith');
Route::get('/apppaywith/{id}', 'AdminhomeController@apppaywith')->name('apppaywith');
Route::get('/rejectpaywith/{id}', 'AdminhomeController@rejectpaywith')->name('rejectpaywith');
Route::get('/addblog', 'BlogController@index')->name('addblog');
Route::post('/addblog', 'BlogController@store')->name('blog.store');
Route::get('/showblog', 'BlogController@show')->name('showblog');
Route::get('/delblog/{id}', 'BlogController@delblog')->name('delblog');
Route::get('/approval/order', 'OrderController@index')->name('approvalorder');
Route::get('/rejectorder/{id}', 'OrderController@rejectorder')->name('rejectorder');
Route::get('/apporder/{id}', 'OrderController@update')->name('apporder');
//<---------------------Adminroute--------------------->

