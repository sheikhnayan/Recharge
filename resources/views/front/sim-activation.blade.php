@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIM List</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}"></head>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if(Auth::user()->role == 'admin')
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header mb-3">
                <h3 class="card-title"><strong>Add to List</strong></h3>
              </div>
              <!-- /.card-header -->
              <form action="/add-sim" method="POST">
                @csrf
                <div class="row px-3 justify-content-center">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Oparetor</label>
                        <select class="form-control select2" name="operator" style="width: 100%;">
                          @foreach ($operator as $operator)
                            <option value="{{ $operator->operator }}">{{ $operator->operator }}</option>                          
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="mb-3">
                        <label for="inputLastName" class="form-label">SIM Number</label>
                        <input type="text" class="form-control" name="sim_number" placeholder="01710-000000">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="mb-3">
                        <label for="inputLastName" class="form-label">ICCID Number</label>
                        <input type="text" class="form-control" name="iccid" placeholder="3654987414156">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Re-Seller</label>
                        <select class="form-control select2" name="re_seller" style="width: 100%;">
                          @foreach ($user as $item)
                              <option value="{{ $item->id }}">{{ $item->nationality }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="mb-3">
                        <label for="inputLastName" class="form-label">Price</label>
                        <input type="text" class="form-control" name="buy_price" placeholder="€20">
                      </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="form-control btn btn-success" value="Add" style="margin-top: 31px;">
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        @endif
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i><strong>Sale List</strong> (Total- {{ $total }} SIM)</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" data-table="table-info" class="form-control float-right light-table-filter" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 550px;">
                <table class="table table-info table-sm table-bordered table-hover table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="background: #faaeae;">SL</th>
                      <th style="background: #faaeae;">Operator</th>
                      <th style="background: #faaeae;">ICCID Number</th>
                      <th style="background: #faaeae;">SIM Number</th>
                      <th style="background: #faaeae;">Buy Date</th>
                      <th style="background: #faaeae;">Buy Price</th>
                      <th class="text-center" style="background: #faaeae;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($show as $item)
                    <tr class="bg-ocean">
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->operator }}</td>
                      <td>{{ $item->iccid }}</td>
                      <td>{{ $item->sim_number }}</td>
                      <td>{{ $item->buy_date }}</td>
                      <td>{{ $item->buy_price }}</td>
                      <td class="text-center">
                        <a href="/buy-sim/{{ $item->id }}" type="button" class="btn btn-info btn-sm">Sale</a>
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
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('js/select2.full.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection

@section('js')
<script>
  $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    })
</script>
@endsection