<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paywith extends Model
{
    protected $fillable = ['user_id', 'name','email','amount'];
}
