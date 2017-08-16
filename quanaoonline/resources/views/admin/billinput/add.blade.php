@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhập Hàng</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('admin.billinput.add') }}" method="POST">
                    {{csrf_field()}}
                    @if(Session::has('message'))
                        <div class="alert alert-success">{!! session('message') !!}</div>
                    @endif
                    {{--chọn nhà cung cấp--}}
                    <div class="form-group {{ $errors->has('select') ? 'has-error' : '' }}">
                        <label>Tên nhà cung cấp</label>
                        <select class="form-control" name="select" value="{{ old('select') }}">
                            {{--tên nhà cung cấp--}}
                            @foreach($listprovider as $item)
                            <option value="{!! $item->id !!}" id="{!! $item->id !!}">{!! $item->name !!}</option>
                            @endforeach
                            {{--end ten nha cung cap--}}
                        </select>
                        <span class="help-block">{{ $errors->first('select') }}</span>
                    </div>
                    {{--end chọn nhà cung cấp--}}
                    <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
                        <label>Nhập mã sản phẩm (số ID)</label>
                        <input type="number" min="1" class="form-control" name="code" placeholder="Mã số ID của sản phẩm"/>
                        <span class="help-block">{{ $errors->first('code') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('quanlity') ? 'has-error' : '' }}">
                        <label>Số lượng nhập</label>
                        <input type="number" min="1" class="form-control" name="quantity" placeholder="Số lượng nhập vào"/>
                        <span class="help-block">{{ $errors->first('quanlity') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                        <label>Giá/Sản phẩm</label>
                        <input type="text" class="form-control" name="price" placeholder="Giá của sản phẩm"/>
                        <span class="help-block">{{ $errors->first('price') }}</span>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label>Total Price</label>--}}
                        {{--<input type="number" class="form-control" name="totalprice" readonly="readonly"/>--}}
                    {{--</div>--}}

                    <button type="submit" class="btn btn-default">Nhập hàng</button>
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