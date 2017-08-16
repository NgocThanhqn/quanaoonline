<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Mail\SendQueuedMailable;
use Illuminate\Support\Facades\Auth;
use App\Bill_Detail;
use App\Bills;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Validator;
use Mail;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function getIndex()
    {
        $product = DB::table('products')->select('id', 'name', 'image', 'price', 'alias')->orderBy('id', 'DESC')->where('status', 1)->get();
        $product_feat = DB::table('products')->select('id', 'name', 'image', 'price', 'alias')->orderBy('id', 'ASC')->where('status', 1)->get();
        return view('home', compact('product', 'product_feat'));
    }

    public function sanPhamTheoLoai($id)
    {
        $product_cate = DB::table('products')->select('id', 'name', 'image', 'price', 'alias', 'cate_id')->where('cate_id', $id)->paginate(8);
        $cate = DB::table('cate')->select('parent_id')->where('id', $product_cate[0]->cate_id)->first();
        $menu_cate = DB::table('cate')->select('id', 'name', 'alias')->where('parent_id', $cate->parent_id)->get();
        return view('user.pages.cate', compact('product_cate', 'menu_cate'));
    }

    public function chiTietSanPham($id)
    {
        $product_detail = DB::table('products')->where('id', $id)->first();
        $image_phu = DB::table('product_image')->select('id', 'image')->where('product_id', $product_detail->id)->get();
        $product_relate = DB::table('products')->where('cate_id', $product_detail->cate_id)->where('id', '<>', $id)->take(9)->get();
        return view('user.pages.detail', compact('product_detail', 'image_phu', 'product_relate'));
    }

    //them gio hang
    public function muaHang($id)
    {
        $product_buy = DB::table('products')->where('id', $id)->first();
        Cart::add(['id' => $id, 'name' => $product_buy->name, 'qty' => 1, 'price' => $product_buy->price, 'options' => ['size' => $product_buy->image]]);
//        $con = Cart::content();
//        print_r($con);
        return redirect()->route('user.giohang');
    }

    //mua thang kg mua nhieu, tới thẳng trang thanh toán
    public function muaHangThang($id)
    {
        $product_buy = DB::table('products')->where('id', $id)->first();
        Cart::add(['id' => $id, 'name' => $product_buy->name, 'qty' => 1, 'price' => $product_buy->price, 'options' => ['size' => $product_buy->image]]);
        $producr_cart = Cart::content();
        $total = Cart::subtotal();
        return view('user.pages.buy', compact('producr_cart', 'total'));
    }

    public function gioHang()
    {
        $content = Cart::content();
        $total = Cart::subtotal();
//        $total = Cart::total();//nếu tính thêm thuế
        return view('user.pages.cart', compact('content', 'total'));
    }

    public function xoaGioHang(Request $request) //$id, xoa bag ajax
    {
        $id = $request->id;
        Cart::remove($id);
//        return redirect()->route('user.giohang');
    }

    public function capNhatCart(Request $request)
    {
//        if (Request::ajax()) {
//            $id = Request::get('id');
//            $qty = Request::get('qty');
//            Cart::update($id, $qty);
//        } else {
//            echo "Loi";
//        }
        $id = $request->id;
        $qty = $request->qty;
        Cart::update($id,$qty);
//        $content = Cart::content();
//        foreach ($content as $c) {
//            $pid = $c->id;
//            $product = product::find($pid);
//            if ($qty > $product->quantity) {
//                return redirect('cart')->with('notify', 'Số lượng hàng còn lại không đủ');
//            }else {
//                Cart::update($id,$qty);
//            }
//        }
    }

    public function datHang()
    {
        $producr_cart = Cart::content();
        $total = Cart::subtotal();
        $allqty = Cart::count();
        if ($allqty > 0) {
            return view('user.pages.buy', compact('producr_cart', 'total'));
        }
        return redirect()->back()->with('thongbao', "Không có sản phẩm nào để giao dịch");

    }

    public function datHangPost(Request $request)
    {
        $allqty = Cart::count();
//        $qtyrowId = Cart::count('rowId');
        $total = Cart::subtotal();
        $product_cart = Cart::content();
        $check = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric'

        ], [
            //required
            'name.required' => 'Vui lòng nhập tên khách hàng',
            'email.required' => 'Vui lòng nhập email của bạn',
            'phone.required' => 'Vui lòng nhập số điện thoại của bạn',
            'phone.numeric' => 'Vui lòng nhập số điện thoại đinh dạng số',
            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
            //email
            'email.email' => 'Vui lòng nhập đúng định dạng Email'
        ]);
        if ($check->fails()) {
            return redirect()->back()->withErrors($check)->withInput();
        } else {
            if ($allqty != 0) {
                $bill = new Bills();
                $bill = Bills::create([
                    'id_customer' => (Auth::check()) ? Auth::user()->id : null,
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'address' => $request->input('address'),
                    'phone' => $request->input('phone'),
                    'date_order' => date('y-m-d'),
                    'total' => $total,
                    'payment' => 'Thanh toán tại nơi giao hàng',
                    'note' => $request->input('note'),
                    'status' => 0
                ]);
                $bill->save();
                foreach ($product_cart as $item) {
                    $bill_detail = new Bill_Detail();
                    $bill_detail->id_bill = $bill->id;
                    $bill_detail->id_product = $item->id;
                    $bill_detail->quantity = $item->qty;
                    $bill_detail->unit_price = $item->price;
                    $bill_detail->save();
                }
                foreach ($product_cart as $item) {
                    Cart::remove($item->rowId);
                }
                $product = Products::find($bill_detail->id_product);
                $data = ['ten'=>$product, 'gia'=>$product->price, 'soluong'=>$bill_detail->quantity];
                Mail::send('user.pages.mail',$data, function ($message)
                {
                    $message->from('dienlanhthinhvuong187@gmail.com', "Shop Fashion");
                    $message->to('ngocthanhqn95@gmail.com','thanh');
                    $message->subject('Xác nhận đơn hàng');
                });
                return redirect()->route('user.giohang')->with('message', "Bạn đã đặt hàng thành công, vui lòng check mail để kiểm tra hóa đơn!");
            } else {
                return redirect()->back()->with('thongbao', "Không có sản phẩm nào để giao dịch");
            }
        }
    }

    public function getSearch(Request $request){
        $keyword = $request->search;
        $product = Products::where('name','like',"%$keyword%")->orWhere('content','like',"%$keyword%")->get();
        return view('user.pages.search',compact('keyword', 'product'));
    }
}
