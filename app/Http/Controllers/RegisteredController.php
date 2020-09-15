<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\UserReferral;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
class RegisteredController extends Controller
{
    public $userModel;
    public function __construct()
    {
        $this->userModel = new User();
        $this->userReferral = new UserReferral();
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function show()
    {
        return view('registered');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function store(Request $request)
    {

        $userData  = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'platform' => $request['platform'],
            'image' =>  $request['image'],
        ];
        $createdUser = $this->userModel->create($userData);
        return redirect()->route('confirmation');
    }
    public function confirmation()
    {
        return view('confirmation-approval');
    }


}
