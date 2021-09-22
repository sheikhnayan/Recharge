@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cargo Order Tracking</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
<link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}"></head>
<style>
  footer{
    margin-left:0px !important
  }
</style>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 phone_order_header d-block">
            <form action="{{route('track')}}">
            <div class="order_page_header mb-4">
              <h4><i class="fas fa-hand-point-right"></i>Order Tracking</h4>
              <a href="/cargo/new-order"><i class="fas fa-plus-circle"></i>New Order</a>
            </div>
            <div class="input-group mb-4">
              <label for="inputTrackingNumber" class="form-label" style="margin: 5px 15px 0 0;">Order/Tracking Number</label>
              <input type="text" class="form-control" id="inputTrackingNumber" name="order_no" placeholder="JLC0001234">
              <button type="submit" class="input-group-text tracking-btn" id="basic-addon2">Search</button>
            </div>
            </form>
          </div>
        </div>
        @if(Route::currentRouteName() != '/cargo/order-tracking-view')   
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">Id
              </th>
              <th class="th-sm">Date
              </th>
              <th class="th-sm">Agent
              </th>
              {{-- <th class="th-sm">City
              </th> --}}
              <th class="th-sm">Customer
              </th>
              <th class="th-sm">Receiver
              </th>
              <th class="th-sm">Box
              </th>
              <th class="th-sm">Weight
              </th>
              <th class="th-sm">Charge
              </th>
              <th class="th-sm">Goods Type
              </th>
              <th class="th-sm">Destination
              </th>
              <th class="th-sm">Status
              </th>
              <th class="th-sm">Action
              </th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($orders as $order)
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->created_at}}</td>
              <td>{{ $agent->nationality }}</td>
              {{-- <td>{{$order->city}}</td> --}}
              <td>{{$order->first_name}}</td>
              <td>{{$order->rfirst_name}}</td>
              <td>{{$order->numberOfBox}}</td>
              <td>{{$order->weight}}</td>
              <td>{{$order->total}}</td>
              <td>{{$order->productType}}</td>
              <td>{{$order->raddress}}</td>
              <td>{{$order->status}}</td>
              <td><button type="button" class="btn btn-info btn-xs dropdown-toggle btn-info" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-gear tiny-icon"></i><span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li> <a class="dropdown-item" target="_blank" href="/cargo/order-invoice/{{ $order->id }}"><i class="fa fa-print tiny-icon"></i> Print Invoice </a></li>
                    <li> <a class="dropdown-item" href="/cargo/order/cancel/{{ $order->id }}"><i class="fa fa-print tiny-icon"></i> Cancel </a></li>
                  </ul>
              </td>
            </tr>
            @endforeach
            </div>
        </table>
      @endif
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection
