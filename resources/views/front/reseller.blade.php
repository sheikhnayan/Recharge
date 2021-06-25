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
          <h2 style="float: left">Re-Sellers</h2>
          <div class="reseller">
            <input type="search" class="light-table-filter" data-table="table-info" placeholder="Name,Email etc.">
 
            <table class="table-info table">
                <thead>
                <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Wallet</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($show as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->first_name}}</td>
                        <td>{{$item->last_name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->wallet}}</td>
                        <td> 
                            <a class="btn btn-danger" href="/reseller/delete/{{$item->id}}">Delete</a> 
                            <a class="btn btn-success" href="/reseller/edit/{{$item->id}}">Edit</a> 
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
@endsection