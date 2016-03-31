@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Product toevoegen</div>
                    <div class="panel-body">
                        <form action="http://localhost/GlennRikWebs2/public/cms/productbeheer/createProduct" method="get">
                            Product naam:<br>
                            <input type="text" name="product_naam"><br>
                            Korte beschrijving:<br>
                            <input type="text" name="product_kortebeschrijving"><br>
                            Beschrijving:<br>
                            <input type="text" name="product_beschrijving"><br>
                            Prijs:<br>
                            <input type="text" name="product_prijs"><br>
                            Artiest:<br>
                            <input type="text" name="product_artiestnaam"><br>
                            Image:<br>
                            <input type="text" name="product_image"><br>
                            Release Date:<br>
                            <input type="text" name="product_release_date"><br>
                            Categorie:<br>
                            <select name="product_categorie_id">
                                @foreach($categorieen as $categorieen)
                                    <option value="{{$categorieen->id}}">{{$categorieen->naam}}</option>
                                @endforeach
                            </select>

                            <input type="submit" class="btn btn-primary" value="Aanmaken">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
