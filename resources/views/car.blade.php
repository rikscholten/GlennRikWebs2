
@extends('layouts.app')

@section('content')



    <h1 class="ui centered aligned header">Muziek shop</h1>
    <?php

    $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
    $counter = 0;
    echo "<a href='http://localhost/GlennRikWebs2/public/home'>home</a>";
    echo "/";
    echo "<a href='http://localhost/GlennRikWebs2/public/store'>store</a>";
    echo "/";
    foreach($crumbs as $crumb){
        if($counter > 2){
            echo ucfirst(str_replace(array(".php","_"),array(""," "),"<a href='http://localhost/GlennRikWebs2/public/$crumb'>" . $crumb) ."</a>" .'/');

        }

        $counter ++;
    }
            $prijs = 0;
    ?>

    <div class="ui cards">

        @foreach (session('car') as $product)
            <?php $prijs = $prijs + ($product->prijs * $product->aantal) ?>
            <div class="card">
                <div class="content">
                    <a class="header" href="http://localhost/GlennRikWebs2/public/product/{{ $product->id }}">{{ $product->naam }}</a>

                    <div class="extra content">
                        {{ $product->aantal }}<br>
                        €{{ $product->prijs }}
                    </div>


                    <br>
                    <div class="extra content">
                        <form action="http://localhost/GlennRikWebs2/public/car/dell" method="get">
                            <input type="hidden"  name ='id' value={{$product->id}} >
                            <input class="btn btn-danger" type="submit" value="Delete from car">
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
<br>
    </div>
    <div>
            <h1 class="ui centered aligned header"> Totaal prijs: {{$prijs}}</h1>
        <form action="http://localhost/GlennRikWebs2/public/car/dell" method="get">
            <input class="btn btn-success" type="submit" value=" afrekenen">
        </form>

    </div>


@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection
