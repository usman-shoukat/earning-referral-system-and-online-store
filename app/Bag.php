<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    protected $fillable = ['carttitle','price','pro_id', 'user_id', 'pro_quantity', 'q_pricetotal'];

    public function product()
    {
        return $this->hasMany(Productorder::class, 'user_id','user_id');
    }




}
