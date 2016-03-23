
@extends('layouts.app')

@section('content')



  <h1 class="ui centered aligned header">Muziek shop</h1>

  <div class="ui cards">

    <h1 class="ui centered aligned header">{{ $product->naam }}</h1>

    <p><a href="../">Terug</a></p>
    naam: {{$product->naam}} <br />
    artiest: {{$product->artiest}} <br />
    Beschrijving: {{ $product->beschrijving }}<br />
    Categorie: {{$product->categorie}} <br />
    release date: {{$product->release}} <br />
    Prijs: € {{ $product->prijs}},00 <br />

  </div>


@endsection

@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection


