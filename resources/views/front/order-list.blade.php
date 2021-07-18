@extends('front.layout.main')
@section('content')
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
      <td>{{$order->City}}</td>
      <td>Tiger Nixon</td>
      <td>Tiger Nixon</td>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
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
@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
@endsection