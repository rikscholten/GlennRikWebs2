
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
                <?php $prijs = $prijs + ($products->prijs * $products->aantal) ?>
                <tr>
                    <td>{{$products->naam}}</td>
                    <td>{{$products->artiest}}</td>
                    <td>{{$products->korte_beschrijving}}</td>
                    <td>{{$products->prijs }}</td>
                    <td>{{$products->aantal}}</td>
                  <td>  <form action="http://localhost/GlennRikWebs2/public/car/dell" method="get">
                        <input type="hidden"  name ='id' value={{$products->id}} >
                        <input class="btn btn-danger" type="submit" value="-">
                    </form></td>
                   <td> <form action="http://localhost/GlennRikWebs2/public/car/add" method="get">
                        <input type="hidden"  name ='id' value={{$products->id}} >
                        <input class="btn btn-success" type="submit" value="+">
                    </form></td>

                </tr>

                @endforeach

                </tbody>
            </table>
<br>
    </div>
    <div>
            <h1 class="ui centered aligned header"> Totaal prijs: {{$prijs}}</h1>
        <form action="http://localhost/GlennRikWebs2/public/car/afronden" method="get">
            <input class="btn btn-success" type="submit" value=" afrekenen">
        </form>

    </div>


@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection
