<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ebookModel extends Model
{
     protected $table = 'tb_ebook';
      protected $primaryKey = "ebook_ID";

      protected $fillable = [
        'ebook_ID', 'ebook_title', 'ebook_price','shortdesc',
    ];

    public function order_detail()
    {
    	return $this->hasMany('App\Models\OrderDetail','ebook_ID','detail_ID');
    }
}
