@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cargo | Invoice</title>

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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="cargo_commission.html">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive invoice_table p-5">
                  <table class="table table-sm table-bordered mb-0">
                    <tbody>
                    <tr>
                      <td colspan="4" class="inner-table invoice_table_border p-1">
                        <table class="table-sm">
                          <tbody>
                            <tr>
                              <td>
                                <label>Agent Code</label>
                              </td>
                              <td>
                                <b>1038</b>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Agent Name</label>
                              </td>
                              <td>
                                <span>JM LOGISTIC</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Agent Address</label>
                              </td>
                              <td>
                                <span>Via Aldo Fiorini, 40, ANCONA, Ancona, ITALY</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Phone</label>
                              </td>
                              <td>
                                <span>3280807591-0712362286</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Email</label>
                              </td>
                              <td>
                                <span>example@gmail.com</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td colspan="4" class=" invoice_table_border p-0">
                        <div class="logo-table p-0">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td class="pt-4"><img src="images/jm logo.jpeg" alt="logo" width="130" height="90"></td>
                                <td class="text-center pt-4">
                                  <h3>Tracking Number</h3>
                                  <h4><b>JML000124</b></h4>
                                  <b>Date: 12-07-2021</b>
                                </td>
                                <td><img src="images/QR_Code.png" alt="QR Code" width="130" height="130"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4" class="text-center invoice_table_border">
                        <b>SENDER INFORMATION</b>
                      </td>
                      <td colspan="4" class="text-center invoice_table_border">
                        <b>RECEIVER INFORMATION</b>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4" class="inner-table invoice_table_border p-1">
                        <table class="table-sm">
                          <tbody>
                            <tr>
                              <td>
                                <label>Customer ID</label>
                              </td>
                              <td>
                                <b>7805</b>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Surname</label>
                              </td>
                              <td>
                                <span>ABUL</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Name</label>
                              </td>
                              <td>
                                <span>KHAIR</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Date of Birth</label>
                              </td>
                              <td>
                                <span>1992-04-16</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Phone Number</label>
                              </td>
                              <td>
                                <span>3293030586</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Address</label>
                              </td>
                              <td>
                                <span>CORSO CARLO ALBERTO 24</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Country</label>
                              </td>
                              <td>
                                <span>ITALY</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td colspan="4" class="inner-table invoice_table_border p-1">
                        <table class="table-sm">
                          <tbody>
                            <tr>
                              <td>
                                <label>Surname</label>
                              </td>
                              <td>
                                <span>SOBUJ</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Name</label>
                              </td>
                              <td>
                                <span>HOWLADER</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Date of Birth</label>
                              </td>
                              <td>
                                <span>1992-04-16</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Phone Number</label>
                              </td>
                              <td>
                                <span>3293030586</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Address</label>
                              </td>
                              <td>
                                <span>CORSO CARLO ALBERTO 24</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Country</label>
                              </td>
                              <td>
                                <span>ITALY</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4" class="inner-table invoice_table_border p-1">
                        <table class="table-sm">
                          <tbody>
                            <tr>
                              <td>
                                <label>Product Type</label>
                              </td>
                              <td>
                                <span>Goods</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Destination Country</label>
                              </td>
                              <td>
                                <span>ITALY</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Delivery Type</label>
                              </td>
                              <td>
                                <span>Home Delivery in Europe</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td colspan="2" class="inner-table invoice_table_border p-1">
                        <table class="table-sm">
                          <tbody>
                            <tr>
                              <td>
                                <label>No of Packets:</label>
                              </td>
                              <td>
                                <span>1</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Charge/Kg:</label>
                              </td>
                              <td>
                                <span>20.00</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Additional Charge:</label>
                              </td>
                              <td>
                                <span>0.00</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td colspan="2" class="inner-table invoice_table_border p-1">
                        <table class="table-sm">
                          <tbody>
                            <tr>
                              <td>
                                <label>Value of Goods:</label>
                              </td>
                              <td>
                                <span>99.00</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Weight:</label>
                              </td>
                              <td>
                                <span>2.00 Kg</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Home Delivery:</label>
                              </td>
                              <td>
                                <span>0.00</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label>Total Amount:</label>
                              </td>
                              <td>
                                <span>&euro; 20.00</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered invoice_table">
                    <tbody>
                      <tr>
                        <td colspan="2" class="align-middle invoice_table_border" style="width: 23%;">
                          <h5>JM LOGISTIC</h5>
                        </td>
                        <td colspan="6" class="invoice_table_border" style="width: 77%;">
                          <b>Italy Office :</b> Via Delle Ninfee 32,00172 , Email: infogbsm@gmail.com, Mobile :3883929293<br>
                          <b>Dhaka Office :</b> 20 Novarun (Ground floor) Dilu Road, New Eskaton Dhaka-1000,Bangladesh
                          Phone Number: +8801687595451, +01553906183 <b>Customer Service Number : +390697629541</b>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="8" class="invoice_table_border" style="padding: 10px 8px;">
                          <b>TERMS AND CONDITIONS :</b> <br>
                          <b>***Shipping time</b> Any delivery dates provided by Sundarban Cargo are estimates. Sundarban Cargo reserves the right to
                          make deliveries in instalments. Sometimes due to customs clearance problem, your Consignment might be delayed for
                          extra 60 working days from the actual arrival date. <b>***Lost & Damaged products</b> Due to unavoidable circumstances, goods may
                          be lost from customs. In this regard, shipper will get refund of 80% <b>of the consignment value. We will not be liable
                          for any loss or damage</b> to the consignment, or any delay or mis delivery if the cause was any of the following: a) War,
                          terrorism, riot, strike, lockout or any similar action. b) Natural disasters (e.g. floods), poor or extreme weather
                          conditions. c) The consignment being seized or detained by any public authority. d) Incorrect or insufficient
                          address given on the consignment note or manifest. This includes any omission or ambiguity of information provided by you.
                          e) Incorrect or insufficient packaging of the consignment. f) Natural wastage of a perishable or fragile consignment.
                          <b>***Fines & Extra Charges</b> Shipper will be charged extra charges for the following reasons: a) If the actual weight of
                          consignment is higher from the weight provided by shipper in the invoice. b) If any Flammable items found in the
                          consignment, shipper will be fined <b>&euro;170</b> . c) If customs charged extra duties or taxes for the clearance.
                          <br>
                          <br>
                          I confirm that, I have read and agreed to the terms and conditions. All goods are personally packed by me and have
                          been in constant possession since packing. I declare all items on the invoice. If any undeclared items are found then I
                          will be held Responsible. My Consignment DO NOT contain any illegal items and NO hazardous goods nor any explosives of
                          any description.
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" class="invoice_table_border" style="padding: 15px 8px;">
                          <b>Customer Signarure</b>
                        </td>
                        <td colspan="2" class="invoice_table_border" style="padding: 15px 8px;">
                          <span>..................................</span>
                        </td>
                        <td colspan="2" class="invoice_table_border" style="padding: 15px 8px;">
                          <b>Agent Signarure</b>
                        </td>
                        <td colspan="2" class="invoice_table_border" style="padding: 15px 8px;">
                          <span>..................................</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print px-5">
                <div class="col-12">
                  <a href="javascript:void" onclick="window.print()" rel="noopener" target="_blank" class="btn btn-default">
                    <i class="fas fa-print"></i>
                    Print
                  </a>
                  <button type="button" class="btn btn-danger float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
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
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection

</body>
</html>
