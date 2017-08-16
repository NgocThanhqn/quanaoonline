<?php

namespace App\Http\Controllers\Admin;

use App\Bill_Input;
use App\Bill_Input_Detail;
use App\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BillInputController extends Controller
{
    public function getList()
    {
        $listBillInput = DB::table('bills_input')->select('*')->orderBy('date_input', 'DESC')->get(); //laáy hóa đơn ra theo ngày mới nhất
        return view('admin.billinput.list', compact('listBillInput')); //không thể compact biến trong foreach
    }

    public function getDetail($id){
        $listInputDetail = DB::table('bill_input_details')->select('*')->where('input_id', $id)->get();
        $dateInput = DB::table('bills_input')->select('date_input')->where('id', $id)->first();
        return view('admin.billinput.detail', compact('listInputDetail', 'dateInput'));
    }

    public function getAdd()
    {
        $listprovider = DB::table('providers')->select('id', 'name')->get()->toArray();
        return view('admin.billinput.add', compact('listprovider'));
    }

    public function postAdd(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'select' => 'required',
            'code' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
//            'totalprice' => 'required|numeric'
        ], [
            'select.required' => 'Vui lòng chọn nhà cung cấp.',
            'code.required' => 'Vui lòng nhập mã sản phẩm (product_id).',
            'quantity.required' => 'Vui lòng nhập số lượng sản phẩm cần thêm.',
            'price.required' => 'Vui lòng giá của sản phẩm.',
//            'totalprice.required' => 'Vui lòng nhập địa chỉ email nhà cung cấp',

            'quantity.numeric' => 'Mục này phải nhập số.',
            'price.numeric' => 'Giá sản phẩm phải là số.'
        ]);
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            //lấy id và ngày lập billinput dể xem có trùng hay kg, nếu trùng thì update, kg thì tạo mới
            $id_provider = $request->input('select');
            //dd($id_provider);  //where(DB::raw("Date(productions.date)") ,"=",$date)//whereDate('date_input', '=', date('y-m-d'))
            $id = DB::table('bills_input')->select('id')->where('provider_id', $id_provider)->whereDate('date_input', '=', date('y-m-d'))->first();
            //$bill_input = Bill_Input::find($id->id);
            $bill_input = $id;
            //dd($bill_input);
            if ($bill_input !== null) { //bill nay da ton tai
                $bill_input_detail = new Bill_Input_Detail();
                $bill_input_detail = Bill_Input_Detail::create([
                //insert vao db
                    'input_id' => $bill_input->id,
                    'product_id' => $request->input('code'),
                    'quantity' => $request->input('quantity'),
                    'price' => $request->input('price'),
                    'dateadd' => date('y-m-d')
                ]);
                $bill_input_detail->save();
                //cập nhật lại số lượng sản phẩm nhập vào
                $n = DB::table('products')->select('quantily')->where('id', $bill_input_detail->product_id)->first(); //lấy số lượng trong product
                $qty = $n->quantily+$bill_input_detail->quantity;
                $product = Products::find($bill_input_detail->product_id);//tìm sản phản với mã $id
                if($product!=null){
                    $product->quantily = $qty;
                    $product->save();
                }
            } else { //chua co bill nen them bill moi va chi tiet bill
                // dd($id_provider);
                $billInput = new Bill_Input();
                $billInput = Bill_Input::create([
                    'user_id' => 1,
                    'provider_id' => $id_provider,
                    'date_input' => date('y-m-d')
                ]);
                $billInput->save();
                //insert vao billdetail
                $bill_input_detail = new Bill_Input_Detail();
                $bill_input_detail = Bill_Input_Detail::create([
                    'input_id' => $billInput->id,
                    'product_id' => $request->input('code'),
                    'quantity' => $request->input('quantity'),
                    'price' => $request->input('price'),
                    'dateadd' => date('y-m-d')
                ]);
                $bill_input_detail->save();
                //cập nhật lại số lượng sản phẩm nhập vào
                $n = DB::table('products')->select('quantily')->where('id', $bill_input_detail->product_id)->first(); //lấy số lượng trong product
                $qty = $n->quantily+$bill_input_detail->quantity;
                $product = Products::find($bill_input_detail->product_id);//tìm sản phản với mã $id
                if($product!=null){
                    $product->quantily = $qty;
                    $product->save();
                }
            }
            return redirect()->route('admin.billinput.add')->with('message', "Đã lập phiếu và cập nhật số lượng sản phẩm");
        }
    }
}
