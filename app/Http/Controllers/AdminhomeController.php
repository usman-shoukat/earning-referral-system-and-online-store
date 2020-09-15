<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\UserReferral;
use App\Product;
use App\Easywith;
use App\Jazzwith;
use App\paywith;
use App\Skrillwith;
use Illuminate\Support\Facades\Hash;
class AdminhomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $userModel;
    public $productModel;

    public function __construct()
    {
        $this->userModel = new Admin();
        $this->productModel = new Product();
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function appjazzcash($id)
    {
        $appid = $id;
        $activeapproval = User::where('id', $appid)->update(['approval' => 1]);

        $getalljazzcashuser = UserReferral::where(['user_id' => $appid])->first();
        if ($getalljazzcashuser) {
            $refid = $getalljazzcashuser->referred_by_id;
            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->amount;
            $addbanlenc = $preamount + 0.60;
            $addbanlenc2 = User::where('id', $refid)->update(['amount' => $addbanlenc]);
            return redirect()->route('jazzcashusers');
        }
        return redirect()->route('jazzcashusers');
    }
    public function rejectjazzcash($id)
    {
        $appid = $id;
        $getalljazzcashuser = UserReferral::where(['user_id' => $appid])->first();
        if ($getalljazzcashuser) {
            $refid = $getalljazzcashuser->id;
            $addbalenceuser = UserReferral::where(['id' => $refid])->delete();
            $activeapproval = User::where('id', $appid)->delete();
            return redirect()->route('jazzcashusers');
        }
        $activeapproval = User::where('id', $appid)->delete();
        return redirect()->route('jazzcashusers');
    }

    public function apppaisa($id)
    {
        $appid = $id;
        $activeapproval = User::where('id', $appid)->update(['approval' => 1]);

        $getalljazzcashuser = UserReferral::where(['user_id' => $appid])->first();
        if ($getalljazzcashuser) {
            $refid = $getalljazzcashuser->referred_by_id;
            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->amount;
            $addbanlenc = $preamount + 0.60;
            $addbanlenc2 = User::where('id', $refid)->update(['amount' => $addbanlenc]);
            return redirect()->route('easypaisauser');
        }
        return redirect()->route('easypaisauser');
    }
    public function rejectpaisa($id)
    {
        $appid = $id;
        $getalljazzcashuser = UserReferral::where(['user_id' => $appid])->first();
        if ($getalljazzcashuser) {
            $refid = $getalljazzcashuser->id;
            $addbalenceuser = UserReferral::where(['id' => $refid])->delete();
            $activeapproval = User::where('id', $appid)->delete();
            return redirect()->route('easypaisauser');
        }
        $activeapproval = User::where('id', $appid)->delete();
        return redirect()->route('easypaisauser');
    }
    public function apppay($id)
    {
        $appid = $id;
        $activeapproval = User::where('id', $appid)->update(['approval' => 1]);

        $getalljazzcashuser = UserReferral::where(['user_id' => $appid])->first();
        if ($getalljazzcashuser) {
            $refid = $getalljazzcashuser->referred_by_id;
            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->amount;
            $addbanlenc = $preamount + 0.60;
            $addbanlenc2 = User::where('id', $refid)->update(['amount' => $addbanlenc]);
            return redirect()->route('payoneeruser');
        }
        return redirect()->route('payoneeruser');
    }
    public function rejectpay($id)
    {
        $appid = $id;
        $getalljazzcashuser = UserReferral::where(['user_id' => $appid])->first();
        if ($getalljazzcashuser) {
            $refid = $getalljazzcashuser->id;
            $addbalenceuser = UserReferral::where(['id' => $refid])->delete();
            $activeapproval = User::where('id', $appid)->delete();
            return redirect()->route('payoneeruser');
        }
        $activeapproval = User::where('id', $appid)->delete();
        return redirect()->route('payoneeruser');
    }
    public function userreferrals()
    {
        $getrefemail = user::orderBy('id', 'DESC')->paginate(20);
        return view('admin.usersreferrals', ['getrefemail' => $getrefemail]);
    }
    public function search(Request $request)
    {

        $search = $request->get('search');
        $getrefemail = User::where('email','LIKE','%'.$search.'%')->paginate(2);

        return view('admin.usersreferrals', ['getrefemail' => $getrefemail]);


    }

    public function checkreferrals($id)
    {
        $refid = $id;
        $products = UserReferral::with('user')->where('referred_by_id',$refid)->orderBy('id', 'DESC')->get();
        return view('admin.checkreferrals')->with('products', $products);


    }
    public function showjazzwith()
    {
        $getalladmin = Jazzwith::where('del', 0)->where('app', 0)->orderBy('id', 'DESC')->paginate(20);
        return view('admin.jazzwithdraw')->with('getalladmin' , $getalladmin);
    }
    public function appjazzwith($id)
    {
        $appid1 = $id;
        $activeapproval1 = User::where('id', $appid1)->first();
        $user_id = $activeapproval1->id;
        $refid1 = $activeapproval1->amount;
        $activewith = Jazzwith::where('user_id', $user_id)->first();
        $refidwith = $activewith->amount;
        $minbanlencwith = $refid1 - $refidwith;
        $addbanlenc2with = User::where(['id'=> $appid1])->update(['amount' => $minbanlencwith]);
        $addbanlenc2with2 = Jazzwith::where(['id'=> $appid1])->update(['app' => 1]);
        return redirect()->route('showjazzwith');
    }
    public function rejectjazzwith($id)
    {
        $appid = $id;
        $addbalenceuser = Jazzwith::where('id' , $appid)->update(['del' => 1]);
        return redirect()->route('showjazzwith');
    }
    public function showeasywith()
    {
        $getalladmin = Easywith::where('del', 0)->where('app', 0)->orderBy('id', 'DESC')->paginate(20);
        return view('admin.easywith', ['getalladmin' => $getalladmin]);
    }
    public function appeasywith($id)
    {
        $appid1 = $id;
        $activeapproval1 = User::where('id', $appid1)->first();
        $user_id = $activeapproval1->id;
        $refid1 = $activeapproval1->amount;
        $activewith = Easywith::where('user_id', $user_id)->first();
        $refidwith = $activewith->amount;
        $minbanlencwith = $refid1 - $refidwith;
        $addbanlenc2with = User::where(['id'=> $appid1])->update(['amount' => $minbanlencwith]);
        $addbanlenc2with2 = Easywith::where(['id'=> $appid1])->update(['app' => 1]);
        return redirect()->route('showeasywith');
    }
    public function rejecteasywith($id)
    {
        $appid = $id;
        $addbalenceuser = Easywith::where('id' , $appid)->update(['del' => 1]);
        return redirect()->route('showeasywith');
    }
    public function showskrillwith()
    {
        $getalladmin = Skrillwith::where('del', 0)->where('app', 0)->orderBy('id', 'DESC')->paginate(20);
        return view('admin.skrillwith', ['getalladmin' => $getalladmin]);
    }
    public function appskrillwith($id)
    {
        $appid1 = $id;
        $activeapproval1 = User::where('id', $appid1)->first();
        $user_id = $activeapproval1->id;
        $refid1 = $activeapproval1->amount;
        $activewith = Skrillwith::where('user_id', $user_id)->first();
        $refidwith = $activewith->amount;
        $minbanlencwith = $refid1 - $refidwith;
        $addbanlenc2with = User::where(['id'=> $appid1])->update(['amount' => $minbanlencwith]);
        $addbanlenc2with2 = Skrillwith::where(['id'=> $appid1])->update(['app' => 1]);
        return redirect()->route('showskrillwith');
    }
    public function rejectskrillwith($id)
    {
        $appid = $id;
        $addbalenceuser = Skrillwith::where('id' , $appid)->update(['del' => 1]);
        return redirect()->route('showskrillwith');
    }
    public function showpaywith()
    {
        $getalladmin = Paywith::where('del', 0)->where('app', 0)->orderBy('id', 'DESC')->paginate(20);
        return view('admin.paywith', ['getalladmin' => $getalladmin]);
    }
    public function apppaywith($id)
    {
        $appid1 = $id;
        $activeapproval1 = User::where('id', $appid1)->first();
        $user_id = $activeapproval1->id;
        $refid1 = $activeapproval1->amount;
        $activewith = Paywith::where('user_id', $user_id)->first();
        $refidwith = $activewith->amount;
        $minbanlencwith = $refid1 - $refidwith;
        $addbanlenc2with = User::where(['id'=> $appid1])->update(['amount' => $minbanlencwith]);
        $addbanlenc2with2 = Paywith::where(['id'=> $appid1])->update(['app' => 1]);
        return redirect()->route('showpaywith');
    }
    public function rejectpaywith($id)
    {
        $appid = $id;
        $addbalenceuser = Paywith::where('id' , $appid)->update(['del' => 1]);
        return redirect()->route('showpaywith');
    }
}
