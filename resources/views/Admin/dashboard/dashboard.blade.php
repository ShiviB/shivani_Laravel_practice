@extends('Website.layouts.app')

@section('title', 'OkRecharge | Dashboard' )



@push('header_styles')
@endpush   

@push('header_script')
@endpush

@section('heading')
<h1>
    Dashboard, Welcome {{ Auth::user()->first_name }}
</h1>
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
</ol>
@endsection

@section('content')
<div class="row">

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-list-outline"></i></span>
        <div class="info-box-content">
          <span>Total Orders</span>
          <span class="info-box-number">{{$count['total_orders']}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="ion ion-ios-list-outline"></i></span>

        <div class="info-box-content">
          <span>Today's Order</span>
          <span class="info-box-number">{{$count['today_orders']}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="ion ion-ios-list-outline"></i></span>

        <div class="info-box-content">
          <span>Completed Orders</span>
          <span class="info-box-number">{{$count['completed_orders']}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-list-outline"></i></span>

        <div class="info-box-content">
          <span>Pending Orders</span>
          <span class="info-box-number">{{$count['pending_orders']}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

</div>
<!-- /.row -->
@endsection

@push('footer_styles')
@endpush

@push('footer_script')
<!-- FLOT CHARTS -->

<script src="{{ url('admin/bower_components/Flot/jquery.flot.js') }}"></script>
<script src="{{ url('admin/bower_components/Flot/jquery.flot.categories.js') }}"></script>

@endpush 