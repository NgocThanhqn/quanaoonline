<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //lấy dữ liệu danh sách thể loại cho trang thêm, nhập hàng admin
    public function getAdd(){
        $listMenuRoot = DB::table('cate')->select('*')->where('parent_id','=',0)->get();
        return view('admin.cate.add',compact('listMenuRoot'));
    }

    public function postAdd(Request $request){
        $valid = Validator::make($request->all(), [
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'select' => 'required'
        ], [
            'name.required' => 'Vui Lòng nhập tên danh mục.',
            'description.required' => 'Vui lòng nhập mô tả về danh mục.',
            'select.required' => 'Vui lòng chọn danh mục menu gốc.',

            'name.unique' => 'Danh mục này đã tồn tại.'

        ]);
        if ($valid ->fails()){
            redirect()->back()->withErrors($valid)->withInput();
        }
        else{
            $idMenuRoot = $request->input('select');
            $cate = Cate::create([
                'name' => $request->input('name'),
                'alias' => str_slug($request->input('name')),
                'order' => 10,
                'parent_id' => $idMenuRoot,
                'keywords' => $request->input('name'),
                'description' => $request->input('description')
            ]);
            return redirect()->route('admin.cate.add')->with('message', "Bạn đã thêm $cate->name vào hệ thống thành công");
        }
    }
}
