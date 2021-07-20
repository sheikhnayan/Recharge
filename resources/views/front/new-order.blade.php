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


    </div>
@endsection