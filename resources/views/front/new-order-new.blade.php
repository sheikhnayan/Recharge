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
          <form action="{{route('add-new-order')}}" method="POST" enctype="multipart/form-data">
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
              <div class="col-md-6">
                <div class="bg-ocean mr-1">
                  <div class="customer_information">
                    <h5><i class="fas fa-male"></i> <strong>Customer Information</strong></h5>
                    <div class="mb-3">
                      <label for="first_name" class="form-label">First Name</label>
                      <input required="" type="text" class="form-control" name="first_name" id="first_name" placeholder="Customer Name">
                    </div>
                    <div class="mb-3">
                      <label for="surname" class="form-label">Surname</label>
                      <input required="" type="text" class="form-control" name="surname" id="surname" placeholder="Customer surname">
                    </div>
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <div class="input-group date" id="customerBirthDate" data-target-input="nearest">
                        <input type="date" name="dob" class="form-control" />
                        {{-- <div class="input-group-append" data-target="#customerBirthDate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> --}}
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
                      <select class="form-control select2" onchange="print_state('state',this.selectedIndex);" id="country" name ="country" style="width: 100%;"></select>
                    </div>
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
                        <input type="date" class="form-control" data-target="" name="rdob" />
                        {{-- <div class="input-group-append" data-target="#receiverBirthDate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> --}}
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
                      <select class="form-control select2" onchange="print_state_for_receiver('rstate',this.selectedIndex);" id="rcountry" name ="rcountry" style="width: 100%;"></select>
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
                      <label>Delivary Type</label>
                      <select class="form-control select2" name="delivery_condition" id="delivery_condition" style="width: 100%;">
                        <option>--Select--</option>
                        <option selected="">Goods</option>
                        <option>Documents</option>
                      </select>
                    </div>

                    <!-- <div class="mb-3">
                      <label for="inputGoodsValue" class="form-label">Goods Value (Euro)</label>
                      <input type="number" class="form-control" id="inputGoodsValue" placeholder="1234">
                    </div> -->

                    <div class="mb-3 myDIV" id="myDiv" >
                      <label for="totalWeightValue" id="myDiv" class="form-label">Total Weight (Kg)</label>
                      <input class="form-control" step="any" type="number" name="weight" id="weight" value="1" >
                    </div>
                    <div class="mb-3 myDIV">
                      <label for="chargePerKgValue" class="form-label">Charge/Kg(Euro)</label>
                      <input class="form-control" type="number" step="any" name="perKg" id="perKg" value="0" placeholder="0">
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



                <div class="bg-rose mt-5">
                  <div class="order_information">
                    <div class="mb-3">
                      <label for="totalChargeValue" class="form-label d-block">BOX</label>
                      <input type="text" class="form-control d-inline-block" style="width: 70%;" id="totalChargeValue" name="product1" placeholder="Product Name (e.g. Shirt, Pant etc.)">
                      <input type="text" class="form-control d-inline-block" style="width: 25%; margin-left: 10px;" id="totalChargeValue" name="qty1" placeholder="Qty">
                    </div>
                    <div class="mb-3">
                      <label for="interCustomerAddress" class="form-label">Description</label>
                      <textarea class="form-control" id="interCustomerAddress" name="address" rows="3"></textarea>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</script>
<script type="text/javascript">
function goodValue() {

   let totalCharge = document.getElementById("total");
   let value = document.getElementById("goods_value").value;
   totalCharge.setAttribute('value', value*1.1)

}
function weight() {

   let totalCharge = document.getElementById("total");
   let change = document.getElementById("total").value;

   let weight = document.getElementById("weight");
   
   totalCharge.setAttribute('value', change+9);

   // let totalCharge = document.getElementById("total");

   console.log(change);
   // totalCharge.setAttribute('value','')

}
function myFunction1234() {
   let totalCharge = document.getElementById("total");
   let change = document.getElementById("total").value;

   let type = document.getElementById("productType");
   totalCharge.setAttribute('value', change+3);
   
   // let totalCharge = document.getElementById("total");

   console.log(change);
   // totalCharge.setAttribute('value','')

}

// function heyyaaa(value) {
//   // alert(value);
//   if(value == "Documents"){
//     // The Alert works
//     // alert(value);
//     $(".myDIV").hide();
    
//     let weight = document.getElementById("weight").value;
    
//     // fetching var x also works
//     var x = document.getElementById("myDIV");

//   }
// }
function showDiv() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "block";
  }
}
</script>
<script language="javascript">print_country("country");</script>
<script language="javascript">print_country("rcountry");</script>

<script>
  $(document).ready(function(){
    
    $("#delivery_condition").change(function(){
        let value = document.getElementById("delivery_condition").value;
        let weight = document.getElementById("weight").value;
        
        if(value == "Documents"){
          $(".myDIV").hide();
        }
        if(value == "Goods"){
          $(".myDIV").show();
        }

        var e = document.getElementById("delivery_condition");
        var type = e.value;

        var f = document.getElementById("rcountry");
        var country = f.value;
        
        if(type == 'Documents')
        {
          $.ajax({
            type: 'GET',
            url: '/send-pricing-for-docs/',
            data: {
              type:type,
              country:country,

            },
            success: function(data){
              $(".myDIV").hide();
              $('#total').val(data);
              if(data == 'No data'){
                alert(data);
              }
            }
          });
        }
        else
        {
          $.ajax({
            type: 'GET',
            url: '/send-pricing/',
            data: {
              type:type,
              weight:weight,
              country:country,

            },
            success: function(data){
              // $('#total').append(data);
              $('#total').val(data);
              // $('#result').val(data);
              if(data == 'No data'){
                alert(data);
              }

              // $("#total").append(JSON.stringify(data));
              $(".myDIV").show();
              // $("#total").html(data);
            }
          });
        }
    });
    
  });
</script>
<script>
  $(document).ready(function(){
    
    $("#rcountry").change(function(){
        let value = document.getElementById("delivery_condition").value;
        let weight = document.getElementById("weight").value;
        
        if(value == "Documents"){
          $(".myDIV").hide();
        }
        if(value == "Goods"){
          $(".myDIV").show();
        }

        var e = document.getElementById("delivery_condition");
        var type = e.value;

        var f = document.getElementById("rcountry");
        var country = f.value;
        
        if(type == 'Documents')
        {
          $.ajax({
            type: 'GET',
            url: '/send-pricing-for-docs/',
            data: {
              type:type,
              country:country,

            },
            success: function(data){
              $(".myDIV").hide();
              $('#total').val(data);
              if(data == 'No data'){
                alert(data);
              }
              // alert(message);
            }
          });
        }
        else
        {
          $.ajax({
            type: 'GET',
            url: '/send-pricing/',
            data: {
              type:type,
              weight:weight,
              country:country,

            },
            success: function(data){
              // $('#total').append(data);
              $('#total').val(data);
              if(data == 'No data'){
                alert(data);
              }
              // alert(message);
              // $('#result').val(data);
              // console.log(data);
              // $("#total").append(JSON.stringify(data));
              $(".myDIV").show();
              // $("#total").html(data);
            }
          });
        }
    });
    
  });
</script>
<script>
  $(document).ready(function(){
    
    $("#weight").on("input", function(){
        let value = document.getElementById("delivery_condition").value;
        let weight = document.getElementById("weight").value;
        
        if(value == "Documents"){
          $(".myDIV").hide();
        }
        if(value == "Goods"){
          $(".myDIV").show();
        }

        var e = document.getElementById("delivery_condition");
        var type = e.value;

        var f = document.getElementById("rcountry");
        var country = f.value;
        
        if(type == 'Documents')
        {
          $.ajax({
            type: 'GET',
            url: '/send-pricing-for-docs/',
            data: {
              type:type,
              country:country,

            },
            success: function(data){
              $(".myDIV").hide();
              $('#total').val(data);
              if(data == 'No data'){
                alert(data);
              }
              // alert(message);
            }
          });
        }
        else
        {
          $.ajax({
            type: 'GET',
            url: '/send-pricing/',
            data: {
              type:type,
              weight:weight,
              country:country,

            },
            success: function(data){
              // $('#total').append(data);
              $('#total').val(data);
              if(data == 'No data'){
                alert(data);
              }
              // alert(message);
              // $('#result').val(data);
              // console.log(data);
              // $("#total").append(JSON.stringify(data));
              $(".myDIV").show();
              // $("#total").html(data);
            }
          });
        }
    });
    
  });
</script>
@endsection
