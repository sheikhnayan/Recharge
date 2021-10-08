@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIM Selling List</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>
@endsection
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3 p-3">
              <h5><i class="fas fa-search mr-2"></i>Search Order</h5>
              <div class="selling_search_group">
                <input type="text" name="table_search_input" data-table="table-info" class="form-control mr-2 light-table-filter" placeholder="Offer Number, ICCID Number, SIM Number, Order By etc..">
                {{-- <div class="form-group mr-2">
                  <select class="custom-select" id="">
                    <option>Select Status</option>
                    <option>Completed</option>
                    <option>Incompleted</option>
                  </select>
                </div> --}}
                {{-- <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button> --}}
              </div>
            </div>
            <div class="card mt-3">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-list" style="margin-right: 10px;"></i>
                  <strong>SIM Selling List</strong>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 550px;">
                <table class="table table-info table-sm table-bordered table-hover table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="background: #faaeae;">#</th>
                      <th style="background: #faaeae;">Order ID</th>
                      <th style="background: #faaeae;">Offer</th>
                      <th style="background: #faaeae;">ICCID Number</th>
                      <th style="background: #faaeae;">Order Date</th>
                      <th style="background: #faaeae;">Order By</th>
                      <th class="text-center" style="background: #faaeae;">Status</th>
                      @if (Auth::user()->role == 'admin')
                      <th class="text-center" style="background: #faaeae;">Update</th>
                      @endif
                      <th class="text-center" style="background: #faaeae;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr class="bg-ocean">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->offer }}</td>
                      <td>{{ $item->iccid }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td>{{ $item->users->nationality }}</td>
                      @if($item->status == 'sold')
                      <td><span class="badge badge-success">Completed</span></td>
                      @else
                      <td><span class="badge badge-primary">{{ $item->status }}</span></td>
                      @endif
                      @if (Auth::user()->role == 'admin')
                      <td> 
                        <form action="/sim-order/update" method="POST">
                          @csrf

                          <input type="hidden" name="sim_id" value="{{$item->sim_id}}">

                          <input type="hidden" name="id" value="{{$item->id}}">

                          <select name="status" style="width: 120px">
                              <option {{$item->status == 'available' ? 'selected' : '' }} value="available">Available</option>
                              <option {{$item->status == 'pending' ? 'selected' : '' }} value="pending">Pending</option>
                              <option {{$item->status == 'sold' ? 'selected' : '' }} value="sold">Completed</option>
                          </select>
                          <input type="submit" value="Update" class="btn btn-success">
                          </form>  
                      </td>
                      @endif
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="/sim-invoice/{{ $item->id }}" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="/sim-download/{{ $item->id }}" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@section('scripts')
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
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection