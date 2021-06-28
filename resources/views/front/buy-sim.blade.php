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

          <input type="hidden" id="sim_id" value="{{$data->id}}">
          
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
              <div id="offer-table" class="col-md-10">
                {{-- <table class="table table-bordered">
                  <tr>
                    <td>Costo al mese :</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><strong>Ricarica totale :</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Offerta valida per :</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Pacchetto Internet gratuito (GB) :</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti gratuiti per operatore locale :</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti gratuiti per internazionale :</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti illimitati a :</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti internazionali validi per :</strong></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><strong>Altre informazioni :</strong></td>
                    <td></td>
                  </tr>
                </table> --}}
              </div>
              <div class="col-md-5">
                <label for="">First Name:</label>
                <input type="text" name="fname" placeholder="Enter First Name......" class="form-control" required>
              </div>
              <div class="col-md-5">
                <label for="">Last Name:</label>
                <input type="text" name="lname" class="form-control light-table-filter" required placeholder="Enter Last Name.......">
              </div>
              <div class="col-md-5">
                <label for="">Gender:</label>
                <select name="gender" required>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="col-md-5">
                <label for="">Date Of Birth:</label>
                <input type="date" name="dob" required class="form-control">
              </div>
              <div class="col-md-5">
                <label for="">Nationality:</label>
                <input type="text" name="nationality" required class="form-control" placeholder="Enter  Codice Nationality.......">
              </div>
              <div class="col-md-5">
                <label for=""> Codice Fiscale </label>
                <input type="text" name="codice" class="form-control" required placeholder="Enter  Codice Fiscale......."> <br> <br>
              </div>
              <div class="col-md-10">
                  <div class="form-group">
                    <label for="file">Upload di file</label>
                    <input class="form-control" type="file" name="file" required>
                  </div>
                  <div class="form-group">
                    <label for="file">Upload di file 2</label>
                    <input class="form-control" type="file" name="file2">
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
    <script>
      $(function(){
  $('#offer').change(function(){
    var empty = "";
    var value = $(this).val();
    var sim = $('#sim_id').val();
    var table = $('#offer');
    $.ajax({
     type: "POST",
     url: "http://jmlogistic.com/offer-check/", // url to request
     data:{ 
                _token:'{{ csrf_token() }}',
                id: value,
                sim_id: sim
            },
      cache: false,
      dataType: 'json',
     success : function(response){
      $("#offer-table").empty();
       // populate data here
       var offer = `<table class="table table-bordered">
                  <tr>
                  <th>Offer Details</th>
                  </tr>
                  <tr>
                    <td><strong>Costo al mese :</strong>` +response.costo+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><strong>Ricarica totale :</strong>` +response.ricarica+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Offerta valida per :</strong>` +response.valida+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Pacchetto Internet gratuito (GB) :</strong>` +response.internet+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti gratuiti per operatore locale :</strong>` +response.minuti+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti gratuiti per internazionale :</strong>` +response.minuti_internazionale+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti illimitati a :</strong>` +response.minuti_illimitati+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <strong>Minuti internazionali validi per :</strong>` +response.minuti_internazionali_validi+`</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><strong>Altre informazioni :</strong> `+response.altre_informazioni+`</td>
                    <td></td>
                  </tr>
                </table>`
                $("#offer-table").append(offer);
     }
    });
  });
});
    </script>
@endsection