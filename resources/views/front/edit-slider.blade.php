@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Slider Phone</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
  <link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>
@endsection

@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<form enctype="multipart/form-data" method="post" action="{{route('edit-slider',$data->id)}}">
			@csrf
			@if (session('status'))
              	<div class="alert alert-success">
                  	{{ session('status') }}
              	</div>
          	@endif
		  <div class="form-group">
		    <label for="formGroupExampleInput">slider link</label>
		    <input type="text" class="form-control" value="{{ $data->link }}" id="formGroupExampleInput" name="link" placeholder="Example input">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Image</label>
		    <input type="file" class="form-control" id="formGroupExampleInput" name="image" placeholder="Example input">
		  </div>
		  <div class="form-group">
				<img class="img-fluid" style="width: 600px" src="{{ asset('storage/'.$data->image) }}" alt="">
		  </div>
		  <input type="hidden" name="id" value="{{ $data->id }}">
		  <button class="btn btn-success" type="submit">Edit Slider</button>
		</form>
	</div>
</div>
@endsection

@section('js')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('js/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('js/moment.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- BS-Custom-file-input -->
<script src="{{asset('js/bs-custom-file-input.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection