@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Product toevoegen</div>
                    <div class="panel-body">
                        <form>
                            Product naam:<br>
                            <input type="text" name="product_naam"><br>
                            Korte beschrijving:<br>
                            <input type="text" name="product_kortebeschrijving"><br>
                            Beschrijving:<br>
                            <input type="text" name="product_beschrijving"><br>
                            Prijs:<br>
                            <input type="text" name="product_prijs"><br>
                            Artiest:<br>
                            <input type="text" name="product_artiest"><br>

                            <input type="submit" class="btn btn-primary" value="Aanmaken">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
