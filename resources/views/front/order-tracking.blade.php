@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cargo Order Tracking</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 phone_order_header d-block">
            <form action="{{route('track')}}">
            <div class="order_page_header mb-4">
              <h4><i class="fas fa-hand-point-right"></i>Order Tracking</h4>
              <a href="cargo_new_order.html"><i class="fas fa-plus-circle"></i>New Order</a>
            </div>
            </form>
            <div class="input-group mb-4">
              <label for="inputTrackingNumber" class="form-label" style="margin: 5px 15px 0 0;">Order/Tracking Number</label>
              <input type="text" class="form-control" id="inputTrackingNumber" placeholder="JLC0001234">
              <button type="submit" class="input-group-text tracking-btn" id="basic-addon2">Search</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="tracking_report">
              <div class="delivary_update_header">
                <h1>Delivary Update</h1>
                <h3>Pending...</h3>
                <p><strong>Expected Delivary Date : </strong>Monday, 7/30/2021</p>
                <button type="button" class="update_status_btn">TO KNOW UPDATE STATUS</button>
                <div class="update_submit_mail">
                  <div class="input-group mb-4">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                    <span class="input-group-text" id="basic-addon2">Submit</span>
                  </div>
                </div>
              </div>
              <div class="row from-to-country mt-5">
                <div class="col-6 text-center">
                  <p><strong>FROM</strong></p>
                  <p>ANCONA, IT</p>
                </div>
                <div class="col-6 text-center">
                  <p><strong>TO</strong></p>
                  <p>DHAKA, BD</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12">
                  <div class="card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                      <ul class="nav nav-tabs" id="delivary_updates_tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="history-tabs" data-toggle="pill" href="#travel_history_tabs"
                            role="tab" aria-controls="travel_history_tabs" aria-selected="true">Travel History</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="shipment-tabs" data-toggle="pill" href="#shipment_fact_tabs"
                            role="tab" aria-controls="shipment_fact_tabs" aria-selected="false">Shipment Facts</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body px-0">
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="travel_history_tabs" role="tabpanel" aria-labelledby="history-tabs">
                          <div class="travel_dates">
                            <strong>Wednesday, June 23, 2021</strong>
                          </div>
                          <div class="travel_date_details">
                            <div class="row bg-sky pt-2">
                              <div class="col-sm-3">
                                <p>9:08 PM</p>
                              </div>
                              <div class="col-sm-3">
                                <p>LONATE POZZOLO, IT</p>
                              </div>
                              <div class="col-sm-6">
                                <p>Arrived at FedEx hub</p>
                              </div>
                            </div>
                            <div class="row bg-ocean pt-2">
                              <div class="col-sm-3">
                                <p>8:47 PM</p>
                              </div>
                              <div class="col-sm-3">
                                <p>LONATE POZZOLO, IT</p>
                              </div>
                              <div class="col-sm-6">
                                <p>International shipment release - Export</p>
                              </div>
                            </div>
                            <div class="row bg-sky pt-2">
                              <div class="col-sm-3">
                                <p>3:57 PM</p>
                              </div>
                              <div class="col-sm-3">
                                <p>ANCONA, IT</p>
                              </div>
                              <div class="col-sm-6">
                                <p>Picked up</p>
                              </div>
                            </div>
                          </div>
                          <div class="travel_dates mt-5">
                            <strong>Monday, June 21, 2021</strong>
                          </div>
                          <div class="travel_date_details">
                            <div class="row bg-ocean pt-2">
                              <div class="col-sm-3">
                                <p>4:06 PM</p>
                              </div>
                              <div class="col-sm-3">
                                <p></p>
                              </div>
                              <div class="col-sm-6">
                                <p>Shipment information sent to FedEx</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="shipment_fact_tabs" role="tabpanel" aria-labelledby="shipment-tabs">
                          <div class="shipment_details">
                            <ul>
                              <li>
                                <h6 class="text-bold">TRACKING NUMBER</h6>
                                <p>774058038684</p>
                              </li>
                              <li>
                                <h6 class="text-bold">SERVICE</h6>
                                <p>FedEx International Economy</p>
                              </li>
                              <li>
                                <h6 class="text-bold">WEIGHT</h6>
                                <p>15.43 lbs / 7 kgs</p>
                              </li>
                              <li>
                                <h6 class="text-bold">TOTAL PIECES</h6>
                                <p>1</p>
                              </li>
                              <li>
                                <h6 class="text-bold">TOTAL SHIPMENT WEIGHT</h6>
                                <p>15.43 lbs / 7 kgs</p>
                              </li>
                              <li>
                                <h6 class="text-bold">TERMS</h6>
                                <p>Shipper</p>
                              </li>
                              <li>
                                <h6 class="text-bold">PACKAGING</h6>
                                <p>Your Packaging</p>
                              </li>
                              <li>
                                <h6 class="text-bold">SPECIAL HANDLING SECTION</h6>
                                <p>Deliver Weekday</p>
                              </li>
                              <li>
                                <h6 class="text-bold">SHIP DATE</h6>
                                <p>6/23/21</p>
                              </li>
                              <li>
                                <h6 class="text-bold">STANDARD TRANSIT</h6>
                                <p>7/4/21 by 8:00 pm</p>
                              </li>
                              <li>
                                <h6 class="text-bold">UPDATED-DELIVERY</h6>
                                <p>Pending</p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('script')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection
</body>
</html>