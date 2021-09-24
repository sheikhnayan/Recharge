

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
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>
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
                  <a href="/"><img src="{{ asset('images/jm logo.png') }}" width="80px" height="auto"></a>
               </div>
               <div class="card-body">
                  <p class="login-box-msg">Mobile Recharge or Offers </p>
                  <div class="row">
                     <div class="col-md-6">
                        @if ($stage == 'check_number')
                        <form action="/check-changed-product" method="POST">
                           @elseif($stage == 'get_product')
                        <form action="/international_recharge" method="POST">
                           @else
                        <form action="/check-operator" method="POST">
                           @endif
                           @csrf
                           <div class="mb-3 receiver_inputs">
                              <label for="inputMobileNumber" class="form-label">Receiver Number</label>
                              @if ($stage == 'initial')
                              <input type="text" id="receiverMobile" value="{{ $datas[0]['UatNumber'] ?? '' }}" class="form-control receiver_input_form" name="number" placeholder="Receiver Number">
                              @else
                              <input type="text" value="{{ $datas['number'] ?? '' }}" class="form-control receiver_input_form" name="number" placeholder="Receiver Number" readonly>
                              @endif
                              {{-- <button class="btn btn-primary" style="margin-bottom: 6px; float: right;">Verify</button> --}}
                           </div>
                           @if ($stage == 'check_number')
                           <div class="form-group">
                              <label for="selectOparetor">Oparetor</label>
                              <select class="custom-select" name="operator" id="operators">
                                 <option value="">Select Operator</option>
                                 @foreach ($operators as $item)
                                    @if ( strpos($item['Name'], 'Data') == false)
                                       <option {{ ( $datas['operator'] ?? '' == $item['ProviderCode']) ? 'selected' : '' }} value="{{ $item['ProviderCode'] }}">{{ $item['Name'] }}</option>
                                    @endif
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
                            <a class="btn btn-success" href="/change-operator/{{ $datas['number'] ?? '' }}/{{ $rg ?? '' }}"> Change Operator</a>
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
                           @if ($count > 1)
                           <div class="form-group">
                              <label for="selectPackage">Select Amount</label>
                              <select class="custom-select" name="amount" id="package">
                                 @foreach ($prods as $item)
                                 <option value="{{ $item['SkuCode'] }},{{ $item['Maximum']['SendValue']}}">
                                    {{ $item['Maximum']['SendValue'] + (($item['Maximum']['SendValue']/100)*Auth::user()->admin_international_recharge_commission) + (($item['Maximum']['SendValue']/100)*Auth::user()->international_recharge) }} Euro
                                    <h7 style="font-size: 10px;">({{ $item['Maximum']['ReceiveValueExcludingTax'] }} {{ $item['Maximum']['ReceiveCurrencyIso'] }} will be received)</h7>
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                           <label class="form-label">Service Charge in EURO</label>
                           <input type="number" step="any" name="service" class="form-control" placeholder="Enter Service Charge (Optional)">
                           @else
                           <div class="mb-3">
                              <label for="inputAmount" class="form-label">Amount (EUR)</label>
                              <input oninput="cost()" id="amount" type="number" step="any"
                              min="{{ $prods['0']['Minimum']['SendValue'] + (($prods['0']['Minimum']['SendValue']/100)*Auth::user()->admin_international_recharge_commission) + (($prods['0']['Minimum']['SendValue']/100)*Auth::user()->international_recharge) }}" 
                              max="{{ $prods['0']['Maximum']['SendValue'] + (($prods['0']['Maximum']['SendValue']/100)*Auth::user()->admin_international_recharge_commission) + (($prods['0']['Maximum']['SendValue']/100)*Auth::user()->international_recharge) }}" 
                              class="form-control" name="amount" 
                              placeholder="Between Euro {{ $prods['0']['Maximum']['SendValue'] + (($prods['0']['Maximum']['SendValue']/100)*Auth::user()->admin_international_recharge_commission) + (($prods['0']['Maximum']['SendValue']/100)*Auth::user()->international_recharge)}}  -  Euro {{ $prods['0']['Minimum']['SendValue'] + (($prods['0']['Minimum']['SendValue']/100)*Auth::user()->admin_international_recharge_commission) + (($prods['0']['Minimum']['SendValue']/100)*Auth::user()->international_recharge)}}">
                              <input type="hidden" name="Sku_Code" value="{{ $prods['0']['SkuCode'] }}" id="skucode">
                              <input type="hidden" id="admin_com" value="{{ Auth::user()->admin_international_recharge_commission }}">
                              <input type="hidden" id="reseller_com" value="{{ Auth::user()->international_recharge }}">
                              <small style="font-size: 18px;text-align: center;font-weight: bold;color: red;" id="price"></small><br>
                              <input type="hidden" name="received_amount" id="received_amount">
                           </div>
                           <label class="form-label">Service Charge in EURO</label>
                           <input type="number" step="any" name="service" class="form-control" placeholder="Enter Service Charge (Optional)">
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
                                       <th>Operator</th>
                                       <th>Cost</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($data as $item)
                                    <tr class="bg-ocean">
                                       <<td>{{ $item->number }}</td>
                                       <td>{{ $item->operator }}</td>
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
<!-- /.content-wrapper -->
<script>
   function cost(){
      var amount = document.getElementById('amount').value;
      var admin = document.getElementById('admin_com').value;
      var reseller = document.getElementById('reseller_com').value;
      var admin_cost = (amount/100)*admin;
      var reseller_cost = (amount/100)*reseller;
      var cost = (admin_cost + reseller_cost);
      var skucode = document.getElementById('skucode').value;
      var am = Number(amount);
      var pm = Number(cost);
      var token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "https://api.dingconnect.com/api/V1/EstimatePrices",
        type:"POST",
        dataType: 'json',
        crossDomain: true,
        contentType: 'application/json',
        headers:{
         api_key:"HcdOK7ZaUKD5aN0SoH3n23",
         'X-CSRF-TOKEN': token
        },
        data: JSON.stringify([{
          SendValue:amount - cost,
          SkuCode:skucode,
          BatchItemRef:Math.floor(Math.random() * 100000000000),
        }]),
        success:function(response){
          console.log(response.Items[0].Price.ReceiveValue);
          document.getElementById("price").innerHTML = 'You Will Receive ' + response.Items[0].Price.ReceiveValue +' ' +response.Items[0].Price.ReceiveCurrencyIso+'. ';
          document.getElementById("received_amount").setAttribute('value',response.Items[0].Price.ReceiveValue);
        },
       });
   }
</script>
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
   // Vanilla Javascript
   var input = document.querySelector("#receiverMobile");
   window.intlTelInput(input,({
     // options here
   }));

   $(document).ready(function() {
       $('.iti__flag-container').click(function() { 
         var countryCode = $('.iti__selected-flag').attr('title');
         var countryCode = countryCode.replace(/[^0-9]/g,'')
         $('#receiverMobile').val("");
         $('#receiverMobile').val("+"+countryCode+" "+ $('#receiverMobile').val());
      });
   });
 </script>
@endsection

