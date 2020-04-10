<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Auth;

use App\Login;
use App\User;
use App\Token;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $usertype = $request->_usertype;
        $isAuth = false;
        $creds = ['email'=> $request->email, 'password' => $request->password];
        if($usertype == 1)
        {
            $this->validate($request, ["email" => "required|email", "password" => "required", "Token" => "required"]);
            $token_obj = Token::where('token', $request->Token)->first();
            if( $token_obj != null)
            {
                if( Auth::attempt($creds))
                {
                    $isAuth = true;
                }
            }
        }
        else
        {
            $this->validate($request, ["email" => "required|email", "password" => "required"]);
            if( Auth::attempt($creds))
            {
                $isAuth = true;
            }
        }
        
        if($isAuth)
        {
            return redirect('/');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
