@extends('front.layout.main')

@section('content')
      <div style="width: 60%;margin-left: 50px;">
          <h2>Add Re-Seller</h2>
          <div class="reseller">
          {{-- <form action="https://takethetech.com/api/send" method="post"> --}}
            <form action="/check-operator" method="post">
            @csrf
              <label for="fname">Number</label><br>
              <input type="text" id="fname" name="number" placeholder="Enter Phone Number..."><br>

              @if ($checked ?? 0 == 1)

              <h5> <span style="font-weight: bold">Operatore: </span><img src="{{$logo}}" alt="{{$operator}}" class="img-fluid" style="max-width: 100px;">  {{$operator}}</h5>

              <h5></h5>

              <label for="fname">Amount</label><br>
              <input type="text" id="lname" name="amount" placeholder="Enter Amount...."><br>
              @endif

              <input type="hidden" name="authid" value="{{Auth::user()->id}}">
              
              <input type="submit" value="Recharge"><br>
          </form>
      </div>


    </div>
@endsection