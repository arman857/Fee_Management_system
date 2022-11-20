<?php

namespace App\Http\Controllers;

use session;
use App\Models\Fee;
use App\Models\shop;
use App\Models\student;
use Illuminate\Http\Request;
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
        $total_message=Shop::count('name');
        $total_student=student::count('Name');
        $total_fee=Fee::count( 'amount');
        return view('Backend.dashboard',compact('total_message','total_student','total_fee'));
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

}
