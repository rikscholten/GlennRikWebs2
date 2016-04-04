@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Adress gegevens</div>

                    <div class="panel-body">
                        <form action="http://localhost/GlennRikWebs2/public/car/offerte" method="get" id ="h">
                            Naam:  <br>    <input type="text" name="naam" value="{{\Illuminate\Support\Facades\Auth::user()->name}}"><br>
                            Achternaam:  <br>    <input type="text" name="achternaam"><br>
                            E-mail:  <br>    <input type="text" name="e-mail"><br>
                            Postcode:  <br>    <input type="text" name="postcode"><br>
                            Adres:  <br>    <input type="text" name="adres"><br>
                            Stad:  <br>    <input type="text" name="stad"><br>
                            Woonplaats:  <br>    <input type="text" name="woonplaats"><br>



                            <input type="submit" value="Submit">
                        </form>
                    </div>



            </div>
            </div>

        </div>
    </div>
@endsection