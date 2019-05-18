<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class cart extends Model
{
   protected $fillable=[
       'product_id',
       'user_id',
       'order_id',
       'ip_address',
       'product_qty'
   ];


public function user(){
  return $this->belongsTo(user::class);
}
public function product(){
  return $this->belongsTo(product::class);
}

public function order(){
  return $this->belongsTo(order::class);
}

public static function totalitem(){
  if(Auth::check()){
    $carts=cart::where('user_id',Auth::id())->where('ip_address',request()->ip())->get();

  }else{
    $carts=cart::where('ip_address',request()->ip())->get();

  }

  $total=0;

  foreach($carts as $cart){
  $total+= $cart->product_qty;
}

  return $total;

}



}
