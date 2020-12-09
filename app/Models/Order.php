<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'tb_order';
      protected $primaryKey = "order_ID";

    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_ID', 'order_ID');
    }

    public function order_detail()
    {
    	return $this->hasMany('App\Models\OrderDetail','order_ID','detail_ID');
    }
}
