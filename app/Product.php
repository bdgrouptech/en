<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id','title','description','uploadfile','thumbnail','screenshort','includedfile','demourl','tags','regprice','extprice','msg','user_id','active','updated_at','created_at',
    ];
}
