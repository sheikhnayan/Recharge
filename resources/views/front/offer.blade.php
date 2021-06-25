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
      <div style="width: 60%;margin-left: 50px;">
          <h2>Offers</h2>
          <form class="card" action="/offer" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Offer:</label>
                    <input class="form-control" type="text" value="" name="offer" placeholder="Enter Offer....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black" for="fname">Operatore</label><br>
                        <select id="operator" name="operator">
                            @foreach ($operator as $item)
                                <option value="{{$item->operator}}">{{$item->operator}}</option>
                            @endforeach
                        </select>  
                </div>
                <div class="col-md-12">
                    <input style="margin-top: 40px" class="btn btn-success" type="submit" value="Add">
                </div>
            </div>
          </form>
          <div class="reseller"   style="margin-top:50px">
            <input type="search" class="light-table-filter" data-table="table-info" placeholder="Seach For Offer....">
 
            <table class="table-info table">
                <thead>
                <tr>
                <th>#</th>
                <th>Offer</th>
                <th>Operator</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->offer}}</td>
                        <td>{{$item->operator}}</td>
                        <td> <a class="btn btn-danger" href="/delete-offer/{{$item->id}}">Delete</a> </td>
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
@endsection