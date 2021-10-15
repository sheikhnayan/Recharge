@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cargo Order List</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 phone_order_header d-block">
            <div class="order_page_header d-inline-block mb-2">
              <h4 class="d-inline-block"><i class="fas fa-copy"></i>Order List</h4>
              <a href="{{url('add-new-pricing')}}" class="d-inline-block" style="float: right;"><i class="fas fa-plus-circle"></i>New Pricing</a>
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control light-table-filter" data-table="table-info" placeholder="Search old order" aria-label="Search old order"
                aria-describedby="basic-addon2">
              <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
            </div>
            {{-- <div class="mb-2 text-center">
              <button type="button" class="btn btn-success btn-sm cargo_order_list_btn">
                <i class="fas fa-file-excel"></i>
                Export Excel
              </button>
              <button type="button" class="btn btn-danger btn-sm cargo_order_list_btn">
                <i class="fas fa-file-pdf"></i>
                Export PDF
              </button>
              <button type="button" class="btn btn-info btn-sm cargo_order_list_btn">
                <i class="fas fa-print"></i>
                Print
              </button>
            </div> --}}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-body">
            <div class="row pb-3">
              <div class="col-12  table-responsive p-0" style="height: 550px;">
                <table class="table-info table table-sm table-bordered table-hover table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="background: #faaeae;"><small>Order ID</small></th>
                      <th style="background: #faaeae;"><small>type</small></th>
                      <th style="background: #faaeae;"><small>Weight Start</small></th>
                      <th style="background: #faaeae;"><small>Weight End</small></th>
                      <th style="background: #faaeae;"><small>Charge For Weight</small></th>
                      <th style="background: #faaeae;"><small>Charge For Country</small></th>
                      <th style="background: #faaeae;"><small>Country Name</small></th>
                      <th style="background: #faaeae;"><small>Total</small></th>
                      <th style="background: #faaeae;"><small>Status</small></th>
                      <th style="background: #faaeae;"><small>Action</small></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $order)
                    <tr class="bg-ocean">
                      <td>{{$order->id}}</td>
                      <td>{{$order->type}}</td>
                      <td>{{$order->weight_start}}<!-- <br>20:42:30 --></td>
                      <td>{{$order->weight_end}}</td>
                      <td>{{$order->charge_for_weight}}</td>
                      <td>{{$order->charge_for_country}}</td>
                      <td>{{$order->country_name}}</td>
                      <td>{{$order->total}}</td>
                      <td>
                        <form action="/cargo_update" method="POST">
                          @csrf
                          <input type="hidden" name="reseller_id" value="{{ $order->reseller_id }}">
                          <input type="hidden" name="id" value="{{ $order->id }}">
                          <select name="status">
                            <option {{$order->status == '0' ? 'selected' : '' }} value="0">Not Applied</option>
                            <option {{$order->status == '1' ? 'selected' : '' }} value="1">Applied</option>
                          </select>

                          <input type="submit" class="btn btn-success" value="Update">
                        </form>
                      </td>
                      <td>
                        <div class="btn-group cargo_t-action_btn">
                          <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          </button>
                          <div class="dropdown-menu" role="menu">
                            
                            <a href="{{ url ('price-edit', ['id' => $order->id]) }}" class="dropdown-item"><i class="fas fa-edit"></i>Edit</a>
                            <a class="dropdown-item" href="{{ url ('price-delete', ['id' => $order->id]) }}"><i class="fas fa-eye"></i>Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.row --> 
            <div class="footer_pagination">
              <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                  {{$orders->links('pagination::bootstrap-4')}}
                  <!-- {{ $orders->links() }} -->
                </ul>
              </nav>
              
            </div>

            <!-- /.card-footer -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->  
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
    /* Code By Webdevtrick ( https://webdevtrick.com ) */
(function(document) {
'use strict';

var TableFilter = (function(Arr) {

var _input;

function _onInputEvent(e) {
_input = e.target;
var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
Arr.forEach.call(tables, function(table) {
Arr.forEach.call(table.tBodies, function(tbody) {
Arr.forEach.call(tbody.rows, _filter);
});
});
}

function _filter(row) {
var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
}

return {
init: function() {
var inputs = document.getElementsByClassName('light-table-filter');
Arr.forEach.call(inputs, function(input) {
input.oninput = _onInputEvent;
});
}
};
})(Array.prototype);

document.addEventListener('readystatechange', function() {
if (document.readyState === 'complete') {
TableFilter.init();
}
});

})(document);
  </script>
  <!-- /.content-wrapper -->
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

