@extends('front.layout.main')

@section('content')
<style>
  input {
    width: 100%;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #212121;
    height: 40px;
}
table {
    margin-top: 30px;
}
tr:nth-of-type(even) {
    background: #ffd98b;
}
thead {
    background: #f8af3c;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div style="width: 60%;margin-left: 50px;">
                <h2 style="float: left">Sim Order</h2>
                <div class="reseller">
                  <input type="search" class="light-table-filter" data-table="table-info" placeholder="ICCID Number, SIM Number, Operator Name etc.">
       
                  <table class="table-info table">
                      <thead>
                      <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Gender</th>
                      <th>DOB</th>
                      <th>Codice</th>
                      <th>Operator</th>
                      <th>ICCID Number</th>
                      <th>SIM Number</th>
                      <th>ALT Operator</th>
                      <th>ALT ICCID Number</th>
                      <th>ALT Sim Number</th>
                      <th>Reseller ID</th>
                      <th>Scarica i file caricati</th>
                      <th>Invoice</th>
                      <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $item)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{$item->first_name}}</td>
                              <td>{{$item->last_name}}</td>
                              <td>{{$item->gender}}</td>
                              <td>{{$item->dob}}</td>
                              <td>{{$item->codice}}</td>
                              <td>{{$item->operator}}</td>
                              <td>{{$item->iccid}}</td>
                              <td>{{$item->sim_number}}</td>
                              <td>{{$item->alt_operator}}</td>
                              <td>{{$item->alt_iccid}}</td>
                              <td>{{$item->alt_sim_number}}</td>
                              <td>{{$item->reseller_id}}</td>
                              <td> <a class="btn btn-success" href="/sim-download/{{$item->id}}">Download</a></td>
                              <td><a class="btn btn-success" href="/sim-invoice/{{$item->id}}">Invoice</a></td>
                              <td>
                                  <form action="/sim-order/update" method="POST">
                                  @csrf
      
                                  <input type="hidden" name="sim_id" value="{{$item->sim_id}}">
      
                                  <select name="status" style="width: 120px">
                                      <option {{$item->status == 'available' ? 'selected' : '' }} value="available">Available</option>
                                      <option {{$item->status == 'pending' ? 'selected' : '' }} value="pending">Pending</option>
                                      <option {{$item->status == 'sold' ? 'selected' : '' }} value="sold">Sold</option>
                                  </select>
                                  <input type="submit" value="Update" class="btn btn-success">
                                  </form>    
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                  </table>
               
              </section>
               
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
               
            </div>
      
      
          </div>
        </div>
    </div>
</div>
    
      
@endsection