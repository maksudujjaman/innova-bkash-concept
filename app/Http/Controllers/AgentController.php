<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    private $user;

    public function index()
    {
        return view('admin.agent.index');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'mobile' => 'required',
            'amount' => 'required',
        ]);
        Agent::newAgent($request);
        return back()->with('message', 'Agent Created Successfully');
    }

    public function send_money_agent(Request $request)
    {
        $this->user = Agent::where('mobile', $request->mobile)->first();
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
