<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook;
use App\Models\Order;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\OrderDetail;
use App\Models\User;
use Response;
use Auth;
use DB;


class CollectionController extends Controller
{
    public function index()
    {
    	$collection = Order::where('user_id', Auth::user()->id)->where('status', 2)->first();
    	$order_details = OrderDetail::where('order_id', $collection->id)->get();

    	return view('frontend.customer.collection', compact('collection','order_details'));
    }

    public function download($id)
    {
    	$ebook = Ebook::where('id', $id)->firstOrFail();
    	$pathToFile = public_path('storage/'.$ebook->ebook_file);
    	return response()->download($pathToFile);
    }
}
