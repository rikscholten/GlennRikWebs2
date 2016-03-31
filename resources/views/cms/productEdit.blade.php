@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Product aanpassen</div>
                    <div class="panel-body">
                        <form action="http://localhost/GlennRikWebs2/public/cms/productbeheer/editProduct" method="get">
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
                            Image:<br>
                            <input type="text" name="product_image"><br>
                            Categorie:<br>
                            <select name="categorieen">
                                @foreach($categorieen as $categorieen)
                                    <option name="categorie_parent_id" value="{{$categorieen->id}}">{{$categorieen->naam}}</option>
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
