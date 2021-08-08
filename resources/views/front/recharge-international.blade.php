@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recharge International</title>

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
              <a href="/"><img src="images/jm logo.jpeg" width="80px" height="auto"></a>
            </div>
            <div class="card-body">
              <p class="login-box-msg">Mobile Recharge or Bill Payment</p>
              <div class="row">
                <div class="col-md-6">
                  <form action="" method="post">
                    <div class="mb-3 receiver_inputs">
                      <label for="inputMobileNumber" class="form-label">Receiver Number</label>
                      <input type="text" class="form-control receiver_input_form" id="receiverMobile" placeholder="Receiver Number">
                      <button class="btn btn-primary" style="margin-bottom: 6px; float: right;">Verify</button>
                    </div>
                    <div class="form-group">
                      <label for="selectOparetor">Oparetor</label>
                      <select class="custom-select" id="selectOparetor">
                        <option>Select Oparetor</option>
                        <option>Grameenphone</option>
                        <option>Robi</option>
                        <option>Banglalink</option>
                        <option>Taletalk</option>
                        <option>Airtel</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="selectPackage">Package Type</label>
                      <select class="custom-select" name="package" id="package">
                        <option>Sellect Package</option>
                        <option name="recharge" value="recharge">Recharge</option>
                        <option name="interner" value="internet">Internet data</option>
                        <option name="minute" value="minute">Minute</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="inputAmount" class="form-label">Service Charge in (EUR)</label>
                      <input type="text" class="form-control" id="inputAmount" placeholder="Service Charge in EUR 0.50-10.00">
                    </div>
                  </form>

                  <div class="row internet_package_offer">
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="internet_package">
                        <div class="int_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">2.5GB INTERNET 57 TK VALIDITY 3 DAYS</strong>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row minute_package_offer">
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3">
                      <div class="minute_package">
                        <div class="minute_package_code">
                          <strong>EUR 0.6042</strong>
                        </div>
                        <strong style="color: #00c3ff;">220 MINUTE 99 TK VALIDITY 7 DAYS</strong>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-info mt-3" style="width: 100%;">Continue</button>
                </div>
                <div class="col-md-6">
                  <div class="last_recharge_table">
                    <div class="last_recharge_table_head text-center">
                      <h5><strong>Last 10 Recharge</strong></h5>
                    </div>
                
                    <div class="card-body table-responsive p-0">
                      <table class="table table-sm table-bordered table-hover">
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
  <!-- /.content-wrapper -->
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>


<script src="{{asset('plugin/intl-tel-input/js/intlTelInput.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection

@section('js')
<script>
  var receiverMobile = document.querySelector("#receiverMobile");
  window.intlTelInput(receiverMobile, {
    // any initialisation options go here
  });
</script>


@endsection