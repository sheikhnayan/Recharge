<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Point BD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="shortcut icon" href="http://sundarbancargo.eu/favicon.ico" type="image/x-icon">
      <link rel="icon" href="http://sundarbancargo.eu/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="http://sundarbancargo.eu/css/app.css">
      <link rel="stylesheet" href="http://sundarbancargo.eu/css/admin.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
      <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css">
      <link rel="stylesheet" href="http://sundarbancargo.eu/css/plugins.css">
      <link rel="stylesheet" href="http://sundarbancargo.eu/opt/css/custom.css">
      <link rel="stylesheet" href="http://sundarbancargo.eu/opt/intro/introjs.css">
      <script src="http://sundarbancargo.eu/opt/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="http://sundarbancargo.eu/opt/sweetalert.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="http://sundarbancargo.eu/opt/emoji/emojionearea.min.css">
      <link rel="stylesheet" href="http://sundarbancargo.eu/css/style.css">
      <link rel="stylesheet" href="http://sundarbancargo.eu/css/custome.css">
      <link rel="stylesheet" href="http://sundarbancargo.eu/css/multiselect.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
      <style type="text/css">
      table.dataTable thead .sorting:after,
      table.dataTable thead .sorting:before,
      table.dataTable thead .sorting_asc:after,
      table.dataTable thead .sorting_asc:before,
      table.dataTable thead .sorting_asc_disabled:after,
      table.dataTable thead .sorting_asc_disabled:before,
      table.dataTable thead .sorting_desc:after,
      table.dataTable thead .sorting_desc:before,
      table.dataTable thead .sorting_desc_disabled:after,
      table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
      }
      </style>
      <style>
         li>a {
         font-size: 18px;
         font-weight: 600;
         }
      </style>
      <style>
         td {
         padding: 10px;
         }
         table, th, td {
         border: 2px solid black;
         text-align: center;
         }
      </style>
    <style type="text/css">
      .dropdown {
  float: left;
  overflow: hidden;
}

.dropbtn {
  cursor: pointer;
  font-size: 1 rem;
  padding: 1rem 1rem;
}

