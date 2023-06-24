<?php

namespace App\Http\Controllers;

use App\Models\UserBkash;
use Illuminate\Http\Request;
use Session;

class UserAuthController extends Controller
{
    private $user, $users, $newAmount;

    public function index()
    {
        return view('user.login.index');
    }

    public function login(Request $request)
    {
        $this->user = UserBkash::where('mobile', $request->mobile)->first();
        if ($this->user)
        {
            if (password_verify($request->password, $this->user->password))
            {
                Session::put('user_id', $this->user->id);
                Session::put('user_mobile', $this->user->mobile);
                return redirect('/user/dashboard');
            }

            else
            {
                return back()->with('message', 'Sorry!! Invalid Password');
            }
        }

        else
        {
            return back()->with('message', 'Sorry!! Invalid Mobile Number');
        }
    }

    public function dashboard()
    {
        $this->users = UserBkash::all();
        return view('user.dashboard.index', ['users'=>$this->users]);
    }

    public function send_user()
    {
        return view('user.dashboard.send-user');
    }

    public function send_agent()
    {
        return view('user.dashboard.send-agent');
    }

    public function logout()
    {
        Session::forget('user_id');
        Session::forget('user_mobile');
        return redirect('/user/login');
    }
}
