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
            <div class="card mt-3 p-3">
              <h5><i class="fas fa-search mr-2"></i>Search Order</h5>
              <div class="selling_search_group">
                <input type="text" name="table_search_input" class="form-control mr-2" placeholder="Offer Number, ICCID Number, SIM Number, Order By etc..">
                <div class="form-group mr-2">
                  <select class="custom-select" id="">
                    <option>Select Status</option>
                    <option>Completed</option>
                    <option>Incompleted</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
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
                <table class="table table-sm table-bordered table-hover table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="background: #faaeae;">#</th>
                      <th style="background: #faaeae;">Order ID</th>
                      <th style="background: #faaeae;">Offer</th>
                      <th style="background: #faaeae;">ICCID Number</th>
                      <th style="background: #faaeae;">Order Date</th>
                      <th style="background: #faaeae;">Order By</th>
                      <th class="text-center" style="background: #faaeae;">Status</th>
                      <th class="text-center" style="background: #faaeae;">Update</th>
                      <th class="text-center" style="background: #faaeae;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-ocean">
                      <td>22</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>21</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>20</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>19</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>18</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>17</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>16</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>15</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>14</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>13</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>12</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>11</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>10</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>9</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>8</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>7</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>6</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>5</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>4</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>3</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>2</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>1</td>
                      <td>3050</td>
                      <td>WIND Call Your Country SUPER LE 9.99 OFFER 50 GIGA INTERNET</td>
                      <td>5849123541553250252</td>
                      <td><span>02/07/2021 </span><span>15:46</span></td>
                      <td>Shamal Saha</td>
                      <td><span class="badge badge-primary">Completed</span></td>
                      <td></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-print"></i>
                          </a>
                          <a href="retailer_view_detail.html" class="btn btn-sm bg-info">
                            <i class="fas fa-eye"></i>
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