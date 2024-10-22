@extends('admin.layouts.master')
@section('title') About @endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            About
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
                        <h3 class="box-title">About</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" autocomplete="off" action="{{url('admin/about/'.$about->id)}}" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="box-body">
                            <div class="form-group col-md-6 text-center">
                                @if($about->image)
                                <img src="{{url('about/'.$about->image)}}" alt="logo" srcset="" height="70"
                                    width="70" />
                                @else
                                <span class="text-danger ">No Logo</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Logo</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group col-md-offset-6 col-md-6">
                                <input type="text" name="title" value="{{$about->title}}"
                                    class="form-control @if ($errors->has('title')) {{'is-invalid'}}  @endif"
                                    placeholder="Title">
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="description" class="form-control"  rows="3" placeholder="Description" >
                                {{old('description',$about->description)}}
                                </textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger" >{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection