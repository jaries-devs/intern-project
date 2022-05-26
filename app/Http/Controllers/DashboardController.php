<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    function __construct()
    { 
         $this->middleware('permission:dashboard-access', ['only' => ['index']]);
    }
   public function index(){
       return view('dashboard');
   }
}
