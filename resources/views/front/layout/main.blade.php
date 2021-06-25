<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Point BD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
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
  </head>
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
          <span>
            <span class="color m-2">Saldo Ricariche : </span><span class="text-muted"> {{Auth::user()->wallet}}</span>
          </span><br>
          <span>
            <span class="color m-2">Debito Corriere : </span><span class="text-muted"> 1230</span>
          </span><br>
          <span>
            <span class="color m-2">Debito Sim : </span><span class="text-muted"> 5000</span>
          </span><br>
          <span>
            <span class="color m-2">Debito SmartPhone : </span><span class="text-muted">300</span>
          </span>
        </li>

        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-bell mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Notification</a>
          </li>
          <li>
            <a href="#"><img src="{{asset('front/SIM-logo.png')}}" width="09%" class="mr-3"> SIM Activation</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-photo mr-3"></span> Post</a>
          </li>
          <li>
            <a href="/recharge"><img src="{{asset('front/Recharge-logo.png')}}" width="07%" class="mr-3"> Recharges</a>
          </li>
          <li>
            <a href="#"><img src="{{asset('front/Order-logo.png')}}" width="07%" class="mr-3"> Orders</a>
          </li>
          <li>
            <a class="dropbtn" onclick="myFunction()"><span class="fa fa-tasks mr-3"></span> Management <i class="fa fa-caret-down"></i>
                  <div class="dropdown-content" id="myDropdown">
                    <a href="/add-reseller">Add Re-Seller</a>
                    <a href="#">Re-Seller List</a>
                  </div>
            </a>
          </li>
          <li>
            <a href="#"><span class="fa fa-truck mr-3"></span> Cargo</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
            <a href="/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

      </nav>


@yield('content')



      
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/popper.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
        <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
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
    </script>
  </body>
</html>