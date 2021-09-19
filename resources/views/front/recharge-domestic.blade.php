@extends('front.layout.courier')
@section('header')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recharge Italy</title>

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
      <div class="container-fluid recharge-page">
        <div class="recharge-box">
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="/"><img src="{{ asset('images/jm logo.jpeg') }}" width="80px" height="auto"></a>
            </div>
            <div class="card-body">
              <h3 class="text-center mb-5">Indice Brand Richriche</h3>
              <div class="row">
                <div class="col-md-6">
                  <form action="/domestic_recharge" method="post">
                    @csrf
                    <div class="form-group">
                      <label>Brand</label>
                  
                      <div class="brand-select-list">
                        <button type="button" class="selected-brand text-left" name="selected_brand" value=""></button>
                        <div class="brandUlLiContainer">
                          <ul id="brandUlList" style="max-height: 200px; overflow: auto;"></ul>
                        </div>
                      </div>
                  
                      <select name="operator" id="operator" class="brand-dropdown" style="width: 100%;">
                        <option id="test" value="Fastweb" data-thumbnail="{{ asset('images/fastweb.png') }}"> Fastweb</option>
                        <option id="test" value="Vodafone" data-thumbnail="{{ asset('images/vodafone.png') }}">Vodafone</option>
                        <option value="Tiscali" data-thumbnail="{{ asset('images/Tiscali.png') }}">Tiscali</option>
                        <option value="Tim" data-thumbnail="{{ asset('images/Tim.png') }}">Tim</option>
                        <option value="WindTre" data-thumbnail="{{ asset('images/WindTre.png') }}">WindTre</option>
                        <option value="PosteMobile" data-thumbnail="{{ asset('images/PosteMobile.png') }}">PosteMobile Online</option>
                        <option value="Digi" data-thumbnail="{{ asset('images/Digi.png') }}">Digi Mobil</option>
                        <option value="Tim-Carta" data-thumbnail="{{ asset('images/Tim-Carta.png') }}">Tim-Carta Servizi</option>
                        <option value="CoopVoce" data-thumbnail="{{ asset('images/coop-voce-1-480x480.jpeg') }}">CoopVoce</option>
                        <option value="Ho" data-thumbnail="{{ asset('images/Ho.png') }}">Ho Mobile</option>
                        <option value="Vodafone-Carte" data-thumbnail="{{ asset('images/vodafone.png') }}">Vodafone-Carte Servizi</option>
                        <option value="Iliad" data-thumbnail="{{ asset('images/Iliad.png') }}">Iliad</option>
                      </select>
                    </div>
                    <div class="mb-3 phone_number">
                      <label for="inputMobileNumber" class="form-label">Mobile Number</label>
                      <input type="text" class="form-control myNumber" id="inputMobileNumber" name="number" value="" placeholder="Please enter mobile number">
                    </div>
                    <div id="price">
                      <label for="">Amount</label>
                      <select id="amounts" name="amount" class="form-control amounts">

                      </select>
                    </div>
                    {{-- <div class="mb-3">
                      <label for="inputAmount" class="form-label">Service Charge in EURO</label>
                      <input type="text" class="form-control" id="inputAmount" step="any" name="service" placeholder="Please Enter Service Charge">
                    </div> --}}
                    <div class="mt-3">
                      <input type="submit" class="btn btn-info" style="width: 100%;" value="Recharge">
                    </div>
                    
                  </form>
                </div>
                <div class="col-md-6">
                  <div class="last_recharge_table">
                    <div class="last_recharge_table_head text-center">
                      <h5><strong>Last 10 Recharge</strong></h5>
                    </div>
                
                    <div class="card-body table-responsive p-0">
                      <table class=" table table-sm table-bordered table-hover">
                        <thead>
                          <tr class="table-danger">
                            <th>Receiver</th>
                            <th>Amount</th>
                            <th>Cost</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                          <tr class="bg-ocean">
                            <td>{{ $item->number }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->cost }}</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                            <td> <a class="btn btn-success" href="/recharge_invoice/{{ $item->id }}"> Invoice</a> </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              
              
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.login-box -->
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

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

@section('js')
{{-- <script>
  $(function(){
$('#test').click(function(){
var empty = "";
var value = $(this).val();
var table = $('#offer');
$.ajax({
 type: "POST",
 url: "/check-products", // url to request
 data:{ 
            _token:'{{ csrf_token() }}',
            id: value,
        },
  cache: false,
  dataType: 'json',
 success : function(response){
  $(response).each(function(){
    var data = `<div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(10)">
                            <strong>`+response.amount+` Tk</strong>
                          </div>
                        </div>
                      </div>`;
                      console.log(response.amount);
  })
 }
});
});
});
</script> --}}
<script type="text/javascript">

    //test for iterating over child elements
    var dropdownArray = [];
    $('.brand-dropdown option').each(function(){
      var img = $(this).attr("data-thumbnail");
      var text = this.innerText;
      var value = $(this).val();
      var item = '<li id="test"><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
      dropdownArray.push(item);
    })

    $('#brandUlList').html(dropdownArray);

    // default if needed
    // $('.selected-brand').html(dropdownArray[0]);
    $('.selected-brand').html('Select Brand');
    $('.selected-brand').attr('value', '');

    //change button stuff on click
    $('#brandUlList li').click(function(){
       var img = $(this).find('img').attr("src");
       var value = $(this).find('img').attr('value');
       var text = this.innerText;
       var item = '<li><img src="'+ img +'" alt="" /><span>'+ text +'</span></li>';
      $('.selected-brand').html(item);
      $('.selected-brand').attr('value', value).trigger('change');
      $(".brandUlLiContainer").toggle();

      $('#amounts').empty();

      $.ajax({
 type: "POST",
 url: "/check-products", // url to request
 data:{ 
            _token:'{{ csrf_token() }}',
            id: value,
        },
  cache: false,
  dataType: 'json',
 success : function(response){
  $(response).each(function(index,item){
    var data = '<option value='+item.ean+'>'+item.amount+'</option>';
    $('#amounts').append('<option value='+item.ean+','+item.amount+'>'+item.amount+' Euro</option>');
  })
 }
});

      $(".phone_number").show();
    });

    $(".selected-brand").click(function(){
          $(".brandUlLiContainer").toggle();
    });

    function selectAmount(amount) {
      $('#inputAmount').val(amount);
    }

    $(".phone_number").hide();

    $(".recharge_amount").hide();

    $(document).on('keyup', '.myNumber', function () {      
      if ( $(this).val().length >= 10 ) {
        $(".recharge_amount").show();
      }
      else {
        $(".recharge_amount").hide();
      }
    });
 

</script>
@endsection