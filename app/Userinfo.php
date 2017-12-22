<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $fillable = [
        'id', 'uname', 'email','fname','lname','gender','birthdate','address','phone','userfile','paymenttype','hname','cardnumber','cvc','expirydate','user_id','active',
    ];
}
