@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selling List</title>

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
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i><strong>Selling List</strong></h3>

                <div class="card-tools selling_list_search">
                  <div class="input-group input-group-sm" style="width: 200px;">
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
              <div class="card-body table-responsive p-0" style="height: 550px;">
                <table class="table table-sm table-bordered table-hover table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="background: #faaeae;">Order No</th>
                      <th style="background: #faaeae;">Date</th>
                      <th style="background: #faaeae;">Punto Vendita</th>
                      <th style="background: #faaeae;">Stato</th>
                      <th class="text-center" style="background: #faaeae;">Avanzamento</th>
                      <th class="text-center" style="background: #faaeae;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-ocean">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>JML223355</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Amici Bigiottera</td>
                      <td>Evaso Totalmente</td>
                      <td class="text-center selling_progress">
                        <span class="fs-6">100%</span>
                        <div class="progress progress-sm active">
                          <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%">
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a href="" class="btn btn-sm bg-info">
                            <i class="nav-icon fas fa-truck"></i>
                          </a>
                        </div>
                      </td>
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
        
      </div>
      <!-- /.container-fluid -->
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