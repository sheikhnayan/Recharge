@extends('front.layout.courier')
@section('header')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cargo New Pricing</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <script type= "text/javascript" src="{{asset('js/countries.js')}}"></script>
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
            <div class="order_page_header d-inline-block">
              <h4 class="d-inline-block"><i class="fas fa-plus-circle"></i>Pricing</h4>
            </div>
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
          <form action="{{route('add-new-pricing-for-real')}}" method="POST" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
         @csrf
         <input type="hidden" name="reseller_id" value="{{ Auth::user()->id }}">
          <div class="card-body">
            <div class="row b-border pb-3">
              <div class="col-md-12">
                <div class="bg-ocean mr-1">
                  <div class="customer_information">
                    <h5><i class="fas fa-male"></i> <strong>Pricing</strong></h5>
                    <div class="mb-3" class="form-label">
                      <label>Type</label>
                      <select class="form-control select2" name="type" id="type" style="width: 100%;">
                        <option>--Select--</option>
                        <option>Goods</option>
                        <option>Documents</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="weight_start" class="form-label">Weight Start</label>
                      <input required="" type="number" class="form-control" name="weight_start" id="weight_start" step="0.01" placeholder=" Weight Start">
                    </div>
                    <div class="form-group">
                      <label>Weight End</label>
                      <input required="" type="number" class="form-control" name="weight_end" id="weight_end" step="0.01" placeholder=" Weight End">
                    </div>
<!--                     <div class="mb-3">
                      <label for="documentNumber" class="form-label">Charge For Weight</label>
                      <input type="number" step="0.01" class="form-control" oninput="myFunction(this);" value="0" id="charge_for_weight" name="charge_for_weight" placeholder="Enter Charge For Weight">
                    </div>
                    <div class="mb-3">
                      <label for="charge_for_country" class="form-label">Charge For Country</label>
                      <input type="number" step="0.01" class="form-control" oninput="myFunction2(this);" id="charge_for_country" name="charge_for_country" value="0" placeholder="Enter Charge For Country">
                    </div> -->
                    <div class="mb-3">
                      <label for="country_name" class="form-label">Country Name</label>
                      <select class="form-control select2" onchange="print_state('state',this.selectedIndex);" id="country_name" name ="country_name" style="width: 100%;"></select>
                    </div>
                    <div class="mb-3">
                      <label for="interCustomerAddress" class="form-label">Total</label>
                      <input type="number" step="any" class="form-control" id="total" name="total" placeholder="Total">
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <!-- /.row -->   
            <div class="my-5">
              <button type="submit" class="btn btn-primary" style="width: 100%;">Set Price</button>
            </div>
          </div>
          </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->  
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
<!-- Select2 -->
<script src="{{asset('js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('js/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('js/moment.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- BS-Custom-file-input -->
<script src="{{asset('js/bs-custom-file-input.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection


@section('js')
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    //Date picker
    $('#customerBirthDate').datetimepicker({
      format: 'yyyy-mm-dd'
    });
    $('#receiverBirthDate').datetimepicker({
      format: 'yyyy-mm-dd'
    });
    $('#expectedDelivaryDate').datetimepicker({
      format: 'yyyy-mm-dd'
    });

  })
 
  
  $(function () {
      bsCustomFileInput.init();
    });

  function myFunction() {
   let totalCharge = document.getElementById("total");
   let change = document.getElementById("total").value;
   let countryCharge = document.getElementById("charge_for_country").value;
   let weightCharge = document.getElementById("charge_for_weight").value;


   totalCharge.setAttribute('value', parseInt(weightCharge) + parseInt(countryCharge));
   
   // let totalCharge = document.getElementById("total");

   console.log(change);
   // totalCharge.setAttribute('value','')

  }

  function myFunction2() {
   let totalCharge = document.getElementById("total");
   let change = document.getElementById("total").value;
   let countryCharge = document.getElementById("charge_for_country").value;
   let weightCharge = document.getElementById("charge_for_weight").value;


   totalCharge.setAttribute('value', parseInt(weightCharge) + parseInt(countryCharge));
   
   // let totalCharge = document.getElementById("total");

   console.log(change);
   // totalCharge.setAttribute('value','')

  }

</script>
<script type="text/javascript">


</script>
<script language="javascript">print_country("country_name");</script>
<script language="javascript">print_country("rcountry");</script>
@endsection
