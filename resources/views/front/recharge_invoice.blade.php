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
                    <img src="{{ asset('images/jm logo.png') }}" style="width: 65px; margin-bottom: 6px;"></img>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info mt-3">
                  <div class="col-12 text-center">
                    <h3>
                      <strong>JM Nation</strong>
                    </h3>
                  </div>
                  <div class="col-12">
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            @if($data->type == 'International')
                              <td>Phone Number</td>
                            @else
                              <td>Numero di telefono</td>
                            @endif
                            <td><strong>{{ $data->number }}</strong></td>
                          </tr>
                          <tr>
                            @if($data->type == 'International')
                              <td>Date</td>
                            @else
                              <td>Data Transazione</td>
                            @endif
                            <td><strong>{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</strong></td>
                          </tr>
                          <tr>
                            @if($data->type == 'International')
                              <td>Time</td>
                            @else
                              <td>Time Transazione</td>
                            @endif
                            <td><strong>{{ Carbon\Carbon::parse($data->created_at)->format('H:i:s') }}</strong></td>
                          </tr>
                          @if($data->type == 'Domestic')
                          <tr>
                            <td>Descrizione prodotto</td>
                            <td><strong>{{ $data->operator }}</strong></td>
                          </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                    @if($data->type == 'International')
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            <td><strong>{{ $data->operator }}</strong></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    @endif
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            @if($data->type == 'International')
                            <td>Prodotto</td>
                              <td><strong>{{ $data->amount }}</strong></td>
                              <td><strong>{{ $data->amount }}  &euro;</strong></td>
                            @endif
                          </tr>
                          <tr>
                            @if ($data->type == 'Domestic')
                            <td>Importo</td>
                            <td><strong>{{ $data->amount }} &euro;</strong></td>
                            @else
                            <td>Retailer Price</td>
                            <td><strong>{{ $data->cost + $data->service}} &euro;</strong></td>
                            @endif
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
                    {{-- @if($data->type == 'Domestic')
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
                    @endif --}}
                    <div class="recharge_invoice_table">
                      <table class="table table-sm">
                        <tbody>
                          @if($data->type == 'Domestic')
                          <tr>
                            <td>Terminale</td>
                            <td colspan="2"><strong>IT028215</strong></td>
                          </tr>
                          <tr>
                            <td>CAB</td>
                            <td><strong>3D0013D001</strong></td>
                          </tr>
                          <tr>
                            <td>Agenzia</td>
                            @php
                              $agent = DB::table('users')->where('id','reseller_id')->first();
                            @endphp
                            <td><strong>{{ $agent->nationality }}</strong></td>
                          </tr>
                          @endif
                          <tr>
                            <td style="width: 80px">Help Desk</td>
                            <td><strong>3889883882/ 34786783388</strong></td>
                          </tr>
                          <tr>
                            <td class="align-middle">Note</td>
                            <td>
                              @if ($data->type == "International")
                                <strong class="fs-6">
                                  Operazione fuori campo IVA ex art.7 sexies comma 1 lettera g del DPR 633/72. I servizi telefonici sono forniti dall'Operatore secondo gli specifici termini e condizioni generali in vigore con il Cliente; restrizioni, tasse e supplementi potrebbero essere applicati. JM Nation non ha alcun controllo e non è responsabile per il servizio di fonia fornito dall'Operatore. In caso di anomalie o reclami contattare il Servizio Clienti dell'Operatore.  
                                </strong>
                              @else
                              <strong class="fs-6">
                                {{ $data->operator }} accrediterà la ricarica entro 24 ore. Per info chiami il 159. IVA assolta ai sensi dell' ex art.74 Co.1. lett.d) DPR 633/72 da Wind Tre S.p.A PI 13378520152.
                              </strong>
                              @endif
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
                    <a href="javascript:void" onclick="window.print()" rel="noopener" class="btn btn-default">
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
  
  