@extends('front.layout.main')

@section('content')
      <div style="width: 60%;margin-left: 50px;">
        <br>
        <br>
        <br>
          <a class="btn btn-primary" href="{{ route('create-new-order') }}">Add Order</a>

          <h2>Search</h2>
          <form action="{{ route('search') }}" method="get">
          <div class="form-row">
            @csrf
            <div class="col">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email...">
            </div>
            
            <input type="submit" value="Search">
            
          </div>
          </form>
          <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Id
      </th>
      <th class="th-sm">Date
      </th>
      <th class="th-sm">Agent
      </th>
      <th class="th-sm">City
      </th>
      <th class="th-sm">Customer
      </th>
      <th class="th-sm">Receiver
      </th>
      <th class="th-sm">Box
      </th>
      <th class="th-sm">Weight
      </th>
      <th class="th-sm">Charge
      </th>
      <th class="th-sm">Goods Type
      </th>
      <th class="th-sm">Destination
      </th>
      <th class="th-sm">Status
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td>{{$order->id}}</td>
      <td>{{$order->created_at}}</td>
      <td>Agent Name</td>
      <td>{{$order->city}}</td>
      <td>{{$order->first_name}}</td>
      <td>{{$order->rfirst_name}}</td>
      <td>{{$order->numberOfBox}}</td>
      <td>{{$order->weight}}</td>
      <td>{{$order->total}}</td>
      <td>{{$order->productType}}</td>
      <td>{{$order->raddress}}</td>
      <td>{{$order->status}}</td>
      <td><button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-gear tiny-icon"></i><span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li> <a target="_blank" href=""><i class="fa fa-print tiny-icon"></i> Print Invoice </a></li>
            <li> <a target="_blank" href=""><i class="fa fa-print tiny-icon"></i> Print Label </a></li>
            <li> <a href="" onclick="return confirm('Are you sure to cancel ?')"><i class="fa fa-remove"></i> Cancel </a></li>
          </ul>
      </td>
    </tr>
    @endforeach

  </tbody>
  <tfoot>
    <tr>
      <th class="th-sm">Id
      </th>
      <th class="th-sm">Date
      </th>
      <th class="th-sm">Agent
      </th>
      <th class="th-sm">City
      </th>
      <th class="th-sm">Customer
      </th>
      <th class="th-sm">Receiver
      </th>
      <th class="th-sm">Box
      </th>
      <th class="th-sm">Weight
      </th>
      <th class="th-sm">Charge
      </th>
      <th class="th-sm">Goods Type
      </th>
      <th class="th-sm">Destination
      </th>
      <th class="th-sm">Status
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </tfoot>
</table>


    </div>
@endsection