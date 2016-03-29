
@extends('layouts.app')

@section('content')



  <h1  class="ui centered aligned header">Muziek shop</h1>

  <?php
  $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
          $counter = 0;
  echo "<a href='http://localhost/GlennRikWebs2/public/home'>home</a>";
  echo "/";
  echo "<a href='http://localhost/GlennRikWebs2/public/store'>store</a>";
  echo "/";
  echo "<a href='http://localhost/GlennRikWebs2/public/car'>car</a>";
  echo "/";
  foreach($crumbs as $crumb){
      if($counter > 2){
          echo ucfirst(str_replace(array(".php","_"),array(""," "),"<a href='http://localhost/GlennRikWebs2/public/$crumb'>" . $crumb) ."</a>" .'/');

      }

      $counter ++;
  }
  ?>

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
          <form action="http://localhost/GlennRikWebs2/public/car/add" method="get">
              <input type="hidden"  name = 'id' value={{$product->id}} >
              <input class="btn btn-success" type="submit" value="add to car">
          </form>
          <p><a href="../store">Terug</a></p>
      </div>

  </div>


@endsection

@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection


