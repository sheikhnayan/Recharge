@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selling List</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i><strong>Selling List</strong></h3>

                <div class="card-tools selling_list_search">
                  <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 550px;">
                <table class="table table-sm table-bordered table-hover table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="background: #faaeae;">Order No</th>
                      <th style="background: #faaeae;">Date</th>
                      <th style="background: #faaeae;">Phone</th>
                      <th style="background: #faaeae;">Quantity</th>
                      <th style="background: #faaeae;">State</th>
                      <th class="text-center" style="background: #faaeae;">Agent Name</th>
                      @if (Auth::user()->role == 'admin')
                      <th class="text-center" style="background: #faaeae;">Action</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr class="bg-ocean">
                      <td style="text-align: center" >{{ $item->id }}</td>
                      <td style="text-align: center"><span>{{ $item->created_at }} </span></td>
                      <td style="text-align: center">{{ $item->phone_name }}</td>
                      <td style="text-align: center">{{ $item->quantity }}</td>
                      <td style="text-align: center">{{ $item->status }}</td>
                      <td style="text-align: center">{{ $item->nationality }}</td>
                      @if (Auth::user()->role == 'admin')
                      <td style="text-align: center">
                        <form action="/phone/update" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{ $item->id }}">
                          <input type="hidden" name="nationality" value="{{ $item->nationality }}">
                          <input type="hidden" name="phone_name" value="{{ $item->phone_name }}">
                          <select name="status" style="width: 120px">
                            <option {{$item->status == 'sold' ? 'selected' : '' }} value="sold">Sold</option>
                              <option {{$item->status == 'pending' ? 'selected' : '' }} value="pending">Pending</option>
                              <option {{$item->status == 'cancel' ? 'selected' : '' }} value="cancel">Cancel</option>
                          </select>
                          <input type="submit" value="Update" class="btn btn-success">
                          </form>
                      </td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection