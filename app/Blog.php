<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['artname', 'title', 'shortdec','dec','qoute','imqge'];
}
