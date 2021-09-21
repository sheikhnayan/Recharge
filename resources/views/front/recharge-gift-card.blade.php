@extends('front.layout.courier')
@section('header')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recharge Gift Card</title>

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
              <a href="index.html"><img src="images/jm logo.png" width="80px" height="auto"></a>
            </div>
            <div class="card-body gift_card_inner">
              <h3 class="text-center mb-5">Gift Card</h3>
              <div class="row">
                <div class="col-12">
                  <h4>Select Provider</h4>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-1">
                      <img src="images/gift-ribon-3.png" alt="rebon" width="100%" height="50%">
                      <div class="text-right pr-3">
                        <span><img src="images/iTunes_store.png" alt="" width="70%" height="auto"></span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-2">
                      <img src="images/gift-ribon-2.png" alt="rebon" width="100%" height="50%">
                      <div class="text-right pr-3">
                        <span><img src="images/PlayStation_Store.png" alt="" width="70%" height="auto"></span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-3">
                      <img src="images/gift-ribon-5.png" alt="rebon" width="40%" height="50%">
                      <div class="text-right pr-3" style="margin-top: -20px;">
                        <span><img src="images/Skype_logo.svg.png" alt="" width="70%" height="auto"></span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-4">
                      <img src="images/gift-ribon-5.png" alt="rebon" width="40%" height="50%">
                      <div class="text-right xbox-margin pr-3" style="margin-top: -65px;">
                        <span><img src="images/xbox-logo-png-15.png" alt="" width="70%" height="auto"></span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-5">
                      <img src="images/gift-ribon-2.png" alt="rebon" width="100%" height="50%">
                      <div class="text-right pr-3">
                        <span><img src="images/steam-logo-transparent.png" alt="" width="auto" height="50px"></span>
                        <span class="text-bold mt-2" style="color: #fff; font-size: 20px;">STEAM SAUDI</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-6">
                      <img src="images/gift-ribon-5.png" alt="rebon" width="40%" height="50%">
                      <div class="text-right pr-3 pl-3">
                        <span><img src="images/pcs.png" alt="" width="40%" height="auto"></span>
                        <span class="pcs-text" style="color: #fff; font-size: 20px;">Master Card France</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-7">
                      <img src="images/gift-ribon-3.png" alt="rebon" width="100%" height="50%">
                      <div class="text-right pr-3">
                        <span><img src="images/nintendo-logo-png-transparent.png" alt="" width="50%" height="auto"></span>
                        <span class="nintendo-text" class="text-bold" style="color: #2c2c2c; font-size: 20px;">Nintendo US</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-8">
                      <img src="images/gift-ribon-2.png" alt="rebon" width="100%" height="50%">
                      <div class="text-right pr-3">
                        <span><img src="images/spotifyUs.png" alt="" width="70%" height="auto"></span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-9">
                      <img src="images/gift-ribon-5.png" alt="rebon" width="40%" height="50%">
                      <div class="text-right pr-3">
                        <span><img src="images/salik-2.png" alt="" width="30%" height="auto"></span>
                        <span class="text-bold" style="color: #fff; font-size: 20px;">SALIC UAE</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-10">
                      <img src="images/gift-ribon-5.png" alt="rebon" width="40%" height="50%">
                      <div class="text-right pr-3" style="margin-top: -50px;">
                        <span><img src="images/homedepot.png" alt="" width="50px" height="auto"></span><BR><BR>
                        <span class="text-bold home_depot-text" style="color: #fff; font-size: 16px;">THE HOME DEPOT USA</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-11">
                      <img src="images/gift-ribon-2.png" alt="rebon" width="100%" height="50%">
                      <div class="text-right razer_gold pr-3">
                        <span><img src="images/razerGold.png" alt="" width="auto" height="70px"></span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                  <a href="recharge_gift_card-2.html">
                    <div class="gift_card_body card-bg-1">
                      <img src="images/gift-ribon-5.png" alt="rebon" width="40%" height="50%">
                      <div class="text-right xbox-margin pr-3" style="margin-top: -65px;">
                        <span><img src="images/xbox-logo-png-15.png" alt="" width="70%" height="auto"></span>
                      </div>
                    </div>
                  </a>
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
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>

@endsection