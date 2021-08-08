@extends('front.layout.courier')
@section('header')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cargo New Order</title>

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
</head>

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
              <form action="{{ url('/cargo/search') }}" method="get">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter email..." aria-label="Search old order"
                    aria-describedby="basic-addon2">
                  <button type="submit">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                  </button>
                </div>
              </form>
              <h4 class="d-inline-block"><i class="fas fa-plus-circle"></i>New Order</h4>
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
          <form action="{{route('add-new-order')}}" method="POST">
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
          <div class="card-body">
            <div class="row b-border pb-3">
              <div class="col-md-6">
                <div class="bg-ocean mr-1">
                  <div class="customer_information">
                    <h5><i class="fas fa-male"></i> <strong>Customer Information</strong></h5>
                    <div class="mb-3">
                      <label for="first_name" class="form-label">First Name</label>
                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Customer Name">
                    </div>
                    <div class="mb-3">
                      <label for="surname" class="form-label">Surname</label>
                      <input type="text" class="form-control" name="surname" id="surname" placeholder="Customer surname">
                    </div>
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <div class="input-group date" id="customerBirthDate" data-target-input="nearest">
                        <input type="text" name="dob" class="form-control datetimepicker-input" data-target="#customerBirthDate" />
                        <div class="input-group-append" data-target="#customerBirthDate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="documentNumber" class="form-label">Document Number</label>
                      <input type="text" class="form-control" id="documentNumber" name="document_number" placeholder="Enter Document Number">
                    </div>
                    <div class="mb-3">
                      <label for="enterPhoneNumber" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="enterPhoneNumber" name="phone" placeholder="Enter Customer Phone Number">
                    </div>
                    <div class="mb-3">
                      <label for="enterEmail" class="form-label">Email</label>
                      <input type="email" class="form-control" id="enterEmail" name="email" placeholder="Enter Customer Email">
                    </div>
                    <div class="mb-3">
                      <label for="interCustomerAddress" class="form-label">Address</label>
                      <textarea class="form-control" id="interCustomerAddress" name="address" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="interCustomerCountry" class="form-label">Country</label>
                      <select class="form-control select2" id="interCustomerCountry" name="country" style="width: 100%;">
                        <option>Select Country</option>
                        <option>America</option>
                        <option>Bangladesh</option>
                        <option>Canada</option>
                        <option>Dubai</option>
                        <option>England</option>
                        <option>Franch</option>
                        <option>Germany</option>
                        <option>Holand</option>
                        <option>India</option>
                        <option>Japan</option>
                        <option>Kenya</option>
                        <option>Liberia</option>
                        <option>Malaysia</option>
                        <option>Nepal</option>
                        <option>Oman</option>
                        <option>Pakistan</option>
                        <option>Qatar</option>
                        <option>Russia</option>
                        <option>Saudi Arabia</option>
                        <option>Thailand</option>
                        <option>Uganda</option>
                        <option>Vietnam</option>
                        <option>Yemen</option>
                        <option>Zimbabwe</option>
                      </select>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="bg-rose mx-1">
                  <div class="receiver_information">
                    <h5><i class="fas fa-user-tie"></i> <strong>Receiver Information</strong></h5>
                    <div class="mb-3">
                      <label for="inputReceiverName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="inputReceiverName" name="rfirst_name" placeholder="Receiver Name">
                    </div>
                    <div class="mb-3">
                      <label for="inputSurName" class="form-label">Surname</label>
                      <input type="text" class="form-control" id="inputSurName" name="rsurname" placeholder="Receiver surname">
                    </div>
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <div class="input-group date" id="receiverBirthDate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#receiverBirthDate" name="rdob" />
                        <div class="input-group-append" data-target="#receiverBirthDate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="documentNumber" class="form-label">Document Number</label>
                      <input type="text" class="form-control" id="documentNumber" name="rdocument_number" placeholder="Enter Document Number">
                    </div>
                    <div class="mb-3">
                      <label for="enterPhoneNumber" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="enterPhoneNumber" name="rphone" placeholder="Enter Receiver Phone Number">
                    </div>
                    <div class="mb-3">
                      <label for="enterEmail" class="form-label">Email</label>
                      <input type="email" class="form-control" id="enterEmail" name="remail" placeholder="Enter Receiver Email">
                    </div>
                    <div class="mb-3">
                      <label for="interReceiverAddress" class="form-label">Address</label>
                      <textarea class="form-control" id="interReceiverAddress" name="raddress" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="interReceiverCountry" class="form-label">Country</label>
                      <select class="form-control select2" id="interReceiverCountry" name="rcountry" style="width: 100%;">
                        <option>Select Receiver Country</option>
                        <option>America</option>
                        <option>Bangladesh</option>
                        <option>Canada</option>
                        <option>Dubai</option>
                        <option>England</option>
                        <option>Franch</option>
                        <option>Germany</option>
                        <option>Holand</option>
                        <option>India</option>
                        <option>Japan</option>
                        <option>Kenya</option>
                        <option>Liberia</option>
                        <option>Malaysia</option>
                        <option>Nepal</option>
                        <option>Oman</option>
                        <option>Pakistan</option>
                        <option>Qatar</option>
                        <option>Russia</option>
                        <option>Saudi Arabia</option>
                        <option>Thailand</option>
                        <option>Uganda</option>
                        <option>Vietnam</option>
                        <option>Yemen</option>
                        <option>Zimbabwe</option>
                      </select>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.row -->   

            <div class="row">
              <div class="col-md-12 pt-3">
                <h5><i class="fas fa-file-alt"></i> <strong>Order Details</strong></h5>
              </div>
              <div class="col-md-6">
                <div class="bg-ocean mr-1">
                  <div class="order_information">
                    <div class="form-group">
                      <label>Expected Delivary Date</label>
                      <div class="input-group date" id="expectedDelivaryDate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#expectedDelivaryDate" name="expected_date_to_receive"/>
                        <div class="input-group-append" data-target="#expectedDelivaryDate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Delivary Type</label>
                      <select class="form-control select2" name="delivery_condition" style="width: 100%;">
                        <option>--Select--</option>
                        <option>Received from Dhaka Office</option>
                        <option>Home Delivary in Dhaka City</option>
                        <option>Delivary in District level</option>
                        <option>Home Delivary in District level</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Number of Box</label>
                      <select class="form-control select2" name="numberOfBox" style="width: 100%;">
                        <option>--Select--</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="goods_value" class="form-label">Goods Value (EURO) *</label>
                      <input type="number" step="any" class="form-control" id="goods_value" name="goods_value" value="0" oninput="myFunction12(this)">
                    </div>
                    <!-- <div class="mb-3">
                      <label for="inputGoodsValue" class="form-label">Goods Value (Euro)</label>
                      <input type="number" class="form-control" id="inputGoodsValue" placeholder="1234">
                    </div> -->
                    <div class="form-group">
                      <label>Product Type</label>
                      <select class="form-control select2" name="productType" id="productType" style="width: 100%;" oninput="myFunction1234(this)">
                        <option>--Select--</option>
                        <option>Metal</option>
                        <option>Liquid</option>
                        <option>Wooden</option>
                        <option>Glassware</option>
                        <option>Ciramics</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="totalWeightValue" class="form-label">Total Weight (Kg)</label>
                      <input class="form-control" step="any" type="number" name="weight" id="weight" value="0" oninput="myFunction123(this)">
                    </div>
                    <div class="mb-3">
                      <label for="chargePerKgValue" class="form-label">Charge/Kg(Euro)</label>
                      <input class="form-control" type="number" step="any" readonly="true" name="perKg" id="perKg" value="0" placeholder="0">
                    </div>
                    <div class="mb-3">
                      <label for="chargeValue" class="form-label">Charge(Euro)</label>
                      <input type="nmber" class="form-control" id="chargeValue" id="cusCharge" placeholder="0">
                    </div>
                    <div class="mb-3">
                      <label for="homeDeliveryChargeValue" class="form-label">Home Delivery Charge(Euro)</label>
                      <input type="number" class="form-control" id="homeDeliveryChargeValue" id="homeDeliveryCharge" placeholder="0">
                    </div>
                    <div class="mb-3">
                      <label for="addiCharge" class="form-label">Additional Charge(Euro)</label>
                      <input class="form-control" step="any" type="number" name="addiCharge" id="addiCharge" value="0" onchange="addAdditionalCharge(this)">
                    </div>
                    <div class="mb-3">
                      <label for="total" class="form-label">Total Charge(Euro)</label>
                      <input class="form-control" step="any" readonly="true" type="number" name="total" id="total" value="0">
                      <input type="hidden" name="agent_comm" id="agent_comm" value="0">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="bg-rose">
                  <div class="order_information">
                    <div class="form-group">
                      <label>Delivary Way</label>
                      <select class="form-control select2" name="delivery_way" style="width: 100%;">
                        <option>--Select--</option>
                        <option>By Air</option>
                        <option>By Road</option>
                        <option>By Train</option>
                        <option>By Ship</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Departure Port/Station</label>
                      <select class="form-control select2" name="departure_airport" style="width: 100%;">
                        <option>--Select--</option>
                        <option>Dhaka</option>
                        <option>Chittagong</option>
                        <option>Khulna</option>
                        <option>Rajshahi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Arival Port/Station</label>
                      <select class="form-control select2" name="arrival_airport" style="width: 100%;">
                        <option>--Select--</option>
                        <option>Dhaka</option>
                        <option>Chittagong</option>
                        <option>Khulna</option>
                        <option>Rajshahi</option>
                      </select>
                    </div>
                  </div>
                </div>


                <div class="bg-rose mt-5">
                  <div class="order_information">
                    <div class="mb-3">
                      <label for="totalChargeValue" class="form-label d-block">BOX 1</label>
                      <input type="text" class="form-control d-inline-block" style="width: 70%;" id="totalChargeValue" name="product1" placeholder="Product Name (e.g. Shirt, Pant etc.)">
                      <input type="text" class="form-control d-inline-block" style="width: 25%; margin-left: 10px;" id="totalChargeValue" name="qty1" placeholder="Qty">
                    </div>
                    <div class="mb-3">
                      <label for="totalChargeValue" class="form-label d-block">BOX 2</label>
                      <input type="text" class="form-control d-inline-block" style="width: 70%;" id="totalChargeValue" name="product2" placeholder="Product Name (e.g. Shirt, Pant etc.)">
                      <input type="text" class="form-control d-inline-block" style="width: 25%; margin-left: 10px;" id="totalChargeValue" name="qty2" placeholder="Qty">
                    </div>
                    <div class="mb-3">
                      <label for="totalChargeValue" class="form-label d-block">BOX 3</label>
                      <input type="text" class="form-control d-inline-block" style="width: 70%;" id="totalChargeValue" name="product3" placeholder="Product Name (e.g. Shirt, Pant etc.)">
                      <input type="text" class="form-control d-inline-block" style="width: 25%; margin-left: 10px;" id="totalChargeValue" name="qty3" placeholder="Qty">
                    </div>
                    <div class="mb-3">
                      <label for="totalChargeValue" class="form-label d-block">BOX 4</label>
                      <input type="text" class="form-control d-inline-block" style="width: 70%;" id="totalChargeValue" name="product4" placeholder="Product Name (e.g. Shirt, Pant etc.)">
                      <input type="text" class="form-control d-inline-block" style="width: 25%; margin-left: 10px;" id="totalChargeValue" name="qty4" placeholder="Qty">
                    </div>
                    <div class="mb-3">
                      <label for="totalChargeValue" class="form-label d-block">BOX 5</label>
                      <input type="text" class="form-control d-inline-block" style="width: 70%;" id="totalChargeValue" name="product5" placeholder="Product Name (e.g. Shirt, Pant etc.)">
                      <input type="text" class="form-control d-inline-block" style="width: 25%; margin-left: 10px;" id="totalChargeValue" name="qty5" placeholder="Qty">
                    </div>
                  </div>
                </div>
                <div class="my-5">
                  <button type="submit" class="btn btn-primary" style="width: 100%;">Send Order</button>
                </div>
              </div>
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
      format: 'L'
    });
    $('#receiverBirthDate').datetimepicker({
      format: 'L'
    });
    $('#expectedDelivaryDate').datetimepicker({
      format: 'L'
    });

  })
 
  
  $(function () {
      bsCustomFileInput.init();
    });
</script>
@endsection
</body>
</html>
