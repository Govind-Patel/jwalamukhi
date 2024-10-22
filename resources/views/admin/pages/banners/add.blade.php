@extends('admin.layouts.master')
@section('title') Add New Members @endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Banners
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>
    @include('flash-message')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add New Banners</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" autocomplete="off" action="{{url('instructorsave')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="{{old('name')}}"
                                    class="form-control @if ($errors->has('name')) {{'is-invalid'}}  @endif"
                                    id="exampleInputEmail11" placeholder="Enter Name">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Designation</label>
                                <input type="text" name="designation" value="{{old('name')}}"
                                    class="form-control @if ($errors->has('designation')) {{'is-invalid'}}  @endif"
                                    id="exampleInputPassword1" placeholder="Designation">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputFile">Picture</label>
                                <input type="file" class="form-control" name="image" id="exampleInputFile">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Twiter</label>
                                <input type="url" name="twiter" class="form-control" id="exampleInputPassword1d1"
                                    placeholder="Twiter">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Facebook</label>
                                <input type="url" name="facebook" class="form-control" id="exampleInputPassword12"
                                    placeholder="Facebook">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Linkedin</label>
                                <input type="url" name="linkedin" class="form-control" id="exampleInputPassword122"
                                    placeholder="Linkedin">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Insta</label>
                                <input type="url" name="insta" class="form-control" id="exampleInputPassword13"
                                    placeholder="Insta">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Youtube</label>
                                <input type="text" name="youtube" class="form-control" id="exampleInputPassword1da4"
                                    placeholder="Youtube">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

                <!-- Form Element sizes -->

                <!-- Input addon -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->

        </div> <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection