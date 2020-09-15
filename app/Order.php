<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = ['productorder_id', 'user_id', 'quantity', 'product_id'];

     public function user()
    {
        return $this->belongsTo(Productorder::class , 'productorder_id','id');
    }
     public function product()
    {
        return $this->belongsTo(Product::class , 'product_id','id');
    }

}
