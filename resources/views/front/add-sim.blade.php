@extends('front.layout.main')

@section('content')
      <div style="width: 60%;margin-left: 50px;">
          <h2>Aggiungi Sim</h2>
          <div class="reseller">
          <form action="/add-sim" method="post">
            @csrf
              <label for="fname">Operatore</label><br>
              <select id="operator" name="operator">
                @foreach ($operator as $item)
                    <option value="{{$item->operator}}">{{$item->operator}}</option>
                @endforeach
              </select>  
              <br>

              <label for="fname">ICCID Numero</label><br>
              <input type="text" id="iccid" name="iccid" placeholder="Accedere ICCID Numero..."><br>

              <label for="email">SIM Numero</label><br>
              <input type="text" id="sim_number" placeholder="Accedere Sim Numero..." name="sim_number"><br>

              <label for="password">Prezzo di acquisto</label><br>
              <input type="text" name="buy_price" id="buy_price" placeholder="Accedere Prezzo di acquisto....">
              
              <label for="status">Status</label><br>
              <select name="status" id="status">
                <option value="available">Available</option>
                <option value="sold">Sold</option>  
              </select>  

              <input type="submit" value="Aggiungi Sim"><br>
          </form>
      </div>


    </div>
@endsection