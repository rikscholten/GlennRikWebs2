@extends('layouts.app')

@section('content')
<div class="panel-heading">Offerte</div>

<div class="panel-body">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Naam</th>
            <th>Artiest</th>
            <th>Beschrijving</th>
            <th>Prijs</th>
            <th>aantal</th>
        </tr>
        </thead>
        <tbody>
        @foreach(session('car') as $products)
            <tr>
                <td>{{$products->naam}}</td>
                <td>{{$products->artiest}}</td>
                <td>{{$products->korte_beschrijving}}</td>
                <td>{{$products->prijs }}</td>
                <td>{{$products->aantal}}</td>


            </tr>

        @endforeach

        </tbody>
    </table>
    <br>
    Naam:  {{$naam}}   <br>
    Achternaam:  {{$achternaam}}    <br>
    E-mail:  {{$mail}}<br>
    Postcode:  {{$postcode}}<br>
    Adres:  {{$adres}}<br>
    Stad:  {{$stad}}<br>
    Woonplaats:  {{$woonplaats}}<br>

    <b>Totaal prijs = {{$prijs}}</b>

<?php session(['car' => new \ArrayObject()]) ;?>

</div>
<form action="http://localhost/GlennRikWebs2/public/" method="get">
    <input class="btn btn-success" type="submit" value=" Terug naar home">
</form>
</div>
    @endsection