.dropdown-content {
  display: none;
  background-color: rgb(50,55,61);
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  padding: 1rem;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

    </style>
  <link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>
  <body>
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
          </button>
        </div>
        <div class="img bg-wrap text-center py-2" style=""><a href="index.php"><img src="{{asset('front/Logo.png')}}" width="50%"></a>
          <div class="user-logo"></div>
        </div>

        <li class="list-unstyled components mb-5">
          <span>
            <span class="names m-2">Welcome {{Auth::user()->first_name}}</span>
          </span><br>
          <span>
            <span class="color m-2">Partner : </span><span> Point Recharge</span>
          </span><br>
          {{-- <span>
            <span class="color m-2">Saldo Ricariche : </span><span class="text-muted"> {{Auth::user()->wallet}}</span>
          </span><br> --}}
          <span>
            <span class="color m-2">Corriere dovuto : </span><span class="text-muted"> {{ Auth::user()->cargo_due }}</span>
          </span><br>
          {{-- <span>
            <span class="color m-2">Debito Sim : </span><span class="text-muted"> 5000</span>
          </span><br> --}}
          {{-- <span>
            <span class="color m-2">Debito SmartPhone : </span><span class="text-muted">300</span>
          </span> --}}
        </li>

        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          {{-- <li>
            <a href="#"><span class="fa fa-photo mr-3"></span> Post</a>
          </li> --}}
          @if (Auth::user()->role === 'admin')
            <li>
              <a href="/recharge"><img src="{{asset('front/Recharge-Logo.png')}}" width="07%" class="mr-3"> Recharges</a>
            </li>
          @endif
          <li>
            <a class="dropbtn" onclick="myFunction2()"><span class="fa fa-tasks mr-3"></span> Sim Management <i class="fa fa-caret-down"></i>
                  <div class="dropdown-content" id="myDropdown2">
                   <a href="/sim"><img src="{{asset('front/SIM-logo.png')}}" width="09%" class="mr-3"> SIM Activation</a>
                    @if (Auth::user()->role === 'admin')
                      <a href="/operator"><img src="{{asset('front/SIM-logo.png')}}" width="09%" class="mr-3"> SIM Operators</a>
                      <a href="/offer"><img src="{{asset('front/SIM-logo.png')}}" width="09%" class="mr-3"> SIM Offers</a>
                    @endif
                    <a href="/sim-orders"><img src="{{asset('front/Order-Logo.png')}}" width="07%" class="mr-3">SIM Orders</a>
                  </div>
            </a>
          </li>
          <li>
            <a class="dropbtn" onclick="myFunction()"><span class="fa fa-tasks mr-3"></span> Management <i class="fa fa-caret-down"></i>
                  <div class="dropdown-content" id="myDropdown">
                    <a href="/add-reseller">Add Re-Seller</a>
                    @if (Auth::user()->role === 'admin')
                      <a href="/resellers">Re-Seller List</a>
                    @endif
                  </div>
            </a>
          </li>
          @if (Auth::user()->role === 'admin')
          <li>
            <a class="dropbtn" onclick="myFunction3()"><span class="fa fa-tasks mr-3"></span> Cargo <i class="fa fa-caret-down"></i>
                <div class="dropdown-content" id="myDropdown3">
                  <a href="/cargo/new-order">New Order</a>
                  <a href="/cargo/order-list">Order List</a>
                  <a href="/cargo/order-tracking-view">Order Tracking</a>
                  <a href="/cargo/order-invoice">Order Invoice</a>
                </div>
            </a>
          </li>
          @endif
          @if (Auth::user()->role === 'admin')
          <li>
            <a class="dropbtn" onclick="myFunction4()"><span class="fa fa-tasks mr-3"></span>
              Phone Management
            <i class="fa fa-caret-down"></i>
                <div class="dropdown-content" id="myDropdown4">
                  <a href="/phone/phone-order">Phone Order</a>
                  <a href="/phone/selling-list">Selling</a>
                </div>
            </a>
          </li>
          @endif
          {{-- <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li> --}}
          {{-- <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li> --}}
          <li>
            <a href="/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

      </nav>


@yield('content')



      
    <script src="{{asset('front/js/popper.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
@yield('js')
<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    function myFunction2() {
      document.getElementById("myDropdown2").classList.toggle("show");
    }
    window.onclick = function(e) {
      if (!e.target.matches('.dropbtn')) {
      var myDropdown = document.getElementById("myDropdown2");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
      if (!e.target.matches('.dropbtn')) {
      var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
    function myFunction3() {
      document.getElementById("myDropdown3").classList.toggle("show");
    }

    function myFunction4() {
      document.getElementById("myDropdown4").classList.toggle("show");
    }

         $(document).ready(function() {
         
             var table = $('#mytable').DataTable({
                 responsive: false,
                 dom: '<fB>t<i>',
                 "order": [
                     [0, "desc"]
                 ],
                 "iDisplayLength": 100,
                 "scrollX": true,
                 //"paging": false,
                 //"scrollY": 500,
                 buttons: [{
                         extend: 'excel',
                         text: '<button class="btn btn-success btn-xs fak"><i class="fa fa-file-excel-o"></i> Export Excel</button>'
                     },
                     {
                         extend: 'pdf',
                         text: '<button class="btn btn-danger btn-xs fak"><i class="fa fa-file-pdf-o"></i> Export PDF</button>'
                     },
                     {
                         extend: 'print',
                         text: '<button class="btn btn-default btn-xs fak"><i class="fa fa-print"></i> Print </button>'
                     },
                 ]
             });
         
         
             var table = $('#reportTable').DataTable({
                 responsive: false,
                 dom: '<fB>t<>',
                 "order": [
                     [0, "asc"]
                 ],
                 "iDisplayLength": 100,
                 "scrollX": true,
                 buttons: [{
                         extend: 'excel',
                         text: '<button class="btn btn-success btn-xs fak"><i class="fa fa-file-excel-o"></i> Export Excel</button>',
                         messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                     },
                     {
                         extend: 'pdf',
                         text: '<button class="btn btn-danger btn-xs fak"><i class="fa fa-file-pdf-o"></i> Export PDF</button>',
                         messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                     },
                     {
                         extend: 'print',
                         text: '<button class="btn btn-default btn-xs fak"><i class="fa fa-print"></i> Print </button>'
                     },
                 ]
             });
         });         $(document).ready(function() {
         
             var table = $('#mytable').DataTable({
                 responsive: false,
                 dom: '<fB>t<i>',
                 "order": [
                     [0, "desc"]
                 ],
                 "iDisplayLength": 100,
                 "scrollX": true,
                 //"paging": false,
                 //"scrollY": 500,
                 buttons: [{
                         extend: 'excel',
                         text: '<button class="btn btn-success btn-xs fak"><i class="fa fa-file-excel-o"></i> Export Excel</button>'
                     },
                     {
                         extend: 'pdf',
                         text: '<button class="btn btn-danger btn-xs fak"><i class="fa fa-file-pdf-o"></i> Export PDF</button>'
                     },
                     {
                         extend: 'print',
                         text: '<button class="btn btn-default btn-xs fak"><i class="fa fa-print"></i> Print </button>'
                     },
                 ]
             });
         
         
             var table = $('#reportTable').DataTable({
                 responsive: false,
                 dom: '<fB>t<>',
                 "order": [
                     [0, "asc"]
                 ],
                 "iDisplayLength": 100,
                 "scrollX": true,
                 buttons: [{
                         extend: 'excel',
                         text: '<button class="btn btn-success btn-xs fak"><i class="fa fa-file-excel-o"></i> Export Excel</button>',
                         messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                     },
                     {
                         extend: 'pdf',
                         text: '<button class="btn btn-danger btn-xs fak"><i class="fa fa-file-pdf-o"></i> Export PDF</button>',
                         messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                     },
                     {
                         extend: 'print',
                         text: '<button class="btn btn-default btn-xs fak"><i class="fa fa-print"></i> Print </button>'
                     },
                 ]
             });
         });

    </script>
  </body>
</html>