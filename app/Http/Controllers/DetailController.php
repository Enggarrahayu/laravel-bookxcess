<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ebookModel;

class DetailController extends Controller
{
    public function index($id)
     {
    		// DB::table('tb_ebook')->where('ebook_ID',$id)->delete();
    		$ebook = ebookModel::where('ebook_ID', $id)->first();
	  		return view('frontend.customer.detail', compact('ebook'));
     
    }
}
