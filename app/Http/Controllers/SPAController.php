<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class SPAController extends Controller
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
        $userAuth  = Auth::user();
        $user = User::where('id', $userAuth->user_id)->first();

        $usertype = $user->usertype_id;

        if($usertype == 1){ // usertype is admin
            return view('/admin_layouts.home');
        }
        else if($usertype == 2){ // usertype is tutor
            return view('tutor_layouts.home');
        }
        else{ //usertype is student
            return view('student_layouts.home');
        }
    }
}
