<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentparent extends Model
{
    protected $fillable=['postid','name','email','text'];
}
