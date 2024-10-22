@extends('admin.layouts.master')
@section('title') Settings @endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Settings
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
                        <h3 class="box-title">Settings</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" autocomplete="off" action="{{url('admin/settings/'.$settings->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group col-md-6 text-center">
                                @if($settings->logo)
                                <img src="{{url('logo/'.$settings->logo)}}" alt="logo" srcset="" height="70" width="70"/>
                                @else
                                <span class="text-danger ">No Logo</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Logo</label>
                                <input type="file" class="form-control" name="logo">
                                @if ($errors->has('images'))
                                <span class="text-danger">{{ $errors->first('images') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="company_name" value="{{old('company_name',$settings->company_name)}}"
                                    class="form-control @if ($errors->has('company_name')) {{'is-invalid'}}  @endif"
                                    placeholder="Oganization Name">
                                @if ($errors->has('company_name'))
                                <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="Address" value="{{old('Address',$settings->Address)}}"
                                    class="form-control @if ($errors->has('Address')) {{'is-invalid'}}  @endif"
                                    placeholder="Address">
                                @if ($errors->has('Address'))
                                <span class="text-danger">{{ $errors->first('Address') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="phone" value="{{old('phone',$settings->phone)}}"
                                    class="form-control @if ($errors->has('phone')) {{'is-invalid'}}  @endif"
                                    placeholder="Phone">
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="email" value="{{old('email',$settings->email)}}"
                                    class="form-control @if ($errors->has('email')) {{'is-invalid'}}  @endif"
                                    placeholder="Email">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
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