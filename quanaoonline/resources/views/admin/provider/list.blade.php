@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Provider
                    <small>List</small>
                </h1>
            </div>
            @if(Session::has('thongbao'))
                <div class="alert alert-success">{!! session('thongbao') !!}</div>
            @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    {{--<th>Status</th>--}}
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($provider as $pro)
                <tr class="odd gradeX" align="center">
                    <td>{!! $pro->id !!}</td>
                    <td>{!! $pro->name !!}</td>
                    <td>{!! $pro->address !!}</td>
                    <td>{!! $pro->phone !!}</td>
                    <td>{!! $pro->email !!}</td>
                    {{--<td>Hiện</td>--}}
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
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