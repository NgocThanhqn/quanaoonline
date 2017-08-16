@extends('user.master')
@section('content')
<div class="container shopping-cart">
    <div class="row">
        <div class="col-md-12">
            <h3 class="title">
                Shopping Cart
            </h3>
            <div class="clearfix">
            </div>
            @if(Session::has('thongbao'))
                <div class="alert alert-warning">{{session('thongbao')}}</div>
            @endif
            @if(Session::has('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table class="shop-table">
                <thead>
                <tr>
                    <th>
                        Image
                    </th>
                    <th>
                        Dtails
                    </th>
                    <th>
                        Unit Price
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Delete
                    </th>
                </tr>
                </thead>
                <tbody>
                <form method="post" action="">
                    <input type="hidden" name="token" value="{!! csrf_token() !!}">
                @foreach($content as $item)
                <tr>
                    <td>
                        <img src="upload/{!! $item->options['size'] !!}" alt="">
                    </td>
                    <td>
                        <div class="shop-details">
                            <div class="productname">
                                {!! $item->name !!}
                            </div>
                            {{--<p>--}}
                                {{--<img alt="" src="images/star.png">--}}
                                {{--<a class="review_num" href="#">--}}
                                    {{--02 Review(s)--}}
                                {{--</a>--}}
                            {{--</p>--}}
                            <div class="color-choser">
                          <span class="text">
                            Product Color :
                          </span>
                                <ul>
                                    <li>
                                        <a class="black-bg " href="#">
                                            black
                                        </a>
                                    </li>
                                    <li>
                                        <a class="red-bg" href="#">
                                            light red
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p>
                                Product Code :
                                <strong class="pcode">{!! $item->id !!}</strong>
                            </p>
                        </div>
                    </td>
                    <td>
                        <h5>
                            {!!number_format($item->price,0,",",".") !!}
                        </h5>
                    </td>
                    <td>
                        <input type="number" class="qty" id="{!! $item->rowId !!}"  style="width: 80px;" min="1" name="qty" value="{!! $item->qty !!}" >
                    </td>
                    <td>
                        <h5>
                            <strong class="red">
                                {!! number_format($item->price*$item->qty,0,",",".") !!}
                            </strong>
                        </h5>
                    </td>
                    <td>
                        {{--<a href="" class='update' id="{!! $item->rowId !!}">--}}
                            {{--<img src="tempuser/images/update.png" alt="cập nhật sản phẩn giỏ!">--}}
                        {{--</a> {{url('xoa-gio-hang',['id'=>$item->rowId])}}--}}
                        <a class='delete' id="{!! $item->rowId !!}">
                            <img src="tempuser/images/remove.png" alt="Xóa sản phẩn khỏi giỏ!">
                        </a>
                    </td>
                </tr>
                @endforeach
                </form>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <a href="{{url('/')}}">
                        <button class="pull-left">
                            Continue Shopping
                        </button>
                        </a>
                        {{--<a href="{{url()}}">--}}
                        {{--<button class=" pull-right">--}}
                            {{--Update Shopping Cart--}}
                        {{--</button>--}}
                        {{--</a>--}}
                    </td>
                </tr>
                </tfoot>

            </table>
            <div class="clearfix">
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6" style="float: right">
                    <div class="shippingbox">
                        {{--<div class="subtotal">--}}
                            {{--<h5>--}}
                                {{--Sub Total--}}
                            {{--</h5>--}}
                            {{--<span>--}}
                        {{--$1.000.00--}}
                      {{--</span>--}}
                        {{--</div>--}}
                        <div class="grandtotal">
                            <h5>
                                PRICE TOTAL
                            </h5>
                            <span>
                        {{--{!! number_format($total,0,",",".") !!}--}}
                                {!! $total !!}
                      </span>
                        </div>
                        <a href="{{ url('dat-hang') }}"><button>Process To Checkout</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="our-brand">
        <h3 class="title">
            <strong>
                Our
            </strong>
            Brands
        </h3>
        <div class="control">
            <a id="prev_brand" class="prev" href="#">
                &lt;
            </a>
            <a id="next_brand" class="next" href="#">
                &gt;
            </a>
        </div>
        <ul id="braldLogo">
            <li>
                <ul class="brand_item">
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/envato.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/themeforest.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/photodune.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/activeden.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/envato.png" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="brand_item">
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/envato.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/themeforest.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/photodune.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/activeden.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="brand-logo">
                                <img src="tempuser/images/envato.png" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
    @endsection