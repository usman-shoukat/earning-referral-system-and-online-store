<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Productorder extends Model
{
     protected $fillable = ['fname', 'lname', 'number','email','add1','add2','city','zip'];

    public function user()
    {
        return $this->belongsTo(Bag::class , 'user_id','user_id');
    }
     
}
