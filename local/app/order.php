<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable=[
      'product_id',
      'user_id',
      'ip_address',
      'name',
      'Phone',
      'email',
      'message',
      'shipping_address',
      'product_qty',
      'payment_type',
      'is_paid',
      'is_completed',
      'is_seen_byadmin',
    ];
}
