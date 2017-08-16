@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm Danh Mục Loại Sản Phẩm</h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(Session::has('message'))
                <div class="alert alert-success">{!! session('message') !!}</div>
            @endif
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.cate.add') }}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Menu Gốc Chứa Danh Mục Cần Thêm</label>
                        <select class="form-control" name="select">
                            @foreach($listMenuRoot as $item)
                                <option value="{!! $item->id !!}" id="{!! $item->id !!}">{!! $item->name !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label>Tên Danh Mục</label>
                        <input class="form-control" name="name" placeholder="Nhập tên danh mục."/>
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label>Mô Tả Danh Mục</label>
                        <textarea class="form-control" rows="3" name="description"></textarea>
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label>Hiện Danh Mục?</label>--}}
                        {{--<label class="radio-inline">--}}
                            {{--<input name="rdoStatus" value="1" checked="" type="radio">Hiện--}}
                        {{--</label>--}}
                        {{--<label class="radio-inline">--}}
                            {{--<input name="rdoStatus" value="2" type="radio">Ẩn--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    <button type="submit" class="btn btn-default">Thêm Danh Mục</button>
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