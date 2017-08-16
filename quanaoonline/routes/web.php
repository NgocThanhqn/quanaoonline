<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@getIndex')->name('user.home');

Route::get('sanphamtheoloai/{id}/{tenoai}', 'HomeController@sanPhamTheoLoai')->name('user.pages.cate');
Route::get('chitietsanpham/{id}/{tenloai}', 'HomeController@chiTietSanPham')->name('user.pages.detail');
Route::get('mua-hang/{id}/{tensanpham}', 'HomeController@muaHang')->name('user.muahang'); //mua thông qua thêm giỏ hàng
Route::get('mua-hang-nhanh/{id}/{tensanpham}', 'HomeController@muaHangThang')->name('user.muahangthang'); //mua thẳng không thêm giỏ hàng
Route::get('gio-hang', 'HomeController@gioHang')->name('user.giohang');
Route::get('xoa-gio-hang/{id}', 'HomeController@xoaGioHang')->name('user.xoagiohang');
Route::get('cap-nhat-cart/{id}/{qty}', 'HomeController@capNhatCart')->name('user.upcart'); // su dung ajax
Route::get('dat-hang', 'HomeController@datHang')->name('user.dathang');
Route::post('dat-hang', 'HomeController@datHangPost')->name('user.dathang');
Route::get('tim-kiem', 'HomeController@getSearch')->name('user.timkiem');

//route group cho customer
Route::group(['prefix' => '/'], function () {
    //dang ki
    Route::get('dangki', 'UserController@register')->name('user.pages.regiter');
    Route::post('dangki', 'UserController@CreateCustomer')->name('user.CreateCustomer');
    //dang nhap
    Route::get('dangnhap', 'UserController@login')->name('user.pages.login');
    Route::post('dangnhap', 'UserController@GetLogin')->name('user.pages.login');
    //dang xuat
    Route::get('dangxuat', 'UserController@logout')->name('user.pages.logout');
});

//route group cho admin ,'middleware'=>'admin'
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'Admin\AdminController@getLogin')->name('admin.login');
    Route::post('/', 'Admin\AdminController@postLogin')->name('admin.login');
    Route::get('/dangxuat', 'Admin\AdminController@Logout')->name('admin.logout');
    Route::get('/home-admin', 'Admin\AdminController@homeAdmin')->name('admin.home');

//    thêm danh mục sp
    Route::group(['prefix' => '/cate'], function () {
        Route::get('/add-cate', 'Admin\CateController@getAdd')->name('admin.cate.add');
        Route::post('/add-cate', 'Admin\CateController@postAdd')->name('admin.cate.add');
        Route::get('/list-cate', 'Admin\CateController@getList')->name('admin.cate.list');
        //danh sach san pham theo cate
        Route::get('/list-product-cate/{id}', 'Admin\CateController@getListProByID')->name('admin.cate.show');
    });
//    thêm nhà cung cấp
    Route::group(['prefix' => '/provider'], function () {
        //them nha cung cap
        Route::get('/add-provider', 'Admin\ProviderController@getAdd')->name('provider.showadd');
        Route::post('/add-provider', 'Admin\ProviderController@postAdd')->name('provider.add');
        //danh sach nha cung cap
        Route::get('/list-provider', 'Admin\ProviderController@getList')->name('provider.showlist');
        //chinh sửa nhà cung cấp

    });
//    thêm product
    Route::group(['prefix' => '/product'], function () {
        Route::get('/add-product', 'Admin\ProductController@getAdd')->name('admin.product.add');
        Route::post('/add-product', 'Admin\ProductController@postAdd')->name('admin.product.add');
        Route::get('/list-product', 'Admin\ProductController@getList')->name('admin.product.list');
        Route::get('/edit-product/{id}', 'Admin\ProductController@getEdit')->name('admin.product.edit');
        Route::post('/edit-product/{id}', 'Admin\ProductController@postEdit')->name('admin.product.edit');
        Route::get('/delete-product/{id}', 'Admin\ProductController@getDelete')->name('admin.product.delete');
    });

    Route::group(['prefix' => '/bill'], function () {
        Route::get('/list-bill', 'Admin\BillController@getList')->name('admin.bill.list');
        Route::get('/list-bill-detail/{id}', 'Admin\BillController@getListDetail')->name('admin.bill.show');

//        Route::post('/edit-product/{id}', 'Admin\BillController@postEdit')->name('admin.product.edit');
    });

//    thêm phiếu nhập
    Route::group(['prefix' => '/billinput'], function () {
        Route::get('/add-billinput', 'Admin\BillInputController@getAdd')->name('admin.billinput.add');
        Route::post('/add-billinput', 'Admin\BillInputController@postAdd')->name('admin.billinput.add');
        Route::get('/list-billinput', 'Admin\BillInputController@getList')->name('admin.billinput.list');
        Route::get('/list-detail-billinput/{id}', 'Admin\BillInputController@getDetail')->name('admin.billinput.show');
    });
});