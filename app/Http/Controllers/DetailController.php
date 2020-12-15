<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Ebook;

class DetailController extends Controller
{
    public function index($id)
     {
    		// DB::table('tb_ebook')->where('ebook_ID',$id)->delete();
    		$ebook = Ebook::where('id', $id)->first();
	  		return view('frontend.customer.details', compact('ebook'));
     
    }
}
