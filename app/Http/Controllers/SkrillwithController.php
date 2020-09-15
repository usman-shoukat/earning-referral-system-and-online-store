<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skrillwith;

class SkrillwithController extends Controller
{
     public function skrilltransaction()
    {

     $getalladmin = Skrillwith::where('id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(10);
      return view('skrilltransaction', ['getalladmin' => $getalladmin]);
      
    }

}
