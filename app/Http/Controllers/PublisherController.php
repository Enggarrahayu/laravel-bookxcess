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

	  public function acceptPayment()
	  {
			$accept  = Order::where('status', 1)->get();
			return view('frontend.publisher.acceptpay', compact('accept'));
	  }

	  public function fixPayment()
	  {
	        
        $user = User::where('id', Auth::user()->id)->first();

        $order = Order::first();
        $order_id = $order->id;
        $order->status = 2;
        $order->update();

        $order_details = OrderDetail::where('order_id', $order_id)->get();
        foreach ($order_details as $order_detail) {
            $ebook = Ebook::where('id', $order_detail->ebook_id)->first();
            $ebook->update();

	  }
	  	Alert::success('Order Status Successfully Updated', 'Success');
        return redirect('publisher');
	  		
	}
}

