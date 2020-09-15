<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jazzwith;


class JazzwithController extends Controller
{
	 public function jazzcashtransaction()
    {

     $getalladmin = Jazzwith::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(10);
      return view('jazzcashtransaction', ['getalladmin' => $getalladmin]);
      
    }



}
