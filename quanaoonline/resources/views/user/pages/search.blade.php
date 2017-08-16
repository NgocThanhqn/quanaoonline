@extends('user.master')
@section('content')
    <div class="container">
        <div class="hot-products">
            <div class="alert alert-success"><h5>Đã tìm thấy {{ count($product) }} sản phẩm với từ
                    khóa: "{!! $keyword !!}"</h5></div>
            {{--<div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">--}}
                    {{--&gt;</a></div>--}}
            <div class="row">
                @foreach($product as $item)
                    <div class="col-md-3 col-sm-6">
                        <div class="products">
                            <div class="thumbnail"><a href="{{url('chitietsanpham',[$item->id, $item->alias])}}"><img src="upload/{{$item->image}}" style="width: 220px; height: 250px; margin-top: -30px;" alt="Product Name"></a>
                            </div>
                            <div class="productname">{!! $item->name !!}</div>
                            <h4 class="price">{!!number_format($item->price,0,',','.')  !!} VNĐ</h4>
                            <div class="button_group"><a href="{{url('mua-hang',[$item->id, $item->alias])}}">
                                    <button class="button add-cart" type="button">Thêm Giỏ Hàng</button>
                                </a>
                                {{--<button class="button compare" type="button"><i class="fa fa-exchange"></i></button>--}}
                                <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="our-brand">
            <h3 class="title"><strong>Our </strong> Brands</h3>
            <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next"
                                                                                     href="#">&gt;</a></div>
            <ul id="braldLogo">
                <li>
                    <ul class="brand_item">
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/envato.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/themeforest.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/photodune.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/activeden.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/envato.png" alt=""></div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="brand_item">
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/envato.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/themeforest.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/photodune.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/activeden.png" alt=""></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo"><img src="tempuser/images/envato.png" alt=""></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endsection