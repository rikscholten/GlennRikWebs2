@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorie toevoegen</div>
                    <div class="panel-body">
                        <form action="http://localhost/GlennRikWebs2/public/cms/categoriebeheer/createCategorie" method="get">
                            Product naam:<br>
                            <input type="text" name="categorie_naam"><br>
                            Beschrijving:<br>
                            <input type="text" name="categorie_beschrijving"><br>
                            Parent categorie:<br>
                            <select name="categorie_parent_id">
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
