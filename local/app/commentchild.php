<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentchild extends Model
{
    protected $fillable=['parentid','text'];
}
