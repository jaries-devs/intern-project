<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('profile',compact('user'));
    }

     public function update(Request $request, $id)
        {
            $input = $request->all();
            $user = User::find($id);
            $user->update($input);

            return back()->with('success', 'Profile updated successfully!');
            // return redirect()->route('profile.index')
            //                 ->with('success','User updated successfully');
        }
    }

