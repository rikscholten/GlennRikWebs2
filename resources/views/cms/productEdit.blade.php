@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Product aanpassen</div>
                    <div class="panel-body">
                        <form action="http://localhost/GlennRikWebs2/public/cms/productbeheer/editProduct/{{$product->id}}" method="get">
                            Product naam:<br>
                            <input type="text" name="product_naam" value="{{$product->naam}}"><br>
                            Korte beschrijving:<br>
                            <input type="text" name="product_kortebeschrijving" value="{{$product->korte_beschrijving}}"><br>
                            Beschrijving:<br>
                            <input type="text" name="product_beschrijving" value="{{$product->beschrijving}}"><br>
                            Prijs:<br>
                            <input type="text" name="product_prijs" value="{{$product->prijs}}"><br>
                            Artiest:<br>
                            <input type="text" name="product_artiestnaam" value="{{$product->artiest}}"><br>
                            Image:<br>
                            <input type="text" name="product_image" value="{{$product->image}}"><br>
                            Release Date:<br>
                            <input type="text" name="product_release_date" value="{{$product->release_date}}"><br>
                            Categorie:<br>
                            <select name="product_categorie_id">
                                @foreach($categorieen as $categorieen)
                                    <option value="{{$categorieen->id}}">{{$categorieen->naam}}</option>
                                @endforeach
                            </select>

                            <input type="submit" class="btn btn-primary" value="Aanpassen">
                        </>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
