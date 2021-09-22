@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Retailer Action</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}"></head>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i><strong>Retailer Action</strong></h3>

                <div class="card-tools retailer_active_search">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-sm table-hover table-head-fixed text-nowrap text-center">
                  <thead>
                    <tr>
                      <th style="background: #faaeae;">Name</th>
                      <th style="background: #faaeae;">Recharge</th>
                      <th style="background: #faaeae;">SIM</th>
                      <th style="background: #faaeae;">Cargo</th>
                      <th style="background: #faaeae;">Mobile</th>
                      <th style="background: #faaeae;">Reseller</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $retailer)
                    <tr class="bg-ocean">
                      <td>{{$retailer->first_name}}</td>
                      <td>
                        <input data-id="{{$retailer->id}}" class="toggle-class recharge" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $retailer->recharge_permission ? 'checked' : '' }}>
                      </td>
                      <td>
                        <input id="sim{{$retailer->id}}" data-id="{{$retailer->id}}" class="toggle-class sim" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $retailer->sim_permission ? 'checked' : '' }}>
                      </td>
                      <td>
                        <input id="cargo{{$retailer->id}}" data-id="{{$retailer->id}}" class="toggle-class cargo" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $retailer->cargo_permission ? 'checked' : '' }}>
                      </td>
                      <td>
                        <input id="phone{{$retailer->id}}" data-id="{{$retailer->id}}" class="toggle-class phone" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $retailer->mobile_permission ? 'checked' : '' }}>
                      </td>
                      <td>
                        <input id="reseller{{$retailer->id}}" data-id="{{$retailer->id}}" class="toggle-class reseller" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $retailer->reseller_permission ? 'checked' : '' }}>
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
  $(function() {
    $('.recharge').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        console.log('hello');
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
  </script>
  <script>
  $(function() {
    $('.sim').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        console.log('hello');
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeSim',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
  </script>
  <script>
  $(function() {
    $('.cargo').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        console.log('hello');
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeCargo',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
  </script>
  <script>
  $(function() {
    $('.phone').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        console.log('hello');
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changePhone',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
  </script>
  <script>
  $(function() {
    $('.reseller').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        console.log('hello');
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeReseller',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
  </script>
@endsection

@section('scripts')


@endsection