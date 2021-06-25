@extends('front.layout.main')

@section('content')
      <div style="width: 60%;margin-left: 50px;">
          <h2>Add Re-Seller</h2>
          <div class="reseller">
          <form action="/reseller/update/{{$data->id}}" method="post">
            @csrf
              <label for="fname">First Name</label><br>
              <input type="text" id="fname" name="first_name" value="{{$data->first_name}}" placeholder="Your First Name..."><br>

              <label for="fname">Last Name</label><br>
              <input type="text" id="lname" name="last_name" value="{{$data->last_name}}" placeholder="Your Last Name..."><br>

              <label for="email">E-Mail</label><br>
              <input type="text" placeholder="Your Email..." value="{{$data->email}}" name="email"><br>
              
              {{-- <label for="password">Password</label><br>
              <input type="password" name="password"> --}}

              {{-- <div id="yourBtn" onclick="getFile()">click to upload a file</div> --}}
              <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" value="upload" onchange="sub(this)" /></div>
              
              <input type="submit" value="Update Re-Seller"><br>
          </form>
      </div>


    </div>
@endsection