@extends('admin.layouts.master')
@section('title') Members @endsection
@section('footerjs')
<script type="text/javascript">
$(function() {
    $("#example1").dataTable();
});
</script>
@endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Members
            <small>Info</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Members</li>
        </ol>
    </section>
    @include('flash-message')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Members </h3>
                        <a href="{{url('instructors/add')}}" class="pull-right btn btn-xs btn-primary">Add New Recors</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($all_list))
                                @foreach($all_list as $row)
                                <tr>
                                    <td>
                                        @if($row->image)
                                        <img src="{{url('instructors/'.$row->image)}}" height="70" width="70" class="img-circle" alt="" srcset="">
                                        @endif
                                    </td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->designation}}</td>
                                    <td>
                                      <div class="btn-group">
                                      <a href="{{url('instructors/delete/'.$row->id)}}"><i class="fa fa-trash text-danger btn"></i></a>
                                      <a href="{{url('instructors/edit/'.$row->id)}}"><i class="fa fa-edit text-success btn"></i></a>
                                      </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" class="text-center text-danger">no data </td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection