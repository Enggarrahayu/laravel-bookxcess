<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\publisher;
use Auth;

class LoginController extends Controller
{
     public function getLogin()
	  {
	    return view('/frontend/login-index');
	  }


	   public function postlogin(Request $request)
	    {
	      // echo "$request->email.$request->password "; die;
	    	if(Auth::attempt($request->only('email','password'))){
	            $akun = DB::table('users')->where('email', $request->email)->first();
	            //dd($akun);
	            if($akun->role =='customer'){
	                Auth::guard('customer')->LoginUsingId($akun->id);
	                return redirect('/frontend/customer');
	            } else if($akun->role =='publisher'){
	                Auth::guard('publisher')->LoginUsingId($akun->id);
	                return redirect('/frontend/publisher');
	            }
	    	}
	    	return redirect('/frontend/index-login')->with('error','Akun Belum Terdaftar');
	    }
}
