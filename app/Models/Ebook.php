<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
     protected $table = 'tb_ebook';
     protected $primaryKey = "id";
     protected $fillable = [
        'ebook_title', 'ebook_category', 'ebook_price','ebook_type','ebook_file','ebook_image','short_desc','ebook_downloadable'
    ];

    public function orderdetail()
    {
    	return $this->hasMany(OrderDetail::class);
    }

    public function publisher()
    {
    	return $this->belongsTo(publisher::class);
    }

}
