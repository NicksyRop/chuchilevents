<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','user_role']);
    }

    public function index(){

        return view('Admin.index')->with('users',User::where('role','user')->get());
    }

    public function users(){

        return view('users.index')->with('users',User::where('role','user')->get());
    }
}
