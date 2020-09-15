<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Easywith;

class EasywithController extends Controller
{
     public function easypaisatransaction()
    {

     $getalladmin = Easywith::where('id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(10);
      return view('easypaisatransaction', ['getalladmin' => $getalladmin]);
      
    }
    
}
