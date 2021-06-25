@extends('front.layout.main')

@section('content')
      <div style="width: 60%;margin-left: 50px;">
          <h2>Wallet Recharge</h2>
          <div class="reseller">
          <form action="/wallet" method="post">
            @csrf
              <label for="fname">Amount</label><br>
              <input type="text" id="fname" name="number" placeholder="Enter Amount..."><br>

              <label for="fname">Re-seller</label><br>
              <input type="text" id="lname" name="amount" placeholder="Enter Amount...."><br>
              
              <input type="submit" value="Recharge"><br>
          </form>
      </div>


    </div>
@endsection