<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

Route::get('/', function(){
	return view('/login');
});

Route::get('/customerhome', function() {
  return view('frontend/customer/index');
 });

Route::get('/cart', function() {
  return view('frontend/customer/cart');
});

Route::get('/aboutuscust', function() {
  return view('frontend/customer/aboutus');
 });

Route::get('/contactuscust', function() {
  return view('frontend/customer/contactuscust');
 });

Route::get('confirmation', 'App\Http\Controllers\OrderController@confirmation');
Route::get('history', 'App\Http\Controllers\HistoryController@index');
Route::get('history/{id}', 'App\Http\Controllers\HistoryController@detail');
Route::get('mycollection','App\Http\Controllers\CollectionController@index');

Route::get('download/{id}', 'App\Http\Controllers\CollectionController@download');


// publisher
Route::get('/publisherhome', function() {
  return view('frontend/publisher/index');
 });

Route::get('/aboutuspub', function() {
  return view('frontend/publisher/aboutuspub');
 });

Route::get('/contactuspub', function() {
  return view('frontend/publisher/contactuspub');
 });
Route::get('/publishs', function() {
  return view('frontend/publisher/publishs');
 });

Route::get('test', 'App\Http\Controllers\AuthController@index')->name('test');
Route::get('auth', 'App\Http\Controllers\AuthController@getLogin')->name('auth');
Route::post('auth2', 'App\Http\Controllers\AuthController@postLogin')->name('auth2');
Route::get('logout', '\App\Http\Controllers\AuthController@logout');
Route::get('/login', 'App\Http\Controllers\AuthController@getRegister')->name('register');
Route::get('/register', 'App\Http\Controllers\AuthController@getRegister')->name('register');
Route::post('/user/add','App\Http\Controllers\AuthController@postRegister')->name('user/add');
Route::get('detail/{id}', 'App\Http\Controllers\DetailController@index');
Route::get('checkout','App\Http\Controllers\OrderController@checkout');

Route::post('order/{id}','\App\Http\Controllers\OrderController@order');

// Route::get('/signin', function() {
//   return view('frontend/login-index');
//  });

Route::get('/publish','App\Http\Controllers\PublishController@publishBook');
Route::post('/upload','App\Http\Controllers\PublishController@store')->name('upload');


Route::group(['middleware' => ['auth','CheckRoles:customer']],function(){
	Route::get('/customer','App\Http\Controllers\CustomerController@index');
});

Route::group(['middleware' => ['auth','CheckRoles:publisher']],function(){
	Route::get('/publisher','App\Http\Controllers\PublisherController@index');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Firda Test

