@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh Sách Danh Mục Sản Phẩm</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listCate as $item)
                <tr class="odd gradeX" align="center">
                    <td>{!! $item->id !!}</td>
                    <td>{!! $item->name !!}</td>
                    <td>{!! $item->description !!}</td>
                    <td class="center"><a href="{{ route('admin.cate.show',['id' => $item->id]) }}"> Xem</a></td>
                    <td class="center"><a href="#">Sửa</a></td>
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