@extends('admin.layouts.master')
@section('title') Edit Gallary @endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Gallary
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
                        <h3 class="box-title">Edit Gallary</h3>
                        <a href="{{url('instructors/add')}}" class="pull-right btn btn-xs btn-primary">Add New Recors</a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    @if($errors->any())
    {{ implode('', $errors->all('<div class="text-danger">:message</div>')) }}
@endif
                    <form role="form" autocomplete="off" action="{{url('gallary/update/'.$selected_record->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="box-body form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" value="{{old('title',$selected_record->title)}}"
                                    class="form-control @if ($errors->has('title')) {{'is-invalid'}}  @endif"
                                    placeholder="Enter Title">
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="exampleInputFile">Images</label>
                                <input type="file" class="form-control" name="image">
                                @if ($errors->has('images'))
                                <span class="text-danger">{{ $errors->first('images') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" name="desc" value="{{old('desc',$selected_record->desc)}}"
                                    class="form-control @if ($errors->has('desc')) {{'is-invalid'}}  @endif"
                                    placeholder="Description">
                                @if ($errors->has('desc'))
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Category</label>
                                <select name="cat_id" class="form-control">
                                    @if(isset($category_list) && count($category_list))
                                    @foreach($category_list as $row)
                                    <option value="{{$row->id}}" @if($selected_record->cat_id==$row->id) {{'selected'}} @endif>{{$row->title}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('cat_id'))
                                <span class="text-danger">{{ $errors->first('cat_id') }}</span>
                                @endif
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