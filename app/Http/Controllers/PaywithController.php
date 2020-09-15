<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paywith;

class PaywithController extends Controller
{
     public function payoneertransaction()
    {

     $getalladmin = Paywith::where('id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(10);
      return view('payoneertransaction', ['getalladmin' => $getalladmin]);
      
    }
}
