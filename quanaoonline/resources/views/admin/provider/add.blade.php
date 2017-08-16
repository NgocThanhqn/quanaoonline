@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Provider
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-lg-7" style="padding-bottom:120px">
                @if (session('thongbao'))
                    <div class="alert alert-success">{{ session('thongbao') }}</div>
                @endif
                <form action="{{route('provider.add')}}" method="post">
                    {{csrf_field()}}
                    {{--<input type="hidden" name="_token" value="{!! csrf_token()  !!}">--}}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label>Provider Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Please Enter Provider Name" value="{{ old('name') }}"/>
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                        <label>Provider Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Please Enter Provider Address"></input>
                        <span class="help-block">{{ $errors->first('address') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label>Provider PhoneNumber</label>
                        <input type="text" class="form-control" name="phone" placeholder="Please Enter Provider Phone"></input>
                        <span class="help-block">{{ $errors->first('phone') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label>Provider Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Provider Email" value="{{ old('email') }}"></input>
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    </div>

                    <button type="submit" class="btn btn-default">Provider Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection