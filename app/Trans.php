<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
    protected $table = "post";
    protected $fillable = ['title'];
}
