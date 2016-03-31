@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorie aanpassen</div>
                    <div class="panel-body">
                        <form action="http://localhost/GlennRikWebs2/public/cms/categoriebeheer/editCategorie/{{$categorie ->id}}" method="get">
                            Product naam:<br>
                            <input type="text" name="categorie_naam" value="{{$categorie ->naam}}"><br>
                            Beschrijving:<br>
                            <input type="text" name="categorie_beschrijving" value="{{$categorie ->beschrijving}}"><br>
                            Parent categorie:<br>
                            <select name="categorie_parent_id">
                                @foreach($categorieenP as $categorieenP)
                                    <option value="{{$categorieenP->id}}">{{$categorieenP->naam}}</option>
                                @endforeach
                            </select>

                            <input type="submit" class="btn btn-primary" value="Aanpassen">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
