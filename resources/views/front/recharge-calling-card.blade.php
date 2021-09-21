@extends('front.layout.courier')
@section('header')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recharge Calling Card</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('plugin/intl-tel-input/css/intlTelInput.min.css')}}">

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
              <a href="index.html"><img src="images/jm logo.png" width="80px" height="auto"></a>
            </div>
            <div class="card-body">
              <h3 class="text-center mb-5">Calling Card</h3>
              <div class="row">
                <div class="col-md-6">
                  <form action="" method="post">
                    <div class="mb-3 receiver_inputs">
                      <label for="inputMobileNumber" class="form-label">Receiver Number</label>
                      <input type="text" class="form-control receiver_input_form" id="receiverMobile" placeholder="Receiver Number">
                      <button class="btn btn-primary" style="margin-bottom: 6px; float: right;">Verify</button>
                    </div>
                    <div class="form-group" style="position: relative;">
                      <label>Select Operator</label>
                    
                      <div class="brand-select-list">
                        <button type="button" class="selected-brand text-left" name="selected_brand" value=""></button>
                        <div class="brandUlLiContainer">
                          <ul id="brandUlList" style="max-height: 200px; overflow: auto;"></ul>
                        </div>
                      </div>
                    
                      <select class=" brand-dropdown" style="width: 100%;">
                        <option value="Whitecalling" data-thumbnail="images/whiteCallingLogo.png">Whitecalling</option>
                        <option value="TalkHome" data-thumbnail="images/talkHome.png">TalkHome</option>
                      </select>
                    </div>
                  </form>
                  <div class="row white_calling_pin" style="display:none;">
                    <div class="col-sm-6 mb-3">
                      <div class="calling_card_package" data-toggle="modal" data-target="#modal-default">
                        <div class="int_package_code">
                          <strong>WHITE CALLING PINS 5 EURO</strong>
                        </div>
                        <strong style="color: #00c3ff;">EUR 5.0000</strong>
                        <div class="int_package_code-2">
                          <strong>EUR 4.5001</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row talk_home_pin" style="display:none;">
                    <div class="col-sm-6 mb-3">
                      <div class="calling_card_package" data-toggle="modal" data-target="#modal-default">
                        <div class="int_package_code">
                          <strong>TALK HOME PINS 5 EURO</strong>
                        </div>
                        <strong style="color: #00c3ff;">EUR 5.0000</strong>
                        <div class="int_package_code-2">
                          <strong>EUR 4.5001</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <div class="calling_card_package" data-toggle="modal" data-target="#modal-default">
                        <div class="int_package_code">
                          <strong>TALK HOME PINS 10 EURO</strong>
                        </div>
                        <strong style="color: #00c3ff;">EUR 10.0000</strong>
                        <div class="int_package_code-2">
                          <strong>EUR 8.5001</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <div class="calling_card_package" data-toggle="modal" data-target="#modal-default">
                        <div class="int_package_code">
                          <strong>TALK HOME PINS 20 EURO</strong>
                        </div>
                        <strong style="color: #00c3ff;">EUR 20.0000</strong>
                        <div class="int_package_code-2">
                          <strong>EUR 18.5001</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-info mt-3" style="width: 100%;">Continue</button>
                </div>
                <div class="col-md-6">
                  <div class="last_recharge_table">
                    <div class="last_recharge_table_head text-center">
                      <h5><strong>Last 10 PIN Recharge</strong></h5>
                    </div>
                
                    <div class="card-body table-responsive p-0">
                      <table class="table table-sm table-bordered table-hover">
                        <thead>
                          <tr class="table-danger">
                            <th>Receiver</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Cost</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-ocean">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
                            <td><i class="text-primary fas fa-check-square"></i></td>
                          </tr>
                          <tr class="bg-sky">
                            <td>393897666667</td>
                            <td>1</td>
                            <td>500.00</td>
                            <td>EUR 4.5001</td>
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
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
            Local PIN Recharge Confirmation
          </h4>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Sender</td>
                  <td>VR218</td>
                </tr>
                <tr>
                  <td>Receiver</td>
                  <td>+3938854126</td>
                </tr>
                <tr>
                  <td>Amount</td>
                  <td>EUR 5.0000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer text-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
              Close
            </button>
            <button type="button" class="btn btn-primary">Confirm & Process</button>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection


@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>


<script src="{{asset('plugin/intl-tel-input/js/intlTelInput.js')}}"></script>

@endsection

@section('js')
<script>
  var receiverMobile = document.querySelector("#receiverMobile");
  window.intlTelInput(receiverMobile, {
    // any initialisation options go here
  });



   //test for iterating over child elements
    var dropdownArray = [];
    $('.brand-dropdown option').each(function () {
      var img = $(this).attr("data-thumbnail");
      var text = this.innerText;
      var value = $(this).val();
      var item = '<li><img src="' + img + '" alt="" value="' + value + '"/><span>' + text + '</span></li>';
      dropdownArray.push(item);
    })

    $('#brandUlList').html(dropdownArray);

    // default if needed
    // $('.selected-brand').html(dropdownArray[0]);
    $('.selected-brand').html('Select Brand');
    $('.selected-brand').attr('value', '');

    //change button stuff on click
    $('#brandUlList li').click(function () {
      var img = $(this).find('img').attr("src");
      var value = $(this).find('img').attr('value');
      var text = this.innerText;
      var item = '<li><img src="' + img + '" alt="" /><span>' + text + '</span></li>';
      $('.selected-brand').html(item);
      $('.selected-brand').attr('value', value).trigger('change');
      $(".brandUlLiContainer").toggle();
      

      if ( value == 'Whitecalling' ) {
          $('.white_calling_pin').show();
          $('.talk_home_pin').hide();
      }
      if ( value == 'TalkHome' ) {
          $('.white_calling_pin').hide();
          $('.talk_home_pin').show();
      }

    });
  $(".selected-brand").click(function () {
      $(".brandUlLiContainer").toggle();
  });

</script>


<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection