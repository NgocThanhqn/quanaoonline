@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách Phiếu Nhập</h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Tên Nhà Cung Cấp</th>
                        <th style="text-align: center">Ngày Lập HĐ</th>
                        <th style="text-align: center">Tổng Giá</th>
                        <th style="text-align: center">Người Lập</th>
                        <th style="text-align: center">Chi Tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listBillInput as $item)
                        <?php
                            $namrProvider = DB::table('providers')->select('name')->where('id', $item->provider_id)->first();
                            $nameAdmin = DB::table('users')->select('username')->where('id', $item->user_id)->first();
                            $nDetail = DB::table('bill_input_details')->where('input_id', $item->id)->get();
                            $tong = 0;
                            foreach($nDetail as $itemDetail){
                                $tong+=$itemDetail->price*$itemDetail->quantity;
                            }
                        ?>
                        <tr class="odd gradeX" align="center">
                            <td rowspan="" style="line-height: 50px">{!! $item->id !!}</td>
                            <td style="line-height: 50px">{!! $namrProvider->name !!}</td>
                            <td style="line-height: 50px">{{ $item->date_input }}</td>
                            <td style="line-height: 50px">{!! number_format($tong,0,'.','.') !!}</td>
                            <td style="line-height: 50px">{!! $nameAdmin->username !!}</td>
                            <td class="center" style="line-height: 50px"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.billinput.show',['id' => $item->id]) }}">Xem</a></td>
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