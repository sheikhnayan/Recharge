<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/admin.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">



</head>
<body class="hold-transition register-page">
  <form action="/reseller/update/{{ $data->id }}" method="POST">
    @csrf
  <div class="profile_info_box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/add-reseller"><img src="{{ asset('images/jm logo.jpeg') }}" width="80px" height="auto"></a>
    </div>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <div class="profile_name">
            <h2 class="lead"><b>{{ $data->first_name }} {{ $data->last_name }}</b></h2>
            <p><i class="fas fa-user-circle"></i> Profile Info</p>
          </div>
          <div class="profile_information">
            <h5 class="text-bold">ID</h5>
            <p>{{ $data->id }}</p>
          </div>
          {{-- <div class="profile_information">
            <h5 class="text-bold">Partia IVA</h5>
            <p>02094100427</p>
          </div> --}}
          <div class="profile_information">
            <h5 class="text-bold">E-mail</h5>
            <div class="profile_edit">
              <div class="profile_edit_feild">
                <p class="input_text">{{ $data->email }}</p>
                <input type="text" class="form-control profile_info_input" id="inputEmail" name="email" value="{{ $data->email }}">
              </div>
              <button type="button" class="btn btn-sm btn-default" id="profile_edit_btn"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-default" id="profile_check_btn"><i class="fas fa-check-square"></i></button>
            </div>
          </div>
          <div class="profile_information">
            <h5 class="text-bold">First Name</h5>
            <div class="profile_edit">
              <div class="profile_edit_feild">
                <p class="input_text">{{ $data->first_name }}</p>
                <input type="text" class="form-control profile_info_input" id="inputEmail" name="first_name" value="{{ $data->first_name }}">
              </div>
              <button type="button" class="btn btn-sm btn-default" id="profile_edit_btn"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-default" id="profile_check_btn"><i class="fas fa-check-square"></i></button>
            </div>
          </div>
          <div class="profile_information">
            <h5 class="text-bold">Last Name</h5>
            <div class="profile_edit">
              <div class="profile_edit_feild">
                <p class="input_text">{{ $data->last_name }}</p>
                <input type="text" class="form-control profile_info_input" id="inputEmail" name="last_name" value="{{ $data->last_name }}">
              </div>
              <button type="button" class="btn btn-sm btn-default" id="profile_edit_btn"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-default" id="profile_check_btn"><i class="fas fa-check-square"></i></button>
            </div>
          </div>
          <div class="profile_information">
            <h5 class="text-bold">Company</h5>
            <div class="profile_edit">
              <div class="profile_edit_feild">
                <p class="input_text">{{ $data->nationality }}</p>
                <input type="text" class="form-control profile_info_input" id="inputEmail" name="company" value="{{ $data->nationality }}">
              </div>
              <button type="button" class="btn btn-sm btn-default" id="profile_edit_btn"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-default" id="profile_check_btn"><i class="fas fa-check-square"></i></button>
            </div>
          </div>
          {{-- <div class="profile_information">
            <h5 class="text-bold">Address</h5>
            <div class="profile_edit">
              <div class="profile_edit_feild">
                <p class="input_text">House#43, Road#5, Mirpur, Dhaka- 1205, Bangladesh</p>
                <input type="text" class="form-control profile_info_input" id="inputEmail" value="House#43, Road#5, Mirpur, Dhaka- 1205, Bangladesh">
              </div>
              <button type="button" class="btn btn-sm btn-default" id="profile_edit_btn"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-default" id="profile_check_btn"><i class="fas fa-check-square"></i></button>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <input type="submit" value="Update" class="btn btn-success" style="width:100%">
        </div>
      </div>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.card -->
</form>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- Theme JS -->
<script src="{{ asset('js/admin.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('js/custom.js') }}"></script>


</body>
</html>
