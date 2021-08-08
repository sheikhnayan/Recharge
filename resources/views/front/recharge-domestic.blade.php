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
              <a href="index.html"><img src="images/jm logo.jpeg" width="80px" height="auto"></a>
            </div>
            <div class="card-body">
              <h3 class="text-center mb-5">Indice Brand Richriche</h3>
              <div class="row">
                <div class="col-md-6">
                  <form action="" method="post">
                    <div class="form-group">
                      <label>Brand</label>
                  
                      <div class="brand-select-list">
                        <button type="button" class="selected-brand text-left" name="selected_brand" value=""></button>
                        <div class="brandUlLiContainer">
                          <ul id="brandUlList" style="max-height: 200px; overflow: auto;"></ul>
                        </div>
                      </div>
                  
                      <select class=" brand-dropdown" style="width: 100%;">
                        <option value="Fastweb" data-thumbnail="images/fastweb.png"> Fastweb</option>
                        <option value="Vodafone" data-thumbnail="images/vodafone.png">Vodafone</option>
                        <option value="Tiscali" data-thumbnail="images/Tiscali.png">Tiscali</option>
                        <option value="Tim" data-thumbnail="images/Tim.png">Tim</option>
                        <option value="WindTre" data-thumbnail="images/WindTre.png">WindTre</option>
                        <option value="PosteMobile" data-thumbnail="images/PosteMobile.png">PosteMobile Online</option>
                        <option value="Digi" data-thumbnail="images/Digi.png">Digi Mobil</option>
                        <option value="Tim-Carta" data-thumbnail="images/Tim-Carta.png">Tim-Carta Servizi</option>
                        <option value="CoopVoce" data-thumbnail="images/coop-voce-1-480x480.jpeg">CoopVoce</option>
                        <option value="Ho" data-thumbnail="images/Ho.png">Ho Mobile</option>
                        <option value="Vodafone-Carte" data-thumbnail="images/vodafone.png">Vodafone-Carte Servizi</option>
                        <option value="Iliad" data-thumbnail="images/Iliad.png">Iliad</option>
                      </select>
                    </div>
                    <div class="mb-3 phone_number">
                      <label for="inputMobileNumber" class="form-label">Mobile Number</label>
                      <input type="text" class="form-control myNumber" id="inputMobileNumber" name="myNumber" value="" placeholder="Please enter mobile number">
                    </div>
                  
                    <div class="mb-3">
                      <input type="text" class="form-control" id="inputAmount" placeholder="Please select amount from below" readonly="">
                    </div>

                    <div class="row recharge_amount mb-5">
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(10)">
                            <strong>10 Tk</strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(20)">
                            <strong>20 Tk</strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(30)">
                            <strong>30 Tk</strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(40)">
                            <strong>40 Tk</strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(50)">
                            <strong>50 Tk</strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(100)">
                            <strong>100 Tk</strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(200)">
                            <strong>200 Tk</strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                        <div class="Recharge_package">
                          <div class="recharge_tk" onclick="selectAmount(300)">
                            <strong>300 Tk</strong>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="mt-3">
                      <button type="button" class="btn btn-info" style="width: 100%;">Continue</button>
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
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>5.00</td>
                            <td>EUR 4.50</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
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
<script type="text/javascript">

    //test for iterating over child elements
    var dropdownArray = [];
    $('.brand-dropdown option').each(function(){
      var img = $(this).attr("data-thumbnail");
      var text = this.innerText;
      var value = $(this).val();
      var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
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