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

Route::get('/', function(){
	return view('home');
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

Route::get('test', 'App\Http\Controllers\AuthController@index')->name('test');
Route::get('auth', 'App\Http\Controllers\AuthController@getLogin')->name('auth');
Route::post('auth2', 'App\Http\Controllers\AuthController@postLogin')->name('auth2');
Route::get('logout', '\App\Http\Controllers\AuthController@logout');
Route::get('/register', 'App\Http\Controllers\AuthController@getRegister')->name('register');
Route::post('/user/add','App\Http\Controllers\AuthController@postRegister')->name('user/add');
Route::get('detail/{id}', 'App\Http\Controllers\DetailController@index');


Route::post('order/{id}','\App\Http\Controllers\OrderController@order');

// Route::get('/signin', function() {
//   return view('frontend/login-index');
//  });

Route::group(['middleware' => ['auth','CheckRoles:customer']],function(){
	Route::get('/customer','App\Http\Controllers\CustomerController@index');
});

Route::group(['middleware' => ['auth','CheckRoles:publisher']],function(){
	Route::get('/publisher','App\Http\Controllers\PublisherController@index');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Firda Test
