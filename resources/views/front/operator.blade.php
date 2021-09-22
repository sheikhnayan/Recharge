@extends('front.layout.courier')

@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wi-fi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>

@endsection
@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <h2>Operators</h2>
          <form class="card" action="/operator" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin: 10px;" class="row justify-content-center">
                <div class="col-md-4">
                    <label style="font-weight: bold; color:black">Operator Name:</label>
                    <input class="form-control" type="text" value="" name="operator" placeholder="Enter Operator Name....">
                </div>
                <div class="col-md-4">
                    <label style="font-weight: bold; color:black">Operator Logo:</label>
                    <input class="form-control" type="file" value="" name="img">
                </div>
                <div class="col-md-4">
                    <input style="margin-top: 30px;width:100%" class="btn btn-success" type="submit" value="Add">
                </div>
            </div>
          </form>
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i><strong>Operator List</strong> (Total- {{ $total ?? "" }} Operator)</h3>
      
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
                    <div class="card-body table-responsive p-0" >
                      <table class="table table-info table-sm table-bordered table-hover table-head-fixed text-nowrap">
                        <thead>
                          <tr>
                            <th class="th-sm" style="background: #faaeae;">#</th>
                            <th class="th-sm" style="background: #faaeae;">Image</th>
                            <th class="th-sm" style="background: #faaeae;">Operator</th>
                            <th class="th-sm" style="background: #faaeae;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td><img style="width:150px;" class="img-fluid" src="{{asset('/storage/'.$item->img)}}" alt=""></td>
                              <td>{{$item->operator}}</td>
                              <td> <a class="btn btn-danger" href="/delete-operator/{{$item->id}}">Delete</a> </td>
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
        </div>
        </section>
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
         
      </div>
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