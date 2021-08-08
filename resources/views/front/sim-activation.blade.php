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
              <div class="card-header mb-3">
                <h3 class="card-title"><strong>Add to List</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="row px-3">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Oparetor</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option>Grameenphone</option>
                      <option>Robi</option>
                      <option>Banglalink</option>
                      <option>Taletalk</option>
                      <option>Airtel</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="inputLastName" class="form-label">SIM Number</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="01710-000000">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="inputLastName" class="form-label">ICCID Number</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="3654987414156">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i><strong>Sale List</strong> (Total- 113 SIM)</h3>

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
              <div class="card-body table-responsive p-0" style="height: 550px;">
                <table class="table table-sm table-bordered table-hover table-head-fixed text-nowrap">
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
                    <tr class="bg-ocean">
                      <td>001</td>
                      <td>GrameenPhone</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>002</td>
                      <td>Robi</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>003</td>
                      <td>Airtel</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>004</td>
                      <td>Talitalk</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>005</td>
                      <td>Banglalink</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>006</td>
                      <td>GrameenPhone</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>007</td>
                      <td>Robi</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>008</td>
                      <td>Airtel</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>009</td>
                      <td>Talitalk</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>010</td>
                      <td>Banglalink</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>011</td>
                      <td>GrameenPhone</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>012</td>
                      <td>Robi</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>013</td>
                      <td>Airtel</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>014</td>
                      <td>Talitalk</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>015</td>
                      <td>Banglalink</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>016</td>
                      <td>GrameenPhone</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>017</td>
                      <td>Robi</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>018</td>
                      <td>Airtel</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-ocean">
                      <td>019</td>
                      <td>Talitalk</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
                      </td>
                    </tr>
                    <tr class="bg-sky">
                      <td>020</td>
                      <td>Banglalink</td>
                      <td>96325865412</td>
                      <td>01717000000</td>
                      <td>09/06/2021</td>
                      <td>$300.00</td>
                      <td class="text-center">
                        <a href="sale.html" type="button" class="btn btn-info btn-sm">Sale</a>
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