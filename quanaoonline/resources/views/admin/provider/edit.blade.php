@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Provider
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Provider Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Please Enter Provider Name"/>
                    </div>

                    <div class="form-group">
                        <label>Provider Address</label>
                        <input type="text" class="form-control" name="address"></input>
                    </div>

                    <div class="form-group">
                        <label>Provider PhoneNumber</label>
                        <input type="number" class="form-control" name="phone"></input>
                    </div>

                    <div class="form-group">
                        <label>Provider Email</label>
                        <input type="email" class="form-control" name="email"></input>
                    </div>

                    <button type="submit" class="btn btn-default">Provider Edit</button>
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