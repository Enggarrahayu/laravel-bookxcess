<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = "tb_customer";

    protected $primaryKey = "cust_ID";

    protected $fillable = [
        'cust_first_name', 'cust_last_name', 'cust_address','cust_phone_number','cust_email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
