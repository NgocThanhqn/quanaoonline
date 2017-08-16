<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin Fashion</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="tempadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="tempadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="tempadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="tempadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="tempadmin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="tempadmin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

<div id="wrapper" style="background-color: #3b3b1f">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: darkcyan">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" style="color: whitesmoke">Quản Lý Hệ Thống Shop</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông Tin Nhân Viên</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cái Đặt</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation" style="background-color: #3b3b1f">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-ambulance"></i> Hóa Đơn Nhập Hàng<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/billinput/list-billinput') }}">Danh Sách Phiếu Nhập Hàng</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/billinput/add-billinput') }}">Thêm Phiếu Nhập Hàng</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Danh Mục Loại Sản Phẩm<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/cate/list-cate') }}">Danh Sách Loại Sản Phẩm</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/cate/add-cate') }}">Thêm Loại Sản Phẩm</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cube fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ url('admin/product/list-product') }}">Danh Sách Sản Phẩm</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/product/add-product') }}">Thêm Sảm Phẩm Mới</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    {{--quan ly hoa don dat hang--}}
                    <li>
                        <a href="#"><i class="fa fa-institution"></i> Quản Lý Đơn Đặt Hàng<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/admin/bill/list-bill')}}">Danh Sách Đơn Đặt Hàng</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/provider/add-provider')}}">Thống Kê</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    {{--quan ly hoa don dat hang--}}
                    {{--nhà cong cấp--}}
                    <li>
                        <a href="#"><i class="fa fa-institution"></i> Nhà Cung Cấp<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/admin/provider/list-provider')}}">Danh Sách Nhà Cung Cấp</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/provider/add-provider')}}">Thâm Nhà Cung Cấp</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    {{--kết thúc nhà cung cấp--}}
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Tài Khoản Nhân Viên<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Danh Sách Nhân Viên</a>
                            </li>
                            <li>
                                <a href="#">Thêm Nhân Viên</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    @yield('content');
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="tempadmin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="tempadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="tempadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="tempadmin/dist/js/sb-admin-2.js"></script>
<script src="tempadmin/js/myscript.js"></script>

<!-- DataTables JavaScript -->
<script src="tempadmin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="tempadmin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
</body>

</html>
