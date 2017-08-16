@extends('user.master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <h2 class="title" style="text-align: center"><strong>Đặt Hàng</strong></h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(Session::has('thongbao'))
                <div class="alert alert-warning">{{session('thongbao')}}</div>
            @endif
            <form action="{{url('dat-hang')}}" method="post" class="beta-form-checkout">
                {!! csrf_field() !!}
                {{--<input type="hidden" name="_tokencart" value="{!! csrf_token() !!}">--}}
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h4 style="text-align: center">Thông tin khách hàng</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-row {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="lebel-abs">User Name<strong class="red">*</strong></label>
                            <input type="text" class="input namefild" name="name" placeholder="Nhập họ tên"
                                   value="{{ (Auth::check()) ? Auth::user()->name : '' }}" required>
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-row {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label class="lebel-abs">Address<strong class="red">*</strong></label>
                            <input type="text" class="input namefild" name="address"
                                   placeholder="Nhập đại chỉ nhận hàng"
                                   value="{{ (Auth::check()) ? Auth::user()->address : '' }}" required>
                            <span class="help-block">{{ $errors->first('address') }}</span>
                        </div>

                        <div class="form-row {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="lebel-abs">Email<strong class="red">*</strong></label>
                            <input type="email" class="input namefild" name="email" placeholder="Nhập email"
                                   value="{{ (Auth::check()) ? Auth::user()->email : '' }}" required>
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-row {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label class="lebel-abs">Phone<strong class="red">*</strong></label>
                            <input type="text" class="input namefild" name="phone" placeholder="Nhập số điện thoại"
                                   value="{{ (Auth::check()) ? Auth::user()->phome_number : '' }}" required="numeric">
                            <span class="help-block">{{ $errors->first('phone') }}</span>
                        </div>

                        <div class="form-row">
                            <label class="lebel-abs">Note<strong class="red">*</strong></label>
                            <input type="text" class="input namefild" name="note"
                                   placeholder="Nhập khách hàng ghi chú"></input>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <h4 style="text-align: center">Đơn hàng của bạn</h4>
                        <div class="col-sm-12">
                            <table class="shop-table">
                                <thead>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Product Name
                                    </th>
                                    <th>
                                        Price/Product
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($producr_cart as $item)
                                    <tr>
                                        <td>
                                            <img src="upload/{!! $item->options['size'] !!}" alt="">
                                        </td>
                                        <td>
                                            <div class="shop-details">
                                                <div class="productname">
                                                    {!! $item->name !!}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>
                                                {!!number_format($item->price,0,",",".") !!}
                                            </h5>
                                        </td>
                                        <td>
                                            <label class="lebel-abs">{!! $item->qty !!}</label>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="your-order-item">
                                <h5 class="pull-right" style="text-align: center">Total: {!! $total !!} VNĐ</h5>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h4 style="text-align: center">Hình Thức Thánh toán</h4>

                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio"
                                           name="payment_method" value="bacs" checked="checked"
                                           data-order_button_text="">
                                    <label for="payment_method_bacs">&nbsp; Direct Bank Transfer </label>
                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                        Giao hàng tận nhà rồi thanh toán cho nhân viên giao hàng
                                    </div>
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio"
                                           name="payment_method" value="cheque" data-order_button_text="">
                                    <label for="payment_method_cheque">&nbsp; Chuyển khoản | Thanh toán trực
                                        tuyến. </label>
                                    {{--<div class="payment_box payment_method_cheque" style="display: block;">--}}
                                    {{--Chủ tài khoản: Nguyễn Ngọc Thành--}}
                                    {{--</div>--}}
                                </li>
                            </ul>
                        </div>
                        <br/>
                        <button style="margin-left: 80px;">Thanh Toán</button>
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
