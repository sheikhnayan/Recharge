@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print All Invioce</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>

@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i>
                  <strong>Invoice List</strong>
                </h3>
              </div>
              <!-- /.card-header -->

              <div class="p-3">
                <div class="date_picker_pair mb-3">
                  <label for="inputSearchDate" class="form-label">Search By Date</label>
                  <input type="text" class="form-control" name="daterange" id="inputSearchDate" value="01/01/2018 - 01/15/2018">
                  <!-- <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" /> -->
                </div>
                <form action="/filebytype" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group offer_select_option">
                      <label for="ExampleSelect">Tipo Ricarica</label>
                      <select class="custom-select" id="ExampleSelect" name="type">
                        <option value="all">All</option>
                        <option value="International">Recharge International</option>
                        <option value="Domestic">Recharge Domestic</option>
                        {{-- <option value="offer_table_two">Gift Card</option>
                        <option value="offer_table_two">Calling Card</option> --}}
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <input type="submit" value="Search" class="btn btn-success">
                  </div>
                </div>
              </form>
                {{-- <div class="converter_section mt-5">
                  <div class="converter_btn-1">
                    <button type="button" class="btn btn-info btn-sm">Copy</button>
                    <button type="button" class="btn btn-info btn-sm">Exel</button>
                    <button type="button" class="btn btn-info btn-sm">CSV</button>
                    <button type="button" class="btn btn-info btn-sm">PDF</button>
                  </div>
                  <div class="converter_search-1">
                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <div class="agent_amount_table">
                  <table class="table table-sm table-bordered">
                    <thead class="table-danger">
                      <tr>
                        <th>Totale</th>
                        {{-- <th>Agent</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-sky">
                        <td>{{ $cost }} &euro;</td>
                        {{-- <td>{{ $profit }} &euro;</td> --}}
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="converter_section mt-5">
                  <div class="converter_btn-1">
                    <button type="button" class="btn btn-info btn-sm">Copy</button>
                    <button type="button" class="btn btn-info btn-sm">Exel</button>
                    <button type="button" class="btn btn-info btn-sm">CSV</button>
                    <button type="button" class="btn btn-info btn-sm">PDF</button>
                  </div>
                  <div class="converter_search-1">
                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        <input type="text" name="table_search" data-table="table-info" class="form-control float-right light-table-filter" placeholder="Search">
                    
                        {{-- <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="recharge_input_table table-responsive p-0" style="height: 550px;">
                  <table class="table table-info table-sm table-bordered table-hover table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th style="background: #faaeae;">Requestld</th>
                        {{-- <th style="background: #faaeae;">Numero</th> --}}
                        <th style="background: #faaeae;">Importo</th>
                        <th style="background: #faaeae;">Data</th>
                        <th style="background: #faaeae;">Provv agent</th>
                      </tr>
                    </thead>
                    <tbody id='change'>
                      @foreach ($data as $item)
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="/recharge_invoice/{{ $item->id }}">
                            <i class="fas fa-print"></i>
                          </a>
                          {{ $item->txid }}
                        </td>
                        {{-- <td>+{{ $item->number }}</td> --}}
                        <td>{{ $item->cost }} &euro;</td>
                        <td>{{ $item->created_at }}</td>
                        @if (Auth::user()->role == 'admin')
                        <td>{{ $item->admin_com }} &euro;</td>
                        @else
                        <td>{{ $item->reseller_com }} &euro;</td>
                        @endif
                      </tr>
                      @endforeach
                      {{-- <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr> --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    /* Code By Webdevtrick ( https://webdevtrick.com ) */
(function(document) {
'use strict';

var TableFilter = (function(Arr) {

var _input;

function _onInputEvent(e) {
_input = e.target;
var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
Arr.forEach.call(tables, function(table) {
Arr.forEach.call(table.tBodies, function(tbody) {
Arr.forEach.call(tbody.rows, _filter);
});
});
}

function _filter(row) {
var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
}

return {
init: function() {
var inputs = document.getElementsByClassName('light-table-filter');
Arr.forEach.call(inputs, function(input) {
input.oninput = _onInputEvent;
});
}
};
})(Array.prototype);

document.addEventListener('readystatechange', function() {
if (document.readyState === 'complete') {
TableFilter.init();
}
});

})(document);
  </script>
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>

@endsection

@section('js')
<script>
$(function() {
  var start = moment().subtract(29, 'days');
  var end = moment();
  $('input[name="daterange"]').daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
       'Today': [moment(), moment()],
       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
  }, function(start, end, label) {


      var url = '/filebydate/'+start.format('YYYY-MM-DD')+'/'+end.format('YYYY-MM-DD');
      window.location = url;
       console.log('/filebydate/'+start.format('YYYY-MM-DD')+'/'+end.format('YYYY-MM-DD'));
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end).format('YYYY-MM-DD');
  });
});
</script>
@endsection