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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="recharge_invoice mt-3">
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12 text-center">
                    <img src="{{ asset('images/jm logo.jpeg') }}" style="width: 65px; margin-bottom: 6px;"></img>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info mt-3">
                  <div class="col-12 text-center">
                    <h3>
                      <strong>JM Logistic</strong>
                    </h3>
                  </div>
                  <div class="col-12">
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          {{-- <tr>
                            <td>PIN</td>
                            <td><strong>635214513366</strong></td>
                          </tr> --}}
                          <tr>
                            <td>Date</td>
                            <td><strong>{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</strong></td>
                          </tr>
                          <tr>
                            <td>Time</td>
                            <td><strong>{{ Carbon\Carbon::parse($data->created_at)->format('H:i:s') }}</strong></td>
                          </tr>
                          {{-- <tr>
                            <td>Descrizion</td>
                            <td><strong>Ricarica Pin</strong></td>
                          </tr> --}}
                          <tr>
                            <td>Prodotto</td>
                            <td><strong>{{ $data->amount }}  &euro;</strong></td>
                          </tr>
                          <tr>
                            <td>Importo</td>
                            <td><strong>{{ $data->cost }} &euro;</strong></td>
                          </tr>
                          {{-- <tr>
                            <td>bilancia</td>
                            <td><strong>{{ $data->amount }} &euro;</strong></td>
                          </tr> --}}
                        </tbody>
                      </table>
                    </div>
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            <td colspan="2"><strong>Transazione Esegulta</strong></td>
                          </tr>
                          <tr>
                            <td>Id Transazione</td>
                            <td><strong>{{ $data->txid }}</strong></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    @if($data->type == 'ss')
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            <td>Autorizzazione</td>
                            <td colspan="2"><strong>46735685</strong></td>
                          </tr>
                          <tr>
                            <td>Num. Operazion</td>
                            <td><strong>53252136</strong></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    @endif
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          @if($data->type == 'ss')
                          <tr>
                            <td>Terminale</td>
                            <td colspan="2"><strong>4673685</strong></td>
                          </tr>
                          <tr>
                            <td>ABI/CAB</td>
                            <td><strong>96306/AAVED</strong></td>
                          </tr>
                          @endif
                          <tr>
                            <td>Agenzia</td>
                            <td><strong>Point recharge</strong></td>
                          </tr>
                          <tr>
                            <td style="width: 80px">Help Desk</td>
                            <td><strong>3889883882/ 34786783388</strong></td>
                          </tr>
                          <tr>
                            <td class="align-middle">Note</td>
                            <td>
                              <strong class="fs-6">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Fugiat doloribus ducimus veniam. Libero accusantium vero, 
                                incidunt quas ipsam repudiandae, error maxime impedit 
                                tempora ab laboriosam placeat repellat!  
                              </strong>
                            </td>
                          </tr>
                          {{-- <tr>
                            <td>Scadenza</td>
                            <td>
                              <strong>31-12-2021</strong>
                            </td>
                          </tr> --}}
                        </tbody>
                      </table>
                    </div>
                    <p style="text-align: center;font-weight:bold">Powered by: Point Recharge</p>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              
                
                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12 text-center">
                    <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-default">
                      <i class="fas fa-print"></i> 
                      Print
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.invoice -->
            </div>
          </div>
        </div><!-- /.row -->
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
  
  