<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $users;

    public function index()
    {
        $this->users = User::all();
        return view('admin.home.index', ['users'=>$this->users]);
    }
}
