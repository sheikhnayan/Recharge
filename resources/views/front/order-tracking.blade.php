@extends('front.layout.main')

@section('content')

<div class="col-md-6">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus-circle"></i> Track Your Order </h3>
            <div class="box-tools pull-right">
                
            </div>
        </div>
        <br><br>
        <div class="box-body col">
        	<form action="{{route('track')}}">
            <div class="row-md-3">
                <label>Order/Tracking Number</label>
                <input type="text" id="order_no" name="order_no" class="form-control" placeholder="SBC0000010">
            </div>
            <div class="row-md-2">
                <br>
                <button type="submit" id="search" class="btn btn-success btn-block"><i class="fa fa-search"></i>
                Search Order
                </button>
            </div>
            </form>
        </div>
        <div class="box-footer">
            <div class="col-md-12">
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
</table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection