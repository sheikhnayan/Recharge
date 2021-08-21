@extends('front.layout.courier')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wi-fi</title>

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
<style>
  input {
    width: 100%;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #212121;
    height: 40px;
}
table {
    margin-top: 30px;
}
tr:nth-of-type(even) {
    background: #ffd98b;
}
thead {
    background: #f8af3c;
}
.t{
    width: 82%;margin-left: 300px;
}
@media screen and (max-width: 600px) {
    .t{
        margin-left: 40px;
    }
}
</style>
      <div class="t" >
          <h2>Offers</h2>
          <form class="card" action="/offer" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Offer:</label>
                    <input class="form-control" type="text" value="" name="offer" placeholder="Enter Offer....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black" for="fname">Operatore</label><br>
                        <select id="operator" name="operator" class="custom-select">
                            @foreach ($operator as $item)
                                <option value="{{$item->operator}}">{{$item->operator}}</option>
                            @endforeach
                        </select>  
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Costo al mese:</label>
                    <input class="form-control" type="text" value="" name="costo" placeholder="Enter Costo....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Ricarica totale:</label>
                    <input class="form-control" type="text" value="" name="ricarica" placeholder="Enter Ricarica....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Offerta valida per:</label>
                    <input class="form-control" type="text" value="" name="valida" placeholder="Enter Offerta....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Pacchetto Internet gratuito (GB):</label>
                    <input class="form-control" type="text" value="" name="internet" placeholder="Enter Internet....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Minuti gratuiti per operatore locale:</label>
                    <input class="form-control" type="text" value="" name="minuti" placeholder="Enter Minuti....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Minuti gratuiti per internazionale:</label>
                    <input class="form-control" type="text" value="" name="minuti_internazionale" placeholder="Enter Minuti internazionale....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Minuti illimitati a:</label>
                    <input class="form-control" type="text" value="" name="minuti_illimitati" placeholder="Enter Minuti illimitati....">
                </div>
                <div class="col-md-5">
                    <label style="font-weight: bold; color:black">Minuti internazionali validi per:</label>
                    <textarea style="border: 1px solid gray" class="form-control" type="text" value="" name="minuti_internazionali_validi" placeholder="Enter Minuti internazionali validi...."> </textarea>
                </div>
                <div class="col-md-10">
                    <label style="font-weight: bold; color:black">Altre informazioni:</label>
                    <textarea style="border: 1px solid gray" class="form-control" type="text" value="" name="altre_informazioni" placeholder="Enter Altre...."></textarea>
                </div>
                <div class="col-md-12">
                    <input style="margin-top: 40px" class="btn btn-success" type="submit" value="Add">
                </div>
            </div>
          </form>
       </div>
@endsection