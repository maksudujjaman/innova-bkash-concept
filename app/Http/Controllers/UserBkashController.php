<?php

namespace App\Http\Controllers;

use App\Models\UserBkash;
use Illuminate\Http\Request;
use Session;

class UserBkashController extends Controller
{
    private $users, $user;

    public function index()
    {
        return view('admin.user.index');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'mobile' => 'required',
            'amount' => 'required',
        ]);
        UserBkash::newUser($request);
        return back()->with('message', 'User Created Successfully');
    }

    public function send_money_user(Request $request)
    {
        $this->user = UserBkash::where('mobile', $request->mobile)->first();
        if($this->user)
        {
            $this->user->amount = $this->user->amount + $request->amount;

            $this->user->save();

            return back()->with('message', 'Money Send Successfully');
        }

        else
        {
            return back()->with('message', 'Money Send Error');
        }

    }
}
