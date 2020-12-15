<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'tb_order_detail';
    protected $primaryKey = "id";

    public function ebook()
    {
    	return $this->belongsTo(Ebook::class);
    }

    public function order()
    {
    	return $this->belongsTo(Order::class);
    }

}
