<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable=[

      'title',
      'des',
      'img',
      'viewno',
      'like',
      'commentid',
      'usreid',
      'status',
    ];
}
