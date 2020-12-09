<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
     protected $table = "tb_publisher";

    protected $primaryKey = "pub_ID";

    protected $fillable = [
        'pub_first_name', 'pub_last_name', 'pub_income','pub_phone_number','pub_email','pub_password','pub_address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pub_password', 'remember_token',
    ];
