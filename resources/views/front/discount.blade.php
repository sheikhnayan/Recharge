@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phone Order</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">

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
            <div class="order_page_header">
              <h4><i class="fas fa-mobile"></i>Order</h4>
            </div>
            <div class="btn_card_group">
              <div class="form-group">
                <!-- <label class="d-inline-block;">Category</label>
                <select class="form-control d-inline-block select2">
                  <option selected="selected">Samsung</option>
                  <option>Nokia</option>
                  <option>Redmi</option>
                  <option>Realme</option>
                  <option>Vivo</option>
                  <option>Xiomi</option>
                  <option>Oppo</option>
                </select> -->
              </div>
              <div class="retailer_switch d-inline-block">
                <!-- <input type="checkbox" name="phone_order_price"  data-bootstrap-switch data-off-color="danger" data-on-color="success"> -->
                <input data-id="" name="phone_order_price" class="toggle-class discount" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" >Discount</input>
              </div>
            </div> 
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="main_content pb-5">
      <div class="container-fluid">
        <div class="row px-3">
          @foreach ($data as $item)
          <div class="col-sm-4 col-md-3 my-4">
            <div class="position-relative home_product_card">
              <div data-toggle="modal" data-target="#modal-default{{ $item->id }}">
                <img src="{{asset('/storage'.'/'.$item->image)}}" alt="Photo 1" class="img-fluid">
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
                    <h5 class="rate_for_retailer">{{ $item->dis_price }}</h5>
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
                        <input type="number" class="form-control" name="quantity" aria-describedby="basic-addon2">
                        <input type="hidden" name="phone_name" value="{{ $item->phone }}">
                        <input type="hidden" name="reseller_id" value="{{ Auth::user()->id }}">
                        <input type="submit" class="input-group-text" id="basic-addon2" value="Buy">
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
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('js/select2.full.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('js/bootstrap-switch.min.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('js/admin.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
@endsection

@section('js')
<script>
  $(function () {

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    $("input[data-bootstrap-switch]").each(function () {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
</script>

<script>
  $(function() {
    $('.discount').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        console.log('hello');
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changePhone',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
  </script>
@endsection