@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm sản Phẩm Mới</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <form action="{{ route('admin.product.add') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{--<input type="hidden" value="{{ csrf_token() }}"> --}}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label>Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm"/>
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label>Name alias</label>--}}
                        {{--<input type="text" class="form-control" name="alias" placeholder="Please Enter Username"/>--}}
                    {{--</div>--}}
                    <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                        <label>Giá Sản Phẩm</label>
                        <input type="number" min="1000" class="form-control" name="price" placeholder="Nhập gía sản phẩm"/>
                        <span class="help-block">{{ $errors->first('price') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('intro') ? 'has-error' : '' }}">
                        <label>Giới Thiệu</label>
                        <textarea class="form-control" rows="3" name="intro"></textarea>
                        <span class="help-block">{{ $errors->first('intro') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                        <label>Nội Dung Chính Sản Phẩm</label>
                        <textarea class="form-control" rows="3" name="content"></textarea>
                        <span class="help-block">{{ $errors->first('content') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('images') ? 'has-error' : '' }}">
                        <label>Hình Ảnh Chính</label>
                        <input type="file" name="images">
                        <span class="help-block">{{ $errors->first('images') }}</span>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label>Từ Khóa Sản Phẩm</label>--}}
                        {{--<input type="text" class="form-control" name="key" placeholder="Please Enter Category Keywords"/>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Mô Tả Sản Phẩm</label>--}}
                        {{--<textarea class="form-control" name="description" id="editor1" rows="3"></textarea>--}}
                    {{--</div>--}}
                    {{--chọn tên thể loại--}}
                    <div class="form-group {{ $errors->has('select') ? 'has-error' : '' }}">
                        <label>Sản Phẩm Thuộc Loại Nào</label>
                        <select class="form-control" name="select">
                            <option value="">Chọn loai sản phẩm</option>
                            {{--tên nhà cung cấp--}}
                            @foreach($cateSelect as $item)
                            <option value="{!! $item->id !!}" id="{!! $item->id !!}">{!! $item->name !!}</option>
                            @endforeach
                            {{--end ten nha cung cap--}}
                        </select>
                        <span class="help-block">{{ $errors->first('select') }}</span>
                    </div>
                    {{--end tên thể loại--}}
                    <div class="form-group {{ $errors->has('quanlity') ? 'has-error' : '' }}">
                        <label>Số Lượng Sản Phẩm</label>
                        <input type="number" min="0" class="form-control" name="quanlity" rows="3"></input>
                        <span class="help-block">{{ $errors->first('quanlity') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Trạng Thái Sản Phẩm</label>
                        <label class="radio-inline">
                            <input name="status" value="1" checked="" type="radio">Hiện Sản Phẩm
                        </label>
                        <label class="radio-inline">
                            <input name="status" value="2" type="radio">Ẩn Sản Phẩm
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm Sản Phẩm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection