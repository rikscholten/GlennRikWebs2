
@extends('layouts.app')

@section('content')



  <h1  class="ui centered aligned header">Muziek shop</h1>



    <h3 class="ui centered aligned header">{{ $product->naam }}</h3>


   <b> naam:</b> {{$product->naam}} <br />
  <b> artiest: </b>{{$product->artiest}} <br />
      <b> Beschrijving:</b> {{ $product->beschrijving }}<br />
          <b> Categorie: </b>{{$product->categorie}} <br />
              <b> release date: </b>{{$product->release}} <br />
                  <b> Prijs: </b> € {{ $product->prijs}},00 <br />
  <p><a href="../">Terug</a></p>



@endsection

@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection


