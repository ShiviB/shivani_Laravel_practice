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
          <span>Avaible Balence</span>
          <span class="info-box-number">100,00</span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-list-outline"></i></span>
        <div class="info-box-content">
          <span>Total Distributor</span>
          <span class="info-box-number">{{$distributor}}</span>
        </div>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="ion ion-ios-list-outline"></i></span>

        <div class="info-box-content">
          <span>Total Retailer</span>
          <span class="info-box-number">{{$retailer}}</span>
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
          <span>Operators</span>
          <span class="info-box-number">{{$operator}}</span>
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
            <span>Total Transactions</span>
            <span class="info-box-number">{{$transaction}}</span>
        </div>
      </div>
   </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-list-outline"></i></span>
          <div class="info-box-content">
              <span>Todays's Transactions</span>
              <span class="info-box-number">{{$today_transaction}}</span>
          </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-list-outline"></i></span>
          <div class="info-box-content">
              <span>Total Recharge</span>
              <span class="info-box-number">{{$total_recharge}}</span>
          </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-list-outline"></i></span>
          <div class="info-box-content">
              <span>Todays's Recharge</span>
              <span class="info-box-number">{{$today_recharge}}</span>
          </div>
        </div>
    </div>

  

</div>
<!-- /.row -->
@endsection

@push('footer_styles')
@endpush

@push('footer_script')



@endpush 