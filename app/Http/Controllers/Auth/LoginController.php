<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




    // public function credentials(Request $request){


    //     //if(is_string)

    //     if(is_string($request->email)){
    //     return['username'=>$request->email, 'password'=>$request->password];
    //     }elseif(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
    //     return['email'=>$request->email, 'password'=>$request->password];
    //     }
    //     }






    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // You may also add additional conditions to the query, such as 'active' => 1
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']]) ||
            Auth::attempt(['username' => $credentials['email'], 'password' => $credentials['password']])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }







}
