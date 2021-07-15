@extends('front.layout.main')

@section('content')
      <div style="width: 60%;margin-left: 50px;">
        <br>
        <br>
        <br>
          <a class="btn btn-primary" href="{{ route('create-new-order') }}">Add Order</a>

          <h2>Search</h2>
          <form action="{{ route('search') }}" method="post">
          <div class="form-row">
            @csrf
            <div class="col">
              <label for="code">Customer Code</label>
              <input type="text" class="form-control" id="code" name="customer_code" placeholder="Enter Customer Code...">
            </div>
            <div class="col">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Surname...">
            </div>
            <br>
            <div class="col">
              <label for="phone_number">Phone Number</label>
              <input type="tel" class="form-control" placeholder="Your Phone Number..." name="phone_number" id="phone_number">
            </div>
            <div class="col">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control" placeholder="yyyy-mm-dd" id="dob" name="dob">
            </div>
            <input type="submit" value="Search">
            
          </div>
          </form>


    </div>
@endsection