<?php

namespace App;
use App\product;
use Illuminate\Database\Eloquent\Model;

class orderdetails extends Model
{

  public function product(){
    return $this->belongsTo(product::class);
  }
}
