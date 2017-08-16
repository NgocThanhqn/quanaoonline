<?php

namespace App\Http\Controllers\Admin;

use App\Cate;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getList(){
        $listProd = Products::orderBy('id', 'DESC')->paginate(5);
        return view('admin.product.list', compact('listProd'));
    }

    public function getAdd()
    {
        //lấy dánh ách các danh mục để show mục select
        $cateSelect = DB::table('cate')->select('id', 'name')->where('parent_id', '<>', 0)->get();
        return view('admin.product.add', compact('cateSelect'));
    }

    public function postAdd(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required|unique:products,name',
            'price' => 'required|numeric',
            'intro' => 'required',
            'content' => 'required',
            'images' => 'required',
            'select' => 'required',
            'quanlity' => 'required|numeric'
        ], [
            'name.required' => 'Vui Lòng nhập tên sản phẩm.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'intro.required' => 'Vui lòng nhập giới thiệu sản phẩm.',
            'content.required' => 'Vui lòng nhập nội dung sản phẩm.',
            'images.required' => 'Vui lòng chọn hình ảnh',
            'select.required' => 'Vui lòng chọn danh mục sản phẩm.',
            'quanlity.required' => 'Vui lòng nhập số lượng sản phẩm.',

            'name.unique' => 'Sản phẩm này đã tồn tại.',
            'price.numeric' => 'Giá phải là số, đơn vị VNĐ',
            'quanlity.numeric' => 'Số lượng phải là số!'
        ]);
        if ($valid ->fails()){
            redirect()->back()->withErrors($valid)->withInput();
        }
        else{
            $id_cate = $request->input('select');
            $image = Input::file('images')->getClientOriginalName();
            $product = Products::create([
                'name' => $request->input('name'),
                'alias' => str_slug($request->input('name')),
                'price' => $request->input('price'),
                'intro' => $request->input('intro'),
                'content' => $request->input('content'),
                'image' => $image,
                'keywords' => $request->input('name'),
                'user_id' => 1,
                'cate_id' => $id_cate,
                'quantily' => $request->input('quanlity'),
                'status' => $request->input('status')
            ]);
//            $destination = base_path() . '/public/upload';
            $request->file('images')->move('upload/', $image);
            return redirect()->route('admin.product.add')->with('message', "Bạn đã thêm $product->name vào hệ thống thành công");
        }
    }
    public function getEdit($id){
        $product = Products::find($id);
        $cateSelect = DB::table('cate')->select('id', 'name')->where('parent_id', '<>', 0)->get();
        return view('admin.product.edit', compact('product', 'cateSelect'));
    }
    public function postEdit(Request $request ,$id){
        $valid = Validator::make($request->all(),[
            'name' => 'required|unique:products,name,' . $id,
            'price' => 'required|numeric',
            'intro' => 'required',
            'content' => 'required',
            'images' => 'required',
            'select' => 'required',
            'quanlity' => 'required|numeric'
        ],[
            'name.required' => 'Vui Lòng nhập tên sản phẩm.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'intro.required' => 'Vui lòng nhập giới thiệu sản phẩm.',
            'content.required' => 'Vui lòng nhập nội dung sản phẩm.',
            'images.required' => 'Vui lòng chọn hình ảnh',
            'select.required' => 'Vui lòng chọn danh mục sản phẩm.',
            'quanlity.required' => 'Vui lòng nhập số lượng sản phẩm.',

            'name.unique' => 'Sản phẩm này đã tồn tại.',
            'price.numeric' => 'Giá phải là số, đơn vị VNĐ',
            'quanlity.numeric' => 'Số lượng phải là số!'
        ]);
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
//           Thêm dữ liệu vào
            $image = Input::file('images')->getClientOriginalName();
            $product = Products::find($id);
            if ($product !== null) {
                $product->name = $request->input('name');
                $product->alias = str_slug($request->input('name'));
                $product->price = $request->input('price');
                $product->intro = $request->input('intro');
                $product->content =$request->input('content');
                $product->image = $image;
                $product->keywords = $request->input('name');
                $product->cate_id = $request->input('select');
                $product->quantily = $request->input('quanlity');
                $product->status = $request->input('status');
                $product->save();
                return redirect()->back()->with('message', "Bạn đã cập nhật $product->name vào hệ thống thành công");
            } else {
                return redirect()->route('admin.product.add');
            }
        }
    }

    public function getDelete($id){
        $product = Products::find($id);
        $product->status = 2;
        $product->save();
        return redirect()->back()->with('message', "Xóa $product->name thành công!");
    }
}
