<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Mainimage;
use App\Offerimage;
use App\UserReferral;
use App\Easywith;
use App\Jazzwith;
use App\paywith;
use App\Skrillwith;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $jazzModel;
    public $easyModel;
    public $payModel;
    public $skrillModel;

    public function __construct()
    {

        $this->jazz = new Jazzwith();
        $this->easy = new Easywith();
     
        $this->skrill = new Skrillwith();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getalladmin = Product::orderBy('id', 'DESC')->get();
        $Mainimage = Mainimage::orderBy('id', 'DESC')->first();
        $Offerimage = Offerimage::orderBy('id', 'DESC')->first();
        return view('home')->with('getalladmin', $getalladmin)->with('Mainimage', $Mainimage)->with('Offerimage', $Offerimage);
    }
    public function productdetails($id)
    {
        $Offerimage = Product::where('id',$id)->first();

        return view('productdetails')->with('Offerimage', $Offerimage);
    }

    public function sitereferrals()
    {
        $refid = auth()->user()->id;
        $getalladmin = UserReferral::with('user')->where('referred_by_id', $refid)->orderBy('id', 'DESC')->paginate(10);
        return view('sitereferrals')->with('getalladmin', $getalladmin);
    }

    public function wallet()
    {
        $refid = auth()->user()->id;
        $getallref = UserReferral::with('user')->where('referred_by_id', $refid)->count();
        $totalbusinesscount = User::where('id', $refid)->first();
        return view('wallet')->with('getallref', $getallref)
            ->with('totalbusinesscount', $totalbusinesscount);
    }

    public function jazzapply($jazz)
    {
        $jazzid = $jazz;

        return view('withdraw')->with('jazzid', $jazzid);
    }

    public function withapplysave(Request $request, $jazz)
    {
        $jazzid = $jazz;
        if ($jazzid == 'jazzcash') {
            $userData = [
                'user_id' => auth()->user()->id,
                'name' => $request['name'],
                'phone_number' => $request['phone_number'],
                'email' => $request['email'],
                'amount' => $request['amount'],

            ];
            $createdUser = $this->jazz->create($userData);

            return redirect()->route('withrawapply', ['jazz' => $jazzid])
                ->with(['success' => true, 'message' => 'Your Jazzcash Withdraw is sucessfully apply']);

        }
        if ($jazzid == 'easypaisa') {
            $userData = [
                'user_id' => auth()->user()->id,
                'name' => $request['name'],
                'phone_number' => $request['phone_number'],
                'email' => $request['email'],
                'amount' => $request['amount'],

            ];
            $createdUser = $this->easy->create($userData);

            return redirect()->route('withrawapply', ['jazz' => $jazzid])
                ->with(['success' => true, 'message' => 'Your Easypaisa Withdraw is sucessfully apply']);

        }
        if ($jazzid == 'skrill') {
            $userData = [
                'user_id' => auth()->user()->id,
                'name' => $request['name'],
                'email' => $request['email'],
                'amount' => $request['amount'],

            ];
            $createdUser = $this->skrill->create($userData);

            return redirect()->route('withrawapply', ['jazz' => $jazzid])
                ->with(['success' => true, 'message' => 'Your Skrill Withdraw is sucessfully apply']);

        }
        if ($jazzid == 'payoneer') {
               $new = new paywith();
        $new->user_id = Auth::user()->id;
        $new->name = $request['name'];
        $new->email = $request['email'];
        $new->amount = $request['amount'];
           
        $new->save();

        return redirect()->route('withrawapply', ['jazz' => $jazzid])
                ->with(['success' => true, 'message' => 'Your Payoneer Withdraw is sucessfully apply']);

        }



    }
}
