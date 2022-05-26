<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DashboardController extends Controller
{
    function __construct()
    { 
         $this->middleware('permission:dashboard-access', ['only' => ['index']]);
    }

    public function index()
    {
        $user = User::all();
        return view('dashboard', compact('user'));
    }

   public function getUserDetails(Request $request) 
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required|email|unique:users,email',     
        ]);
    }
}
