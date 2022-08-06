<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
//    public function redirectPath()
//    {
//        if (auth()->user()->role == 'employer'){
//            return '/employer';
//        }
//        elseif (auth()->user()->role == 'admin'){
//            return '/admin';
//        }
//        else {
//            return '/home';
//        }
//    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role == 'admin'){
            return redirect()->to(RouteServiceProvider::ADMIN);
        } elseif ($user->role == 'employer'){
            return redirect()->to(RouteServiceProvider::EMPLOYER);
        } else{
            return redirect()->to(RouteServiceProvider::HOME);
        }
    }
}
