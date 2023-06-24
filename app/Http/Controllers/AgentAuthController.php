<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Session;

class AgentAuthController extends Controller
{
    private $agent, $agents;

    public function index()
    {
        return view('agent.login.index');
    }

    public function login(Request $request)
    {
        $this->agent = Agent::where('mobile', $request->mobile)->first();
        if ($this->agent)
        {
            if (password_verify($request->password, $this->agent->password))
            {
                Session::put('agent_id', $this->agent->id);
                Session::put('agent_mobile', $this->agent->mobile);
                return redirect('/agent/dashboard');
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
        $this->agents = Agent::all();
        return view('agent.dashboard.index', ['agents'=>$this->agents]);
    }

    public function logout()
    {
        Session::forget('agent_id');
        Session::forget('agent_mobile');
        return redirect('/agent/login');
    }
}
