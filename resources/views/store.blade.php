@extends('layouts.app')

@section('content')


    <?php

    use App\Categoriee;
    use App\Product;
    $products_cat = \App\Product::select('caterorie_id')->distinct('caterorie_id')->get();
    $products_ar = \App\Product::select('artiest')->distinct('artiest')->get();?>


    <h1 class="ui centered aligned header">Muziek shop</h1>
    <a href='/GlennRikWebs2/public/about'><button class="btn btn-primary" >About page</button></a>
    <div>

        <?php
        $crumbs = explode("/", $_SERVER["REQUEST_URI"]);
        $counter = 0;
        echo "<a href='http://localhost/GlennRikWebs2/public/home'>home</a>";
        echo "/";
        echo "<a href='http://localhost/GlennRikWebs2/public/car'>car</a>";
        echo "/";
        foreach ($crumbs as $crumb) {
            if ($counter > 2) {
                echo ucfirst(str_replace(array(".php", "_"), array("", " "), "<a href='http://localhost/GlennRikWebs2/public/$crumb'>" . $crumb) . "</a>" . '/');

            }

            $counter++;
        }
        ?>

        <form action="{{\Illuminate\Support\Facades\URL::current()}}">
            <div class="ui cards">
                <div class="card">
                    <label for="">Price</label>

                    <br>
                    min: <input type="text" name="min_price"
                                value="{{\Illuminate\Support\Facades\Input::get('min_price')}}">

                    <br>
                    max: <input type="text" name="max_price"
                                value="{{\Illuminate\Support\Facades\Input::get('max_price')}}">
                </div>


                <div class="card">
                    <div id="" style="overflow-y:scroll; overflow-x:hidden; height:200px;">
                        <?php $brands = \Illuminate\Support\Facades\Input::has('brands') ? \Illuminate\Support\Facades\Input::get('brands') : [];
                        $counter = 0;
                        ?>

                        @foreach($products_cat as $cat)

                            <input type="checkbox" name="brands[]"
                                   value="{{$cat->caterorie_id}}" {{in_array($cat->caterorie_id, $brands ) ? 'checked' :'' }}>
                            {{ Categoriee::where('id',$cat->caterorie_id)->get()->first()->naam }}
                            <br>


                        @endforeach
                    </div>

                </div>
                <div class="card">
                    <div id="" style="overflow-y:scroll; overflow-x:hidden; height:200px;">
                        <?php $artiests = \Illuminate\Support\Facades\Input::has('artiests') ? \Illuminate\Support\Facades\Input::get('artiests') : [];
                        $counter = 0;
                        ?>

                        @foreach($products_ar as $cat)

                            <input type="checkbox" name="artiests[]"
                                   value="{{$cat->artiest}}" {{in_array($cat->artiest, $artiests ) ? 'checked' :'' }}>
                            {{ $cat->artiest }}
                            <br>
                        @endforeach
                    </div>

                </div>


                <div class="card">
                    <br>
                    <button>Go</button>
                </div>

            </div>
        </form>


        <div class="ui cards">

            @foreach ($products as $product)
                <div class="card">
                    <div class="content">
                        <a class="header" href="product/{{ $product->id }}">{{ $product->naam }}</a>

                        <div class="extra content">
                            €{{ $product->prijs }}
                            <img src="{{ URL::to('images/'.$product->image) }}" height="100"/>
                        </div>
                        <br>
                        <div class="extra content">
                            <form action="car/add" method="get">
                                <input type="hidden" name='id' value={{$product->id}} >
                                <input class="btn btn-success" type="submit" value="add to car">
                            </form>

                        </div>


                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection
