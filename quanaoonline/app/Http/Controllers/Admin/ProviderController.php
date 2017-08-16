<?php

namespace App\Http\Controllers\Admin;

use App\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProviderController extends Controller
{
    public function getAdd(){
        return view('admin.provider.add');
    }
    public function postAdd(Request $request){
        $valid = Validator::make($request -> all(),[
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email'
        ],[
            'name.required' => 'Vui lòng nhập tên nhà cung cấp.',
            'address.required' => 'Vui lòng nhập địa chỉ hà cung cấp.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'email.required' => 'Vui lòng nhập địa chỉ email nhà cung cấp',

            'phone.numeric' => 'Số điện thoại phải định dạng số.',
            'email.email' => 'Email chưa đúng định dạng.'
        ]);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }else{
            $provider = Provider::create([
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email')
            ]);
            return redirect()->route('provider.showlist')->with('thongbao', 'Đã thêm nhà cung cấp thành công!');
        }
    }

    public function getList(){
        $provider = DB::table('providers')->select('id', 'name', 'address', 'phone', 'email')->get();
        return view('admin.provider.list', compact('provider'));
    }
}
