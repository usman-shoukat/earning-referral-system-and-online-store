<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use App\UserReferral;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
class UserController extends Controller
{
    public $userModel;
    public $userReferral;
    public $urlid;
    public function __construct()
    {
        $this->userModel = new User();
        $this->userReferral = new UserReferral();
    }

    /**
     * @return Factory|View
     */


    public function create($ref)
    {
        $re = $ref;
        return view('makereferral')->with('re',$re);
    }
    public function store(Request $request , $ref)
    {
        $urlid = $ref;
        $userref = User::where(['id' => $urlid ])->first();


        if ($userref) {
     $userData = [
         'name' => $request['name'],
         'email' => $request['email'],
         'password' => Hash::make($request['password']),
         'phone' => $request['phone'],
         'platform' => $request['platform'],
         'image' =>  $request['image'],

                 ];
     $createdUser = $this->userModel->create($userData);

     if ($userref) {
         $this->userReferral->create(['user_id' => $createdUser->id, 'referred_by_id' => $urlid]);
     }
     return redirect()->route('confirmation');
        }
     else{
      return redirect()->route('makereferral',['ref'=> $urlid])->with(['error' => true, 'message' => 'Your Referral Link is not match with our records']);
    }
}

    }

