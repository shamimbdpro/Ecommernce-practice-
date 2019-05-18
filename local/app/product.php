<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;
class product extends Model
{
   
   public function category(){
	   return $this->belongsTo(category::class);
	  
   }
}
