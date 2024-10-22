@extends('admin.layouts.master')
@section('title') Edit Gallary @endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Counter
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
                        <h3 class="box-title">Edit Counter</h3>
                        <!-- <a href="{{url('instructors/add')}}" class="pull-right btn btn-xs btn-primary">Add New Recors</a> -->
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" autocomplete="off" action="{{url('admin/counter/update/'.$selected_record->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="box-body form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Label</label>
                                <input type="text" name="label" value="{{old('label',$selected_record->label)}}"
                                    class="form-control @if ($errors->has('label')) {{'is-invalid'}}  @endif"
                                    placeholder="Enter label">
                                @if ($errors->has('label'))
                                <span class="text-danger">{{ $errors->first('label') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Value</label>
                                <input type="text" name="value" value="{{old('value',$selected_record->value)}}"
                                    class="form-control @if ($errors->has('value')) {{'is-invalid'}}  @endif"
                                    placeholder="value">
                                @if ($errors->has('value'))
                                <span class="text-danger">{{ $errors->first('value') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Color</label>
                                <input type="color" name="color" value="{{old('color',$selected_record->color)}}"
                                    class="form-control @if ($errors->has('color')) {{'is-invalid'}}  @endif"
                                    placeholder="Color">
                                @if ($errors->has('color'))
                                <span class="text-danger">{{ $errors->first('color') }}</span>
                                @endif
                            </div>
                            
                            
                            
                        </div><!-- /.box-body -->

                        <div class="box-footer mt-2">
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