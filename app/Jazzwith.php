<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jazzwith extends Model
{
    protected $fillable = ['user_id', 'name', 'phone_number','email','amount'];
}
