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


class PublishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function publishBook(Request $request)
    {
        return view('frontend.publisher.publish');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();
        $ebook = new ebook;
        if ($request->file('ebook_file'))
         {
            $file = $request->file('ebook_file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->ebook_file->move('storage/', $filename);

            $ebook->ebook_file = $filename;
         }
         
             $ebook->ebook_title = $request->ebook_title;
             $ebook->ebook_category = $request->ebook_category;
             $ebook->ebook_type = $request->ebook_type;
             $ebook->ebook_downloadable = $request->ebook_downloadable;
             $ebook->ebook_price = $request->ebook_price;
             $ebook->short_desc = $request->short_desc;
             $ebook->publisher_id = Auth::user()->id;
             $ebook->ebook_published_date = $date;
             $ebook->ebook_status = 0;

             if ($request->hasfile('ebook_image'))
            {
                 $file = $request->file('ebook_image');
                 $extension = $file->getClientOriginalExtension();
                 $filename = time().'.'.$extension;
                 $file->move('storage', $filename);
                 $ebook->ebook_image = $filename;
             } else{
                return $request;
                $ebook->ebook_image = '';
             }
             
             $ebook->save();

             Alert::success('Book Has Been Added To Cart', 'Success!');
            return redirect('publisher');
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
