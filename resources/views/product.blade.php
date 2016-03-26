
@extends('layouts.app')

@section('content')



  <h1  class="ui centered aligned header">Muziek shop</h1>



    <h3 class="ui centered aligned header">{{ $product->naam }}</h3>
  <div class="ui cards">
      <div class="card">
   <b> naam:</b> {{$product->naam}} <br />
  <b> artiest: </b>{{$product->artiest}} <br />


          </div>

      <div class="card">
      <b> Image: </b><br> <img src="{{ URL::to('images/'.$product->image) }}" /> <br />
</div>
      <div class="card">
          <b> Beschrijving:</b> {{ $product->beschrijving }}<br />
      </div>

      <div class="card">
          <b> Categorie: </b>{{\App\Categoriee::find($product->caterorie_id)->naam}} <br />
          <b> release date: </b>{{$product->release_date}} <br />
      </div>
      <div class="card"><b> Prijs: </b> € {{ $product->prijs}},00 <br />
          <p><a href="../store">Terug</a></p>
      </div>

  </div>


@endsection

@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection


