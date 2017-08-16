<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
//        $this->middleware('auth:Admin');
    }
//    public function register(){
//        return view('user.pages.register');
//    }
//    public function CreateCustomer(Request $request)
//    {
//        $valid = Validator::make($request->all(), [
//            'name' => 'required',
//            'email' => 'required|email|unique:customers,email',
//            'password' => 'required|min:6',
//            'password_confirmation' => 'required|same:password',
//            'telephone' => 'required|numeric',
//            'address' => 'required'
//        ], [
//            //required
//            'name.required' => 'Vui lòng nhập tên khách hàng',
//            'email.required' => 'Vui lòng nhập email của bạn, đây cũng là username để đăng nhập',
//            'password.required' => 'Vui lòng nhập password',
//            'password.min' => 'password phải nhiều hơn 6 kí tự',
//            'telephone.required' => 'Vui lòng nhập số điện thoại của bạn',
//            'telephone.numeric' => 'Vui lòng nhập số điện thoại đinh dạng số',
//            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
//            //email
//            'email.email' => 'Vui lòng nhập đúng định dạng Email',
//            //unique
//            'email.unique' => 'Email này đã được đăng kí tài khoản',
//            //confirmed
//            'password_confirmation.same' => 'Mật khảu không trùng'
//            //mat khau ngan
////            'password.min'=>'Mật khẩu ít nhất 6 kí tự'
//        ]);
//        if ($valid->fails()) {
//            return redirect()->back()->withErrors($valid)->withInput();
//        } else {
//            $customer = User::create([
//                'name' => $request->input('name'),
//                'email' => $request->input('email'),
//                'password' => bcrypt($request->input('password')),
//                'address' => $request->input('address'),
//                'phome_number' => $request->input('telephone')
//            ]);
//            return redirect()->back()->with('message', "Bạn đã đăng kí tên $customer->name thành công");
//        }
//    }
//    ket thuc dang ki khach hang

    public function getLogin(){
        return view('admin.login');
    }
    //kiem tra dang nhap
    public function postLogin(Request $request){
        if(Auth::guard('Admin')->attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')])){
            return redirect()->route('admin.home');
        }else{
            return redirect()->back()->with('thongbao', 'Sai thông tin đăng nhập, vui lòng kiểm tra lại');
        }

    }

    public function homeAdmin(){
        return view('admin.home');
    }

    //dang xuat
    public function Logout(){
        Auth::guard('Admin')->logout();
        return redirect()->route('admin.login');
    }
}
