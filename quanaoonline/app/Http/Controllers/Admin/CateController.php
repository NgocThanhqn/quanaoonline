<?php

namespace App\Http\Controllers\Admin;

use App\Cate;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CateController extends Controller
{
    public function getList(){
        $listCate = DB::table('cate')->select('*')->where('parent_id','<>',0)->get();
        return view('admin.cate.list', compact('listCate'));
    }

    public function getListProByID($id){
        $nameCate = DB::table('cate')->select('*')->where('id', $id)->first();
        $productByID = DB::table('products')->select('*')->where('cate_id', $id)->get();
        return view('admin.cate.listpro', compact('productByID', 'nameCate'));
    }

    public function getAdd(){
        $listMenuRoot = DB::table('cate')->select('*')->where('parent_id','=',0)->get();
        return view('admin.cate.add',compact('listMenuRoot'));
    }

    public function postAdd(Request $request){
        $valid = Validator::make($request->all(), [
            'select' => 'required',
            'name' => 'required|unique:cate,name',
            'description' => 'required',
        ], [
            'select.required' => 'Vui lòng chọn danh mục menu gốc.',
            'name.required' => 'Vui Lòng nhập tên danh mục.',
            'description.required' => 'Vui lòng nhập mô tả về danh mục.',

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
