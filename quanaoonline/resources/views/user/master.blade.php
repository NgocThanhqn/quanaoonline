<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Welcome to FlatShop</title>
    <base href="{{asset('')}}">
    <link href="tempuser/css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="tempuser/css/font-awesome.min.css" rel="stylesheet">
    <link href="tempuser/css/flexslider.css" type="text/css" rel="stylesheet"  media="screen"/>
    <link href="tempuser/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
    <link href="tempuser/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<body id="home">
<div class="wrapper">

    <!-- mục cho header-->
    @include('user.blocks.header')
    <!-- mục cho header-->
    <div class="clearfix"></div>
    <!-- mục cho slider-->
    @include('user.blocks.slider');
    <!-- end mục cho slider-->

    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <!-- mục cho xuất sản phẩm-->
        @yield('content')
        <!-- mục cho xuất sản phẩm-->
    </div>
    <div class="clearfix"></div>
    <div class="footer">
        <div class="footer-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="tempuser/images/logo.png" alt=""></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                        <p>No. 97, Man Thiện, Hiệp Phú , Quận 9</p>
                        <p>Call Us : 01645191604</p>
                        <p>Email : ngocthanhqn95@gmail.com</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Payment Option</a></li>
                            <li><a href="#">Booking Tips</a></li>
                            <li><a href="#">Infomation</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Lorem ipsum dolor ipsum dolor.</p>
                        <form class="newsletter">
                            <input type="text" name="" placeholder="Type your email....">
                            <input type="submit" value="SignUp" class="button">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright © 2017. Designed by <a href="#">Nguyễn Ngọc Thành</a>. All rights reseved</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-icon">
                            <li><a href="#" class="linkedin"></a></li>
                            <li><a href="#" class="google-plus"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript==================================================-->
{{--<script type="text/javascript" src="tempuser/js/jquery-1.10.2.min.js"></script>--}}
<script type="text/javascript" src="tempuser/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="tempuser/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="tempuser/js/bootstrap.min.js"></script>
<script type="text/javascript" src="tempuser/js/jquery.sequence-min.js"></script>
<script defer src="tempuser/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="tempuser/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="tempuser/js/jquery.elevatezoom.js" ></script>
<script type="text/javascript" src="tempuser/js/script.min.js" ></script>
<script type="text/javascript" src="tempuser/js/myquery.js" ></script>
{{--<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>--}}
{{--<script> CKEDITOR.replace('editor1'); </script>--}}
</body>
</html>