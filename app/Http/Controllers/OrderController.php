<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ebookModel;
use App\Models\Order;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\OrderDetail;
use Auth;

class OrderController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function order(Request $request, $id)
	{
		$ebook = ebookModel::where('ebook_ID', $id)->first();
		$date = Carbon::now();

		//save to tb_order
		$order = new Order;
		$order->user_id = Auth::user()->id;
		$order->order_date = $date;
		$order->status = 0;
		$order->qty = $request->qty;
		$order->total_price = $ebook->ebook_price*$request->qty;
		$order->save();

		//save to tb_order_detail
		$new_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();

		$order_detail = new OrderDetail;
		$order_detail->ebook_ID = $ebook->ebook_ID;
		$order_detail->order_id = $new_order->order_ID;
		$order_detail->qty = $request->qty;
		$order_detail->total_price = $ebook->ebook_price*$request->qty;
		$order_detail->save();

		 Alert::success('Book Has Been Added To Cart', 'Success!');
		return redirect('customer');
	}

  	
}
