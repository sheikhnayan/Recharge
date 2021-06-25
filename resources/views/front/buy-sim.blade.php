@extends('front.layout.main')

@section('content')
      <div style="width: 80%;margin-left: 50px;">
          <h2>Vendita Sim</h2>
          <h5>Operatore : {{$data->operator}}</h5>
          <input type="hidden" name="operator" value="{{$data->operator}}">
          <h5>Numero ICCID : {{$data->iccid}}</h5>
          <input type="hidden" name="iccid" value="{{$data->iccid}}">
          <h5>Numero di cellulare: {{$data->sim_number}}</h5>
          <input type="hidden" name="sim_number" value="{{$data->sim_number}}">
          
          <div class="reseller">
          <form id="myform" action="/buy-sim" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="sim_id" value="{{$data->id}}">
            <div class="row justify-content-center">
              <div class="col-md-10">
                  <label for="fname">Offrire</label><br>
                  <select id="offer" name="offer">
                    <option value="null">--Selezionare--</option>
                    @foreach ($offer as $item)
                    <option value="{{$item->offer}}">{{$item->offer}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-md-5">
                <label for="">First Name:</label>
                <input type="text" name="fname" placeholder="Enter First Name......" class="form-control">
              </div>
              <div class="col-md-5">
                <label for="">Last Name:</label>
                <input type="text" name="lname" class="form-control light-table-filter" placeholder="Enter Last Name.......">
              </div>
              <div class="col-md-5">
                <label for="">Gender:</label>
                <select name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="col-md-5">
                <label for="">Date Of Birth:</label>
                <input type="date" name="dob" class="form-control">
              </div>
              <div class="col-md-10">
                <label for=""> Codice Fiscale </label>
                <input type="text" name="codice" class="form-control" placeholder="Enter  Codice Fiscale......."> <br> <br>
                  <div class="form-group">
                    <label for="file">Upload di file</label>
                    <input class="form-control" type="file" name="file">
                  </div>
                  <div class="form-group">
                    <label for="file">Upload di file 2</label>
                    <input class="form-control" =" name="file2">
                  </div>
                <label style="font-size:17px; font-weight:bold;"><input type="checkbox" id="changeShip"> Portabilità</label>
              </div>
              <div class="col-md-10">
                <div id="changeShipInputs">
                  <div class="form-group">
                    <label for="city">Operatore</label>
                    <select name="alt_operator">
                      <option value="null">--SELEZIONARE--</option>
                      @foreach ($operator as $item)
                      <option value="{{$item->operator}}">{{$item->operator}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="state">Numero ICCID</label>
                    <input type="text" class="form-control" name="alt_iccid">
                  </div>
                  <div class="form-group">
                    <label for="state">Numero di cellulare</label>
                    <input type="text" class="form-control" name="alt_sim_number">
                  </div>
                </div>
                <input type="submit" value="Aggiungi Sim"><br>
              </div>
            </div>
          </form>
      </div>


    </div>
    <script>
      var form = $('#myForm'),
    checkbox = $('#changeShip'),
    chShipBlock = $('#changeShipInputs');

chShipBlock.hide();

checkbox.on('click', function() {
    if($(this).is(':checked')) {
      chShipBlock.show();
      chShipBlock.find('input').attr('required', true);
    } else {
      chShipBlock.hide();
      chShipBlock.find('input').attr('required', false);
    }
})
    </script>
@endsection