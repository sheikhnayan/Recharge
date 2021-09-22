

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
  <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
        <form action="/reseller/update/{{ $data->id }}" method="POST">
          @csrf
          <div class="card-header text-center">
              <a href="/"><img src="{{ asset('images/jm logo.png') }}" width="80px" height="auto"></a>
          </div>
          <div class="card-body">
              <p class="login-box-msg">Edit Profile</p>
              <div class="input-group mb-3">
                <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control" placeholder="First name">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control" placeholder="Last Name">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="company" value="{{ $data->nationality }}" class="form-control" placeholder="Company Name">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="vat_number" value="{{ $data->vat_number }}" class="form-control" placeholder="Partita IVA">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <textarea class="form-control" name="address"  rows="1" placeholder="Address">{{ $data->address }}</textarea>
                <div class="input-group-text">
                    <span class="fas fa-house-user"></span>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" value="{{ $data->email }}" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-at"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="phone" class="form-control" value="{{ $data->mobile }}" placeholder="Mobile Number">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-mobile-alt"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="codice_fiscale" class="form-control" value="{{ $data->codice_fiscale }}" placeholder="Codice Fiscale">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-mobile-alt"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" value="" placeholder="New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <select name="gender" class="form-control" value="{{ $data->gender }}">
                <option {{ ( $data->gender == 'male') ? 'selected' : '' }} value="male">Male</option>
                <option {{ ( $data->gender == 'female') ? 'selected' : '' }} value="female">Female</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                </div>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                    <input type="submit" class="btn btn-primary btn-block" value="Update">
                </div>
                <!-- /.col -->
              </div>
              
        </div>
        <!-- /.form-box -->
        </form>
    </div>
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

