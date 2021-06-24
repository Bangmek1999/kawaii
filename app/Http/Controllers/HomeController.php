<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\assignRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        if(auth::user()->hasRole('developer')){
            $pot_data =PotUser::all();
        // return response()->json($pot_data);
        return view('home',compact('pot_data'));
            // return view('home');
        } 
        
        // auth()->user()->assigmRole('admin');
        return view('home');
  
    }
}
