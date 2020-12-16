<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook;
use App\Models\Order;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\OrderDetail;
use App\Models\User;
use Auth;
use DB;

class PublisherController extends Controller
{
     public function index()
	  {
		    $data_ebook = Ebook::where('publisher_id', Auth::user()->id)->get();
	    	return view('frontend.publisher.index',['data_ebook' => $data_ebook]);
	  }
}
