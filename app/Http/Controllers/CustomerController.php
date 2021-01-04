<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Ebook;
use Redirect;

class CustomerController extends Controller
{
   	public function index()
	  {
	   		$data_ebook = Ebook::paginate(4);
    		return view('frontend.customer.indextry',['data_ebook' => $data_ebook]);
	  }

	  public function showAll()
	  {
	  		$data_ebook = Ebook::all();
    		return view('frontend.customer.indextry',['data_ebook' => $data_ebook]);
	  }


}
