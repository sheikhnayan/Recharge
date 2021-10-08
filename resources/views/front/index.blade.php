@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="css/admin.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
</head>

@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10 text-center">
            <h2 style="font-weight: 700; color: #bdbcbc;"><img src="images/jm-transparent-logo.png" width="20px">
              <span class="brand-text"><strong>JM</strong> NATION</span>
            </h2>
          </div>
          <div class="col-2 text-center">
            @if(Auth::user()->role == 'admin')
            <a class="btn btn-success" href="{{ route('add-sldier-view') }}">Add Slider</a>
            <a class="btn btn-success" href="{{ route('sldier-view') }}">All Slider</a>

            @endif
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="main_content pb-5">
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-12 px-4">
            <div class="card">
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner" style="width: 100%; height:600px;">
                    @foreach ($slider as $key => $item)
                    <div class="carousel-item @if($key == '0') active @endif" style="width: 100%; height:600px;">
                      <a href="{{ $item->link }}">
                      <img class="d-block w-100 image-fluid" src="{{ asset('storage/'.$item->image) }}"
                        alt="slide" style="width: 100%; height:600px;">
                      </a>
                    </div>
                    @endforeach
                    {{-- <div class="carousel-item active">
                      <img class="d-block w-100" src="images/carousel-images_1.jpg"
                        alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/carousel-images_2.jpg"
                        alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/carousel-images_3.jpg"
                        alt="Third slide">
                    </div> --}}
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <div class="row px-3">
          @foreach ($data as $item)
          <div class="col-sm-4 col-md-3 my-4">
            <div class="position-relative home_product_card" style="min-height: 550px; max-height:550px">
              <div data-toggle="modal" data-target="#modal-default{{ $item->id }}">
                <img src="{{asset('/storage'.'/'.$item->image)}}" style="width:400px;height:300px" alt="Photo 1" class="img-fluid">
                <div class="ribbon-wrapper ribbon-lg">
                  {{-- <div class="ribbon bg-success text-lg">
                    30% OFF
                  </div> --}}
                </div>
              </div>
              <div class="home_card_text">
                {{-- <div class="brand_logo d-flex">
                  <span>Poco
                  <img src="{{ asset('images/M3_logo.png') }}" width="auto" height="30px"></span>
                  <img src="{{ asset('images/Mi-Xiaomi-Logo.png') }}" width="auto" height="30px">
                </div> --}}
                <div class="row">
                  <div class="col-12 model_price">
                    <h4>{{ $item->phone }}</h4>
                    <h5 class="rate_for_customer">{{ $item->price }}</h5>
                    {{-- <h5 class="rate_for_retailer">$250.00</h5> --}}
                  </div>
                </div>
                <div class="row">
                  {{-- <div class="col-12 text-center stock_rate">
                    <p>Stock</p>
                    <p class="stock_quantity">800 pcs</p>
                  </div> --}}
                  <div class="col-12 stock_rate">
                    <form action="/phone/order" method="POST">
                      @csrf
                    <p>Order</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="quantity" aria-describedby="basic-addon2">
                        <input type="hidden" name="phone_name" value="{{ $item->phone }}">
                        <input type="hidden" name="reseller_id" value="{{ Auth::user()->id }}">
                      <input type="submit" class="input-group-text" id="basic-addon2" value="Buy">
                    </div>
                    <div class="input-group mb-3">
                      <a href="{{ route('phone-edit',$item->id) }}" class="btn btn-primary" style="margin-right: 10px">Edit</a>
                      <a href="{{ route('phone-delete',$item->id) }}" class="btn btn-danger confirm">delete</a>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal-default{{ $item->id }}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="spe_modal-header">
                  <h4 class="d-block">{{ $item->phone }}</h4>
                  <p>SPECIFICATION</p>
                  <button type="button" class="btn btn-tool-close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <img src="{{asset('/storage'.'/'.$item->image)}}" alt="Photo 1" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
                    <tbody>
                      <tr>
                        <th colspan="2" scope="col"><strong style="color: #db0909;">Configuration</strong></th>
                      </tr>
                      <tr>
                        <td> <p> {{ $item->description }}</p> </td>
                      </tr>
                    </tbody>
                  </table>
                      <tr>
                        <td><strong>Disclaimer.</strong></td>
                        <td>We can not guarantee that the information on this page is 100% correct. <a
                            href="https://www.gsmarena.com/glossary.php3?term=data-disclaimer">Read more</a></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="text-center">
                    <button type="button" class="btn btn-tool" data-dismiss="modal" aria-label="Close">Close</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->


  <!-- Modal -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="spe_modal-header">
          <h4 class="d-block">Xiaomi Poco M3</h4>
          <p>SPECIFICATION</p>
          <button type="button" class="btn btn-tool-close" data-dismiss="modal" aria-label="Close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <img src="images/mobile-1.jpg" alt="Photo 1" class="img-fluid">
              </div>
              <div class="col-sm-6 spe_bg_gray">
                <ul class="spe_right_specs">
                  <li class="spe_specs_icon">
                    <i class="fas fa-mobile-alt"></i>
                    <strong>
                      <span>6.53" Display</span>
                    </strong>
                    <span>720X1600 pixels</span>
                  </li>
                  <li class="spe_specs_icon">
                    <i class="fas fa-record-vinyl"></i>
                    <strong>
                      <span>48MP Camera</span>
                    </strong>
                    <span>1080p</span>
                  </li>
                  <li class="spe_specs_icon">
                    <i class="fas fa-memory"></i>
                    <strong>
                      <span>4/6GB RAM</span>
                    </strong>
                    <span>Snapdragon 662</span>
                  </li>
                  <li class="spe_specs_icon">
                    <i class="fas fa-battery-full"></i>
                    <strong>
                      <span>6000mAh Battery</span>
                    </strong>
                    <span>Li-Po</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">NETWORK</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Technology</strong></td>
                <td>GSM / HSPA / LTE</td>
              </tr>
              <tr>
                <td><strong>2G bands</strong></td>
                <td>GSM 850 / 900 / 1700(AWS) / 1900 - SIM 1 & SIM 2</td>
              </tr>
              <tr>
                <td><strong>3G bands</strong></td>
                <td>GSM 850 / 900 / 1700(AWS) / 1900 / 2100</td>
              </tr>
              <tr>
                <td><strong>4G bands</strong></td>
                <td>1, 2, 3, 4, 5, 6, 7, 8, 20, 28, 38, 40, 41</td>
              </tr>
              <tr>
                <td><strong>Speed</strong></td>
                <td>HSPA 42.2/5.76, LTE-A</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">LUNCH</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Announced</strong></td>
                <td>2020, November 24</td>
              </tr>
              <tr>
                <td><strong>Status</strong></td>
                <td>Available Released 2020, November 27</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">BODY</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Dimensions</strong></td>
                <td>162.3 x 77.3 x 9.6 mm (6.39 x 3.04 x 0.38 in)</td>
              </tr>
              <tr>
                <td><strong>Weight</strong></td>
                <td>198 g (6.98 oz)</td>
              </tr>
              <tr>
                <td><strong>Build</strong></td>
                <td>Glass front (Gorilla Glass 3), plastic back, plastic frame</td>
              </tr>
              <tr>
                <td><strong>SIM</strong></td>
                <td>Dual SIM (Nano-SIM, dual stand-by)</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">DISPLAY</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Type</strong></td>
                <td>IPS LCD, 400 nits (typ)</td>
              </tr>
              <tr>
                <td><strong>Size</strong></td>
                <td>6.53 inches, 104.7 cm2 (~83.4% screen-to-body ratio)</td>
              </tr>
              <tr>
                <td><strong>Resolution</strong></td>
                <td>1080 x 2340 pixels, 19.5:9 ratio (~395 ppi density)</td>
              </tr>
              <tr>
                <td><strong>Protection</strong></td>
                <td>Corning Gorilla Glass 3</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">PLATFORM</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>OS</strong></td>
                <td>Android 10, MIUI 12</td>
              </tr>
              <tr>
                <td><strong>Chipset</strong></td>
                <td>Qualcomm SM6115 Snapdragon 662 (11 nm)</td>
              </tr>
              <tr>
                <td><strong>CPU</strong></td>
                <td>Octa-core (4x2.0 GHz Kryo 260 Gold & 4x1.8 GHz Kryo 260 Silver)</td>
              </tr>
              <tr>
                <td><strong>GPU</strong></td>
                <td>Adreno 610</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">MEMORY</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Card slot</strong></td>
                <td>microSDXC (dedicated slot)</td>
              </tr>
              <tr>
                <td><strong>Internal</strong></td>
                <td>64GB 4GB RAM, 64GB 6GB RAM, 128GB 4GB RAM, 128GB 6GB RAM</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>UFS 2.1 - 64GB</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>UFS 2.2 - 128GB</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">MAIN CAMERA</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Triple</strong></td>
                <td>48 MP, f/1.8, (wide), 1/2.0", 0.8µm, PDAF</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>2 MP, f/2.4, (macro)</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>2 MP, f/2.4, (depth)</td>
              </tr>
              <tr>
                <td><strong>Features</strong></td>
                <td>LED flash, HDR, panorama</td>
              </tr>
              <tr>
                <td><strong>Video</strong></td>
                <td>1080p@30fps</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">SELFIE CAMERA</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Single</strong></td>
                <td>8 MP, f/2.1, (wide), 1/4.0", 1.12µm</td>
              </tr>
              <tr>
                <td><strong>Features</strong></td>
                <td>Panorama</td>
              </tr>
              <tr>
                <td><strong>Video</strong></td>
                <td>1080p@30fps</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">SOUND</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Loudspeaker</strong></td>
                <td>Yes, with dual speakers</td>
              </tr>
              <tr>
                <td><strong>3.5mm jack</strong></td>
                <td>Yes</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>24-bit/192kHz audio</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">COMMS</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>WLAN</strong></td>
                <td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot</td>
              </tr>
              <tr>
                <td><strong>Bluetooth</strong></td>
                <td>5.0, A2DP, LE</td>
              </tr>
              <tr>
                <td><strong>GPS</strong></td>
                <td>Yes, with A-GPS, GLONASS, BDS, GALILEO</td>
              </tr>
              <tr>
                <td><strong>NFC</strong></td>
                <td>No</td>
              </tr>
              <tr>
                <td><strong>Infrared port</strong></td>
                <td>Yes</td>
              </tr>
              <tr>
                <td><strong>Radio</strong></td>
                <td>FM radio</td>
              </tr>
              <tr>
                <td><strong>USB</strong></td>
                <td>USB Type-C 2.0, USB On-The-Go</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">FEATURES</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Sensors</strong></td>
                <td>Fingerprint (side-mounted), accelerometer, proximity, compass</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">BATTERY</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Type</strong></td>
                <td>Li-Po 6000 mAh, non-removable</td>
              </tr>
              <tr>
                <td><strong>Charging</strong></td>
                <td>Fast charging 18W</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>Reverse charging</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">MISC</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Colors</strong></td>
                <td>Cool Blue, Poco Yellow, Power Black</td>
              </tr>
              <tr>
                <td><strong>Models</strong></td>
                <td>M2010J19CG, M2010J19CI</td>
              </tr>
              <tr>
                <td><strong>SAR</strong></td>
                <td>1.09 W/kg (head) 1.00 W/kg (body)</td>
              </tr>
              <tr>
                <td><strong>SAR EU</strong></td>
                <td>0.60 W/kg (head) 0.81 W/kg (body)</td>
              </tr>
              <tr>
                <td><strong>Price</strong></td>
                <td style="color: #db0909;">$ 142.00 / € 149.00 / £ 147.00 / ₹ 12,500</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <th colspan="2" scope="col"><strong style="color: #db0909;">TESTS</strong></th>
              </tr>
              <tr>
                <td style="width: 100px;"><strong>Performance</strong></td>
                <td>AnTuTu: 177904 (v8)</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>GeekBench: 1398 (v5.1)</td>
              </tr>
              <tr>
                <td><strong></strong></td>
                <td>GFXBench: 5.9fps (ES 3.1 onscreen)</td>
              </tr>
              <tr>
                <td><strong>Display</strong></td>
                <td>Contrast ratio: 1567:1 (nominal)</td>
              </tr>
              <tr>
                <td><strong>Camera</strong></td>
                <td>Photo / Video</td>
              </tr>
              <tr>
                <td><strong>Loudspeaker</strong></td>
                <td>-26.5 LUFS (Good)</td>
              </tr>
              <tr>
                <td><strong>Battery life</strong></td>
                <td style="color: #db0909;">Endurance rating 154h</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-sm" style="border-bottom: 1px solid #dee2e6;">
            <tbody>
              <tr>
                <td><strong>Disclaimer.</strong></td>
                <td>We can not guarantee that the information on this page is 100% correct. <a
                    href="https://www.gsmarena.com/glossary.php3?term=data-disclaimer">Read more</a></td>
              </tr>
            </tbody>
          </table>
          <div class="text-center">
            <button type="button" class="btn btn-tool" data-dismiss="modal" aria-label="Close">Close</button>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.Modal -->
@endsection

@section('scripts')


<!-- 
=======================
  REQUIRED SCRIPTS
======================= 
-->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Theme JS -->
<script src="js/admin.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script>
    $(".confirm").confirm();
  </script>
@endsection