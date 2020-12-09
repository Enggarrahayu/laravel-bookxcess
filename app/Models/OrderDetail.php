<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'tb_order_detail';
    protected $primaryKey = "detail_ID";

    public function ebook()
    {
    	return $this->belongsTo('App\Models\ebookModel', 'ebook_ID','detail_ID');
    }

    public function order()
    {
    	return $this->belongsTo('App\Models\Order','order_ID','detail_ID');
    }

}
