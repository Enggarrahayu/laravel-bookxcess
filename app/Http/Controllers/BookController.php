<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\ebookModel;
use Redirect; //untuk redirect


class BookController extends Controller
{
    public function index()
    {
    	$data_ebook = ebookModel::all();
    	return view('frontend.login-index',['data_ebook' => $data_ebook]);
    }
}
