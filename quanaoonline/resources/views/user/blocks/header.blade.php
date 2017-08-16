<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="logo"><a href="{{url('/')}}"><img src="{{ asset('tempuser/images/logo.png') }}"
                                                              alt="FlatShop"></a></div>
            </div>
            <div class="col-md-10 col-sm-10">
                <div class="header_top">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="option_nav">
                                <li class="dorpdown">
                                    <a href="#">Eng</a>
                                    <ul class="subnav">
                                        <li><a href="#">Eng</a></li>
                                        <li><a href="#">Vns</a></li>
                                        <li><a href="#">Fer</a></li>
                                        <li><a href="#">Gem</a></li>
                                    </ul>
                                </li>
                                <li class="dorpdown">
                                    <a href="#">USD</a>
                                    <ul class="subnav">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">UKD</a></li>
                                        <li><a href="#">FER</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="topmenu">
                                <li><a href="#">Thực Tập</a></li>
                                <li><a href="#">Nguyễn Ngọc Thành</a></li>
                                <li><a href="#">Học Viện Công Nghệ Bưu Chính Viễn Thông</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            @if(Auth::check())
                                <ul class="usermenu">
                                    <li><a href="#">{!! Auth::user()->name !!}</a></li>
                                    <li><a href="{{url('dangxuat')}}" class="reg">Logout</a></li>
                                </ul>
                            @else
                                <ul class="usermenu">
                                    <li><a href="{{url('dangnhap')}}" class="log">Login</a></li>
                                    <li><a href="{{url('dangki')}}" class="reg">Register</a></li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="header_bottom">
                    <ul class="option">
                        <li id="search" class="search">
                            <form action="{{route('user.timkiem')}}" method="get"><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Nhập sản phẩm cần tìm..." type="text" value="" name="search"></form>
                        </li>
                        <li class="option-cart">
                            <a href="{{url('gio-hang')}}" class="cart-icon">cart <span class="cart_no"></span></a>
                            {{--{{ $allqty }}--}}
                            {{--<ul class="option-cart-item">--}}
                            {{--@foreach($producr_cart as $item)--}}
                            {{--<li>--}}
                            {{--<div class="cart-item">--}}
                            {{--<div class="image"><img src="{!! $item->options['size'] !!}" alt=""></div>--}}
                            {{--<div class="item-description">--}}
                            {{--<p class="name">{{$item->name}}</p>--}}
                            {{--<p>Quantity: <span class="light-red">{!! $item->qty !!}</span></p>--}}
                            {{--</div>--}}
                            {{--<div class="right">--}}
                            {{--<p class="price">{!!number_format($item->price,0,",",".") !!}</p>--}}
                            {{--<a href="#" class="remove"><img src="tempuser/images/remove.png" alt="remove"></a>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--@endforeach--}}
                            {{--<li><span class="total">Total <strong>{!! $total !!}</strong></span><button class="checkout" onClick="location.href='{{url('gio-hang')}}'">CheckOut</button></li>--}}
                            {{--</ul>--}}
                        </li>
                    </ul>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span
                                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <!--tao mot du lieu-->
                            <?php
                            $menu_root = DB::table('cate')->where('parent_id', 0)->get();
                            ?>
                            @foreach($menu_root as $item_root)
                                <li class="active dropdown">
                                    <a href="#" class="dropdown-toggle"
                                       data-toggle="dropdown">{!! $item_root->name !!}</a>
                                    <!-- tra ve kieu opject nen phai tro den name-->
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu-links">
                                            <?php
                                            $menu_con = DB::table('cate')->where('parent_id', $item_root->id)->get();
                                            ?>
                                            @foreach($menu_con as $item_con)
                                                <li>
                                                    <a href="{{url('sanphamtheoloai',[$item_con->id, $item_con->alias]) }}">{!! $item_con->name !!}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                            <li><a href="contact.html">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>