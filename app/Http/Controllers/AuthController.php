<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
use Redirect; //untuk redirect

class AuthController extends Controller
{
    public function index()
    {
        $data_user = User::all();
        return view('frontend.test',['data_user' => $data_user]);
    }

	public function getLogin()
    {
    	 return view('/frontend/login-index');
    }


	public function postlogin(Request $request)
	    {
	    	if (Auth::attempt($request->only('email','password'))) {
	    			return redirect('/customer');
	    	} return redirect('/auth');
	    }

	public function getRegister()
    {
    	 return view('/frontend/login-index');
    }
    
    public function postRegister(Request $request){
    	if ($request->password != $request->password) {
    		\Session::flash('error','Password is not correct!');

    		return redirect('/register');
    	}

    	$data = [
    		'name' => $request->name,
    		'email' => $request->email,
    		'role' => $request->role,
    		'password' => \Hash::make($request->password)
    	];

    	User::create($data);
    	return redirect('auth');    }

        public function logout(Request $request) {
          Auth::logout();
          return redirect('/auth');
        }
}
