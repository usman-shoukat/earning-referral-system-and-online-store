<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skrillwith extends Model
{
    protected $fillable = ['user_id', 'name','email','amount'];
}
