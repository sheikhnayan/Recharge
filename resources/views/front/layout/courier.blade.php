<!DOCTYPE html>
<html lang="en">

@yield('header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
                          @if (\Session::has('error'))
                              <div class="alert alert-danger">
                                  <ul>
                                      <li>{!! \Session::get('error') !!}</li>
                                  </ul>
                              </div>
                          @endif
                          @if (\Session::has('status'))
                              <div class="alert alert-success">
                                  <ul>
                                      <li>{!! \Session::get('status') !!}</li>
                                  </ul>
                              </div>
                          @endif
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="images/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="images/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="images/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar fixd-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="/" class="brand-link" style="background: #fff;">
      <img src="{{ asset('images/jm-transparent-logo.png') }}" alt="Courier Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-bold"><strong>JM</strong> NATION</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image mt-2">
          <img src="images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info sidebar_profile_info">
          <h5>{{Auth::user()->first_name}}</h5>
          <p>{{ Auth::user()->nationality }}</p>
          <a href="/reseller/edit/{{ Auth::user()->id}}" class="mr-2">
            <small>Profile</small>
          </a>
          <a href="{{url('/logout')}}">
            <small>Log Out</small>
          </a>
        </div>
      </div>
      
      <div class="profile-info mt-3">
        <div class="row">
          <div class="col-6">
            <p style="color: #b9ff38;"><i class="nav-icon fab fa-rev mr-4"></i>{{ Auth()->user()->wallet }}</p>
          </div>
          <div class="col-6">
            <b class="mr-2">Due:</b><span>{{ Auth()->user()->due }}</span>
          </div>
          <span>
            <b class="mr-2">Corriere : </b><span> {{ Auth::user()->cargo_due }}&euro;</span>
          </span><br>
        </div>
        @if (Auth::user()->role == 'admin')
          <div class="row">
            @php
              $ding = DB::table('balances')->where('type','ding')->latest()->first();
              $domestic = DB::table('balances')->where('type','domestic')->latest()->first();
            @endphp
            <div class="col-12">
              <b class="mr-2">Ding:</b><span>{{ $ding->balance }}&euro;</span>
            </div>
            <div class="col-12">
              <b class="mr-2">Domestic:</b><span>{{ ($domestic->balance)/100 }}&euro;</span>
            </div>
          </div>
        @endif
        {{-- <div class="row">
          <div class="col-6">
            <p><i class="nav-icon fas fa-sim-card mr-4"></i>1230</p>
          </div>
          <div class="col-6">
            <b class="mr-2">Due:</b><span>0.00</span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p><i class="nav-icon fas fa-truck mr-3"></i>5000</p>
          </div>
          <div class="col-6">
            <b class="mr-2">Due:</b><span>0.00</span>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p><i class="nav-icon fas fa-mobile-alt mr-4 pr-1"></i>300</p>
          </div>
          <div class="col-6">
            <b class="mr-2">Due:</b><span>0.00</span>
          </div>
        </div> --}}
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 mb-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="@if(Route::currentRouteName() == '/') nav-item menu-open @endif nav-item">
            <a href="/" class="@if(Route::currentRouteName() == '/') nav-link active @endif nav-link">
              <i class="fa fa-home" aria-hidden="true"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          @if (Auth::user()->recharge_permission == 1)
            <li class="@if(Route::currentRouteName() == 'recharge-int' ||
                          Route::currentRouteName() == 'recharge-italy' ||
                          Route::currentRouteName() == 'recharge-gift-card' ||
                          Route::currentRouteName() == 'recharge-calling-card' ||
                          Route::currentRouteName() == 'print-all-invoice') nav-item menu-open @endif nav-item">
              <a href="#" class="@if(Route::currentRouteName() == 'recharge-int' ||
                          Route::currentRouteName() == 'recharge-italy' ||
                          Route::currentRouteName() == 'recharge-gift-card' ||
                          Route::currentRouteName() == 'recharge-calling-card' ||
                          Route::currentRouteName() == 'print-all-invoice') nav-link active @endif nav-link nav-link">
                <i class="nav-icon fab fa-rev"></i>
                <p>
                  Recharge
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/recharge/recharge-int" class="@if(Route::currentRouteName() == 'recharge-int') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>International</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/recharge/recharge-italy" class="@if(Route::currentRouteName() == 'recharge-italy') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Domestic</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/recharge/pin-italy" class="@if(Route::currentRouteName() == 'recharge-italy') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/recharge/all-invoice" class="@if(Route::currentRouteName() == 'recharge-invoice') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Invoices</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/pin/all-invoice" class="@if(Route::currentRouteName() == 'pin-invoice') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pin Invoices</p>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a href="/recharge/recharge-gift-card" class="@if(Route::currentRouteName() == 'recharge-gift-card') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gift Card</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/recharge/recharge-calling-card" class="@if(Route::currentRouteName() == 'recharge-calling-card') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Calling Card</p>
                  </a>
                </li> --}}
              </ul>
            </li>
          @endif
          @if (Auth::user()->sim_permission == 1)
            <li class="@if(Route::currentRouteName() == 'sim-activation' ||
                          Route::currentRouteName() == 'sim-selling' ||
                          Route::currentRouteName() == 'wi-fi') nav-item menu-open @endif nav-item">
              <a href="#" class="@if(Route::currentRouteName() == 'sim-activation' ||
                          Route::currentRouteName() == 'sim-selling' ||
                          Route::currentRouteName() == 'wi-fi') nav-link active @endif nav-link">
                <i class="nav-icon fas fa-sim-card"></i>
                <p>
                  SIM
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                  <a href="/operator" class="@if(Route::currentRouteName() == 'operator') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SIM Operator</p>
                  </a>
                </li>
              @endif
                <li class="nav-item">
                  <a href="/sim/sim-activation" class="@if(Route::currentRouteName() == 'sim-activation') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SIM Activation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/sim/sim-selling" class="@if(Route::currentRouteName() == 'sim-selling') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SIM Selling</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/sim/wi-fi" class="@if(Route::currentRouteName() == 'wi-fi') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Offers</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          @if (Auth::user()->cargo_permission == 1)
            <li class="@if(Route::currentRouteName() == 'cargo-new-order' || Route::currentRouteName() == 'order-list' || Route::currentRouteName() == 'order-tracking-view' || Route::currentRouteName() == 'order-invoice-view') nav-item menu-open @endif nav-item">
              <a href="#" class="@if(Route::currentRouteName() == 'cargo-new-order' || Route::currentRouteName() == 'order-list' || Route::currentRouteName() == 'order-tracking-view' || Route::currentRouteName() == 'order-invoice-view') nav-link active @endif nav-link">
                <i class="nav-icon fas fa-truck"></i>
                <p>
                  Cargo(Courier Service)
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/cargo/new-order" class="@if(Route::currentRouteName() == 'cargo-new-order') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Order</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/cargo/order-list" class="@if(Route::currentRouteName() == 'order-list') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Order List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/cargo/order-tracking-view" class="@if(Route::currentRouteName() == 'order-tracking-view') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tracking</p>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a href="/cargo/order-invoice" class="@if(Route::currentRouteName() == 'order-invoice-view') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
                  </a>
                </li> --}}
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                  <a href="/pricing-list" class="@if(Route::currentRouteName() == 'add-new-pricing') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Pricing</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>
          @endif
          @if (Auth::user()->mobile_permission == 1)
            <li class="@if(Route::currentRouteName() == 'phone-order' || Route::currentRouteName() == 'selling-list') nav-item menu-open @endif nav-item">
              <a href="#" class="@if(Route::currentRouteName() == 'phone-order' || Route::currentRouteName() == 'selling-list') nav-link active menu-open @endif nav-link">
                <i class="nav-icon fas fa-mobile-alt"></i>
                <p>
                  Phone
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                  <a href="/phone/add-phone-view" class="@if(Route::currentRouteName() == 'add-phone-view') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Phone</p>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a href="/phone/phone-order" class="@if(Route::currentRouteName() == 'phone-order') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Order</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/phone/selling-list" class="@if(Route::currentRouteName() == 'selling-list') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Selling</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
            <li class="@if(Route::currentRouteName() == 'retailer-details' || Route::currentRouteName() == 'retailer-action' || Route::currentRouteName() == 'retailer-sign-up') nav-item menu-open @endif nav-item">
              <a href="#" class="@if(Route::currentRouteName() == 'retailer-details' || Route::currentRouteName() == 'retailer-action' || Route::currentRouteName() == 'retailer-sign-up') nav-link active @endif nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Retailer
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/retailer/retailer-details" class="@if(Route::currentRouteName() == 'retailer-details') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Retailer Details</p>
                  </a>
                </li>
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                  <a href="/retailer/retailer-action" class="@if(Route::currentRouteName() == 'retailer-action') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Retailer Action</p>
                  </a>
                </li>
                @endif
                @if (Auth::user()->reseller_permission == 1)
                <li class="nav-item">
                  <a href="/retailer/retailer-sign-up" class="@if(Route::currentRouteName() == 'retailer-sign-up') nav-link active @endif nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Retailer</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

    <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#">jmnation.com</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- 
=======================
  REQUIRED SCRIPTS
======================= 
-->

  @yield('scripts')
  @yield('js')

</body>
</html>
