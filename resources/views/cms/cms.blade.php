@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">CMS</div>

                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab2">User beheer</a> </li>
                            <li><a data-toggle="tab" href="#tab1">Product beheer</a> </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade">
                                <h2>Product beheer</h2>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Korte beschrijving</th>
                                        <th>Beschrijving</th>
                                        <th>Prijs</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $products)
                                        <tr>
                                            <td>{{$products->naam}}</td>
                                            <td>{{$products->korte_beschrijving}}</td>
                                            <td>{{$products->artiest}}</td>
                                            <td>{{$products->prijs}}</td>
                                            <td><a href='/GlennRikWebs2/public/cms/productbeheer/edit/{{$products ->id}}'><button class="btn-primary btn btn-sm">Aanpassen</button></a></td>
                                            <td><a href='/GlennRikWebs2/public/cms/productbeheer/delete/{{$products ->id}}'><button class="btn-danger btn btn-sm">Verwijderen</button></a></td></td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                                <a href='/GlennRikWebs2/public/cms/productbeheer/create'><button class="btn btn-primary" >Product Aanmaken</button></a>
                            </div>

                            <div id="tab2" class="tab-pane fade in active">
                                <h2>User Beheer</h2>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Email</th>
                                        <th>Wachtwoord?</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>hoi2</td>
                                        <td>hoi2</td>
                                        <td>hoi2</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
