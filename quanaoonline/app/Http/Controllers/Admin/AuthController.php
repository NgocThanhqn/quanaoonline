<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
//    public function login(){
//        return view('admin.login');
//    }
//    //kiem tra dang nhap
//    public function GetLogin(Request $request){
//        if(Auth::guard('Admin')->attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')])){
//            return redirect()->route('provider.showlist');
//        }else{
//            return redirect()->back()->with('thongbao', 'Sai thông tin đăng nhập, vui lòng kiểm tra lại');
//        }
//
//    }
    protected $redirectTo = 'admin/dashboard';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
//    }
//
//    public function getLogin()
//    {
//        return view('admin.login');
//    }
//
//    public function postLogin(Request $request)
//    {
//        $this->validateLogin($request);
//
//        $throttles = $this->isUsingThrottlesLoginsTrait();
//
//        if ($throttles && $lockedOut = $this->hasTooManyLoginAttempts($request)) {
//            $this->fireLockoutEvent($request);
//
//            return $this->sendLockoutResponse($request);
//        }
//
//        $credentials = $this->getCredentials($request);
//
//        if (Auth::guard('Admin')->attempt($credentials, $request->has('remember'))) {
//            return $this->handleUserWasAuthenticated($request, $throttles);
//        }
//
//        if ($throttles && !$lockedOut) {
//            $this->incrementLoginAttempts($request);
//        }
//
//        return $this->sendFailedLoginResponse($request);
//    }

}
