@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Retailer Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<style type="text/css">
  .modal-content{
    border:whitesmoke 6px solid;
  }
</style>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="d-inline-block">Retailer Details</h1>
            <div class="search-form d-inline-block" style="float: right;">
              {{-- <div class="input-group" data-widget="sidebar-search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-search">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
                          @if (\Session::has('message'))
                              <div class="alert alert-danger">
                                  <ul>
                                      <li>{!! \Session::get('message') !!}</li>
                                  </ul>
                              </div>
                          @endif
            @foreach ($data as $item)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                {{-- <div class="card-header border-bottom-0">
                  <button class="btn btn-sm bg-teal" id="activeBtn">
                    Active Profile
                  </button>
                  <button class="btn btn-sm bg-danger" id="deactiveBtn" style="display:none;">
                    Deactive Profile
                  </button>
                </div> --}}
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{ $item->first_name }} {{ $item->last_name }}</b></h2>
                      <p class="text-muted text-sm" style="margin-bottom: 0;"><b>Company: </b> {{ $item->nationality }} </p>
                      <p class="text-muted text-sm"><b>ID: </b> {{ $item->id }} </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        {{-- <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City
                          04312, NJ</li> --}}
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-at"></i></span> Email Address: {{ $item->email }}</li>
                        {{-- <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : + 800 - 12 12 23 52</li> --}}
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      {{-- <img src="images/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid"> --}}
                      <div class="  mt-2">
                        <strong>Balance: </strong>
                        <span>&euro;{{ $item->wallet }}</span>
                      </div>

                      <!-- ADD BALANCE -->
                      <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" id="{{$item->id}}modal_id" data-target="#boom{{$item->id}}">Add Balance</button>

                      <div class="modal fade bd-example-modal-sm" id="boom{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <form action="{{url('/add_balance')}}" method="post">
                              @csrf
                              <div>
                                <input class="form-control" type="hidden" name="user_id" value="{{$item->id}}">
                                <input class="form-control" type="number" step="0.01" name="balance">
                                <button class="btn btn-success btn-sm"  type="submit">Add Balance For {{$item->first_name}}</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>



                      <div class="  mt-2">
                        <strong>Due: </strong>
                        <span>&euro; {{ $item->due }}</span>
                      </div>


                      <!-- ADD DUE -->
                      <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" id="{{$item->id}}modal_id" data-target="#boom1{{$item->id}}">Add Due</button>

                      <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" id="{{$item->id}}modal_id" data-target="#boom2{{$item->id}}">Edit Due</button>

                      <div class="modal fade bd-example-modal-sm" id="boom1{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <form action="{{url('/add_balance')}}" method="post">
                              @csrf
                              <div>
                                <input class="form-control" type="hidden" name="user_id" value="{{$item->id}}">
                                <input class="form-control" type="number" step="0.01" name="due">
                                <button class="btn btn-success btn-sm"  type="submit">Add Due For {{$item->first_name}}</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>


                      <div class="modal fade bd-example-modal-sm" id="boom2{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <form action="{{url('/edit_balance')}}" method="post">
                              @csrf
                              <div>
                                <input class="form-control" type="hidden" name="user_id" value="{{$item->id}}">
                                <input class="form-control" type="number" step="0.01" name="due">
                                <button class="btn btn-success btn-sm"  type="submit">Edit Due For {{$item->first_name}}</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>



                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    {{-- <button type="button" class="btn btn-sm bg-info mt-1" data-toggle="modal" data-target="#modal-default">
                      <i class="fas fa-comments"></i>
                    </button> --}}
                    <a href="/reseller/edit/{{ $item->id }}" class="btn btn-sm btn-secondary mt-1">
                      <i class="fas fa-edit"></i> Edit Profile
                    </a>
                    <a href="/reseller/delete/{{ $item->id }}" class="btn btn-sm btn-danger mt-1">
                      <i class="fas fa-user"></i> Delete
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          {{-- <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav> --}}
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content client_message-box">
        <div class="modal-header">
          <h4 class="modal-title">
            <img class="direct-chat-img" src="images/user1-128x128.jpg" alt="message user image" style="margin-right: 10px;">
            Alexander Pierce
          </h4>
          <div class="card-tools">
            <span title="3 New Messages" class="badge badge-primary">3</span>
            <button type="button" class="btn btn-tool" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="direct-chat-messages">
              <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-left">Alexander Pierce</span>
                  <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                </div>
                <img class="direct-chat-img" src="images/user1-128x128.jpg" alt="message user image">
                <div class="direct-chat-text">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, reprehenderit.
                </div>
              </div>
          
          
              <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-right">Sarah Bullock</span>
                  <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                </div>
                <img class="direct-chat-img" src="images/user3-128x128.jpg" alt="message user image">
                <div class="direct-chat-text">
                  Lorem ipsum dolor sit amet.
                </div>
              </div>
          
              <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-left">Alexander Pierce</span>
                  <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                </div>
                <img class="direct-chat-img" src="images/user1-128x128.jpg" alt="message user image">
                <div class="direct-chat-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptatum quasi.
                </div>
              </div>
          
              <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-right">Sarah Bullock</span>
                  <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                </div>
                <img class="direct-chat-img" src="images/user3-128x128.jpg" alt="message user image">
                <div class="direct-chat-text">
                  Lorem ipsum dolor sit amet consectetur.
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <form action="#" method="post">
              <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                <span class="input-group-append">
                  <button type="button" class="btn btn-primary">Send</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custome JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection