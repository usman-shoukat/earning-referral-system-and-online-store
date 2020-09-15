<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['pro_title', 'pro_price', 'pro_cat', 'pro_dec', 'pro_img'];

    public function bag()
    {
        return $this->belongsTo(user::class, 'referrer_id', 'id');
    }

}
