@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cargo View Order</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/admin.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
  <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
<link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}"></head>
@endsection
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-3">
            <h4><i class="fas fa-eye" style="margin-right: 10px;"></i>View Order</h4>
          </div>
        </div>
        <div class="card card-default">
          <div class="card-body">
            <div class="row pb-3">
              <div class="col-md-6  table-responsive">
                <table class="table table-sm table-bordered">
                  <thead>
                    <tr class="bg-sky">
                      <th colspan="2">Order Information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Order Number</td>
                      <td>{{ $data->id }}</td>
                    </tr>
                    <tr>
                      <td>Order Date</td>
                      <td>
                        <span>{{ $data->created_at }}</span>
                        {{-- <span>13:20</span> --}}
                      </td>
                    </tr>
                    <tr>
                      <td>Order Status</td>
                      <td>{{ $data->status }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6  table-responsive">
                <table class="table table-sm table-bordered">
                  <thead>
                    <tr class="bg-sky">
                      <th colspan="2">Agent Information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Agent Name</td>
                      <td>{{ $agent->nationality }}</td>
                    </tr>
                    <tr>
                      <td>Contact</td>
                      <td>
                        <span>{{ $agent->first_name }} {{ $agent->last_name }}</span><br>
                        {{-- <span>9856322544</span><br> --}}
                        <span>{{ $agent->email }}</span>
                      </td>
                    </tr>
                    {{-- <tr>
                      <td>Address</td>
                      <td>Via Aldo Fiorini, 40, ANCONA, ITALY</td>
                    </tr> --}}
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-md-6  table-responsive">
                <table class="table table-sm table-bordered">
                  <thead>
                    <tr class="bg-sky">
                      <th colspan="2">Customer Information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>First Name</td>
                      <td>{{ $data->first_name }}</td>
                    </tr>
                    <tr>
                      <td>Surname</td>
                      <td>{{ $data->surname }}</td>
                    </tr>
                    <tr>
                      <td>Date of Birth</td>
                      <td>{{ $data->dob }}</td>
                    </tr>
                    <tr>
                      <td>Document Number</td>
                      <td>{{ $data->document_number }}</td>
                    </tr>
                    <tr>
                      <td>Customer Email</td>
                      <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>{{ $data->phone }}</td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>{{ $data->address }}</td>
                    </tr>
                    <tr>
                      <td>Country</td>
                      <td>{{ $data->country }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6  table-responsive">
                <table class="table table-sm table-bordered">
                  <thead>
                    <tr class="bg-sky">
                      <th colspan="2">Receiver Information</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>First Name</td>
                      <td>{{ $data->rfirst_name }}</td>
                    </tr>
                    <tr>
                      <td>Surname</td>
                      <td>{{ $data->rsurname }}</td>
                    </tr>
                    <tr>
                      <td>Date of Birth</td>
                      <td>{{ $data->rdob }}</td>
                    </tr>
                    <tr>
                      <td>Document Number</td>
                      <td>{{ $data->rdocument_number }}</td>
                    </tr>
                    <tr>
                      <td>Receiver Email</td>
                      <td>{{ $data->remail }}</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>{{ $data->rphone }}</td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>{{ $data->raddress }}</td>
                    </tr>
                    <tr>
                      <td>Country</td>
                      <td>{{ $data->rcountry }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-12  table-responsive">
                <table class="table table-sm table-bordered">
                  <thead>
                    <tr class="bg-sky">
                      <th colspan="4">Order Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Expected Delivary Date</td>
                      <td>{{ $data->expected_date_to_receive }}</td>
                      <td>Delivary Way</td>
                      <td>{{ $data->delivery_way }}</td>
                    </tr>
                    <tr>
                      <td>Delivary Condition</td>
                      <td>{{ $data->delivery_condition }}</td>
                      <td>Departure Airport</td>
                      <td>{{ $data->departure_airport }}</td>
                    </tr>
                    <tr>
                      <td>Number of Box</td>
                      <td>{{ $data->numberOfBox }}</td>
                      <td>Arival Airport</td>
                      <td>{{ $data->arrival_airport }}</td>
                    </tr>
                    <tr>
                      <td>Value of Goods</td>
                      <td>{{ $data->goods_value }}</td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-12  table-responsive">
                <table class="table table-sm table-bordered">
                  <thead>
                    <tr class="bg-sky">
                      <th>Product Type</th>
                      <th>Weight</th>
                      {{-- <th>Actual Weight</th>
                      <th>Volumetric</th> --}}
                      <th>Charge/Kg</th>
                      <th>Charge</th>
                      <th>Delivery Charge</th>
                      <th>Additional Charge</th>
                      <th>Total Charge</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $data->productType }}</td>
                      <td>{{ $data->weight }}</td>
                      {{-- <td></td>
                      <td></td> --}}
                      <td>{{ $data->perKg }}</td>
                      <td>{{ $data->cusCharge }}</td>
                      <td>{{ $data->homeDeliveryCharge }}</td>
                      <td>{{ $data->addiCharge }}</td>
                      <td>{{ $data->total }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->  
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>
@endsection
<!-- ./wrapper -->
@section('scripts')
<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- Theme JS -->
<script src="{{ asset('js/admin.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('js/custom.js') }}"></script>
@endsection

