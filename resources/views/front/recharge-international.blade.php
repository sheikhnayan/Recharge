

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
                  <a href="/"><img src="{{ asset('images/jm logo.jpeg') }}" width="80px" height="auto"></a>
               </div>
               <div class="card-body">
                  <p class="login-box-msg">Mobile Recharge or Offers </p>
                  <div class="row">
                     <div class="col-md-6">
                        @if ($stage == 'check_number')
                        <form action="/check-product" method="POST">
                           @elseif($stage == 'get_product')
                        <form action="/international_recharge" method="POST">
                           @else
                        <form action="/check-operator" method="POST">
                           @endif
                           @csrf
                           <div class="mb-3 receiver_inputs">
                              <label for="inputMobileNumber" class="form-label">Receiver Number</label>
                              @if ($stage == 'initial')
                              <input type="text" value="{{ $datas['number'] ?? '' }}" class="form-control receiver_input_form" name="number" placeholder="Receiver Number">
                              @else
                              <input type="text" value="{{ $datas['number'] ?? '' }}" class="form-control receiver_input_form" name="number" placeholder="Receiver Number" readonly>
                              @endif
                              {{-- <button class="btn btn-primary" style="margin-bottom: 6px; float: right;">Verify</button> --}}
                           </div>
                           @if ($stage == 'check_number')
                           <div class="form-group">
                              <label for="selectOparetor">Oparetor</label>
                              <select class="custom-select" name="operator" id="operators">
                                 @foreach ($operators as $item)
                                 <option value="">Select Operator</option>
                                 <option {{ ( $datas['operator'] ?? '' == $item['ProviderCode']) ? 'selected' : '' }} value="{{ $item['ProviderCode'] }}">{{ $item['Name'] }}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="selectPackage">Package Type</label>
                              <select class="custom-select" name="package" id="package">
                                 <option selected="selected" name="recharge" value="recharge">Recharge</option>
                              </select>
                           </div>
                           @elseif($stage == 'initial')
                           
                           @else
                           <div class="form-group">
                            <label for="selectOparetor">Oparetor</label>
                            <select class="custom-select" name="operator" id="operators" readonly>
                               <option value="{{ $datas['operator'] }}">{{ $datas['operator'] }}</option>
                            </select>
                         </div>
                         <div class="form-group">
                            <label for="selectPackage">Package Type</label>
                            <select class="custom-select" name="package" id="package">
                               <option selected="selected" name="recharge" value="recharge">Recharge</option>
                            </select>
                         </div>
                           @endif
                           @if (isset($stage))
                           @if ($stage == 'get_product')
                           @if ($count ?? '' > 1)
                           <div class="form-group">
                              <label for="selectPackage">Select Amount</label>
                              <select class="custom-select" name="amount" id="package">
                                 @foreach ($prods as $item)
                                 <option value="{{ $item['SkuCode'] }},{{ $item['Maximum']['SendValue'] }}">
                                    {{ $item['Maximum']['SendValue'] }} Euro
                                    <h7 style="font-size: 10px;">({{ $item['Maximum']['ReceiveValueExcludingTax'] }} {{ $item['Maximum']['ReceiveCurrencyIso'] }} will be received)</h7>
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                           @else
                           <div class="mb-3">
                              <label for="inputAmount" class="form-label">Service Charge in (EUR)</label>
                              <input type="text" class="form-control" name="amount" placeholder="Service Charge in EUR 0.50-10.00">
                           </div>
                           @endif
                           @endif
                           @endif
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
                           @if ($stage == 'check_number')
                           <input type="submit" class="btn btn-info mt-3" value="Get Products" style="width: 100%;">
                           @elseif($stage == 'get_product')
                           <input type="submit" class="btn btn-info mt-3" value="Recharge" style="width: 100%;">
                           @else
                           <input type="submit" class="btn btn-info mt-3" value="Continue" style="width: 100%;">
                           @endif
                     </div>
                     </form>
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

