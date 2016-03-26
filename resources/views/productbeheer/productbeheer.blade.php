@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">CMS</div>

                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Product beheer</a> </li>
                            <li><a data-toggle="tab" href="#tab2">User beheer</a> </li>
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
                                    @foreach($producten as $producten)
                                        <tr>
                                            <td>{{$producten->naam}}</td>
                                            <td>{{$producten->korte_beschrijving}}</td>
                                            <td>{{$producten->artiest}}</td>
                                            <td>{{$producten->prijs}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div id="tab2" class="tab-pane fade in active">
                                <h2>User Beheer</h2>
                                @if(count($users) == 0)
                                    <p>Er zijn geen users</p>
                                @else
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Naam</th>
                                            <th>Email</th>
                                            <th>Wachtwoord?</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($producten as $producten)
                                            <tr>
                                                <td>{{$producten->wish_name}}</td>
                                                <td>{{$producten->users_id}}</td>
                                                <td>{{$producten->description}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                @endif
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection