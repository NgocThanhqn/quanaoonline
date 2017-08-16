@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách Đơn Đặt Hàng</h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead style="color: #3b3b1f; background-color: #047d65">
                    <tr align="center">
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Tên Khách Hàng</th>
                        <th style="text-align: center">Địa Chỉ</th>
                        <th style="text-align: center">Số Diện Thoại</th>
                        <th style="text-align: center">Ngày Đặt</th>
                        <th style="text-align: center">Tổng Tiền</th>
                        <th style="text-align: center">Thanh Toán</th>
                        <th style="text-align: center">Tình Trạng</th>
                        <th style="text-align: center">Xem Chi Tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bills as $item)
                        <tr class="odd gradeX" align="center">
                            <td style="line-height: 80px">{!! $item->id !!}</td>
                            <td style="line-height: 50px">{!! $item->name !!}</td>
                            <td style="line-height: 50px">{!! $item->address !!}</td>
                            <td style="line-height: 50px">{!! $item->phone !!}</td>
                            <td style="line-height: 50px">{{  $item->date_order }} </td>
                            <td style="line-height: 50px">{{  $item->total }} </td>
                            <td style="line-height: 50px">{!! $item->payment !!}</td>
                            @if($item->status == 0)
                                <td style="line-height: 80px">
                                    <input type="checkbox" class="kiemtra" name="{!! $item->name !!}">
                                </td>
                            @else
                                <td style="line-height: 80px">
                                    <input type="checkbox" class="kiemtra" name="{!! $item->name !!}" checked disabled>
                                </td>
                            @endif
                            <td class="center" style="line-height: 80px"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="{{ route('admin.bill.show',['id' => $item->id]) }}">Xem</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection