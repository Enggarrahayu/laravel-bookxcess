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

class OrderController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function order(Request $request, $id)
	{
		
		$ebook = Ebook::where('id', $id)->first();
		$date = Carbon::now();

		//save to tb_order_detail
		$cek_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
		if (empty($cek_order)) {
			//save to tb_order
			$order = new Order;
			$order->user_id = Auth::user()->id;
			$order->order_date = $date;
			$order->status = 0;
			// $order->qty = $request->qty;
			$order->total_price = 0;
			$order->code = mt_rand(100, 999);
			$order->save();
		} 

		$new_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
		$cek_order_detail = OrderDetail::where('ebook_id',$ebook->id)->where('order_id', $new_order->id)->first();
		if (empty($cek_order_detail)) {
			
			$order_detail = new OrderDetail;
			$order_detail->ebook_id = $ebook->id;
			$order_detail->order_id = $new_order->id;
			// $order_detail->qty = $request->qty;
			$order_detail->total_price = $ebook->ebook_price;
			$order_detail->save();
		}else
		 {
		 	
		 	 Alert::error('Book Already Existed in Cart', 'Failed!');	
		 	 return redirect('customer');
		 }

		 	$order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
	    	$order->total_price = $order->total_price+$ebook->ebook_price;
	    	$order->update();
			Alert::success('Book Has Been Added To Cart', 'Success!');
			return redirect('customer');
		
	}

	public function checkout()
	{
		$order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
		$order_details = [];
			if (!empty($order)) 
			{
				$order_details = OrderDetail::where('order_id', $order->id)->get();
			}

		return view('frontend.customer.cart', compact('order','order_details'));
	}

	public function confirmation()
    {
        $user = User::where('id', Auth::user()->id)->first();

        $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
        $order_id = $order->id;
        $order->status = 1;
        $order->update();

        $order_details = OrderDetail::where('order_id', $order_id)->get();
        foreach ($order_details as $order_detail) {
            $ebook = Ebook::where('id', $order_detail->ebook_id)->first();
            $ebook->update();
        }

        Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$order_id);
    }

  	
}
