<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
     protected $table = 'tb_ebook';
      protected $primaryKey = "id";

    public function orderdetail()
    {
    	return $this->hasMany(OrderDetail::class);
    }
}
