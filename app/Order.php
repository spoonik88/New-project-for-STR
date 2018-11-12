<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable=['body', 'username', 'email', 'phone', 'user_id', 'status', 'payment', 'delivery'];
}
