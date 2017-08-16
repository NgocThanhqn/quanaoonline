@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chi Tiết Phiếu Nhập Ngày: {!! $dateInput->date_input !!}
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th style="text-align: center">STT</th>
                        <th style="text-align: center">Tên Sản Phẩm</th>
                        <th style="text-align: center">Giá</th>
                        <th style="text-align: center">Số Lượng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt = 0; ?>
                    @foreach($listInputDetail as $item)
                        {{--lay  ten san pham--}}
                        <?php
                                $nameProduct = DB::table('products')->select('name')->where('id', $item->product_id)->first();
                        ?>
                        <tr>
                            <td style="text-align: center">{!! $stt + 1 !!}</td>
                            <td style="text-align: center">{!! $nameProduct->name !!}</td>
                            <td style="text-align: center">{!! number_format($item->price,0,'.','.') !!}</td>
                            <td style="text-align: center">{!! $item->quantity !!}</td>
                        </tr>
                        <?php $stt+=1 ?>
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