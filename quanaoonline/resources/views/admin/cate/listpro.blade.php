@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách Sản Phẩm Theo Loại: {!! $nameCate->name !!}</h1>
                </div>
                <!-- /.col-lg-12 -->
                {{--id="dataTables-example" namg trong table--}}
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead style="color: #3b3b1f; background-color: #047d65">
                    <tr align="center">
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Hình Ảnh</th>
                        <th style="text-align: center">Tên S/Phẩm</th>
                        <th style="text-align: center">Giá</th>
                        <th style="text-align: center">Số Lượng</th>
                        <th style="text-align: center">Trạng Thái</th>
                        <th style="text-align: center">Xóa</th>
                        <th style="text-align: center">Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productByID as $item)
                        <tr class="odd gradeX" align="center">
                            <td style="line-height: 100px">{!! $item->id !!}</td>
                            <td style="line-height: 100px"><div><img src="upload/{{$item->image}}" style="width: 80px; height: 100px; margin-top: 10px;"></div></td>
                            <td style="line-height: 100px">{!! $item->name !!}</td>
                            <td style="line-height: 100px">{!! number_format($item->price,0,'.','.') !!}</td>
                            <td style="line-height: 100px">{!! $item->quantily !!}</td>
                            @if($item->status == 1)
                                <td style="line-height: 100px">Hiển Thị</td>
                            @endif
                            @if($item->status == 2)
                                <td style="line-height: 100px">Ẩn</td>
                            @endif
                            <td class="center" style="line-height: 100px"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.product.delete',['id' => $item->id]) }}"> Delete</a></td>
                            <td class="center" style="line-height: 100px"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.product.edit',['id' => $item->id]) }}">Edit</a></td>
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