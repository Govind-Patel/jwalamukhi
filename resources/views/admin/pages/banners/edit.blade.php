@extends('admin.layouts.master')
@section('title') Edit Members @endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Member
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
                        <h3 class="box-title">Edit Member</h3>
                        <a href="{{url('instructors/add')}}" class="pull-right btn btn-xs btn-primary">Add New Recors</a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" autocomplete="off" action="{{url('instructors/update/'.$instructor->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="{{old('name',$instructor->name)}}"
                                    class="form-control @if ($errors->has('name')) {{'is-invalid'}}  @endif"
                                    
                                    id="exampleInputEmail11" placeholder="Enter Name">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Designation</label>
                                <input type="text" name="designation" value="{{old('name',$instructor->designation)}}"
                                    class="form-control @if ($errors->has('designation')) {{'is-invalid'}}  @endif"
                                     placeholder="Designation">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputFile">Picture</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Twiter</label>
                                <input type="url" name="twiter" class="form-control" 
                                    placeholder="Twiter" 
                                    value="{{$instructor->twiter}}"
                                    >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Facebook</label>
                                <input type="url" name="facebook" class="form-control" 
                                    placeholder="Facebook"
                                    value="{{$instructor->facebook}}"
                                    >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Linkedin</label>
                                <input type="url" name="linkedin" class="form-control" 
                                    placeholder="Linkedin"
                                    value="{{$instructor->linkedin}}"
                                    >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Insta</label>
                                <input type="url" name="insta" class="form-control" 
                                    placeholder="Insta">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Youtube</label>
                                <input type="text" name="youtube" class="form-control" 
                                    placeholder="Youtube" value="{{$instructor->youtube}}" >
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
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