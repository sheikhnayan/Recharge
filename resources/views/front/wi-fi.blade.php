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
</head>

@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i><strong>WIFI List</strong></h3>

                <div class="card-tools">
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
                <table class="table table-sm table-bordered table-hover">
                  <thead>
                    <tr class="table-danger">
                      <th>Operator</th>
                      <th>Offer Name</th>
                      <th class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-ocean">
                      <td>GrameenPhone</td>
                      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                      <td class="text-center"><span class="badge bg-info">Active</span></td>
                    </tr>
                    <tr class="bg-sky">
                      <td>Robi</td>
                      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                      <td class="text-center"><span class="badge bg-info">Active</span></td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>Airtel</td>
                      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                      <td class="text-center"><span class="badge bg-info">Active</span></td>
                    </tr>
                    <tr class="bg-sky">
                      <td>Banglalink</td>
                      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                      <td class="text-center"><span class="badge bg-info">Active</span></td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>Telitalk</td>
                      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                      <td class="text-center"><span class="badge bg-info">Active</span></td>
                    </tr>
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