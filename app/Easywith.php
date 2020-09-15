<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Easywith extends Model
{
    protected $fillable = ['user_id', 'name', 'phone_number','email','amount'];
}
