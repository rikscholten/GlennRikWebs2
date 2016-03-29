@extends('layouts.app')

@section('content')


<?php

use App\Categoriee;
use App\Product;
$products_cat = \App\Product::select('caterorie_id')->distinct('caterorie_id')->get();
$products_ar = \App\Product::select('artiest')->distinct('artiest')->get();?>


<h1 class="ui centered aligned header">Muziek shop</h1>
<div>
    <div class="ui cards">
        <div class="card">
    <form action="{{\Illuminate\Support\Facades\URL::current()}}">

        <label for="">Price</label>

        <br>
        min: <input type="text" name="min_price" value="{{\Illuminate\Support\Facades\Input::get('min_price')}}">

        <br>
        max: <input type="text" name="max_price" value="{{\Illuminate\Support\Facades\Input::get('max_price')}}">
</div>


        <div class="card">
            <div id="" style="overflow-y:scroll; overflow-x:hidden; height:100px;">
        <?php $brands = \Illuminate\Support\Facades\Input::has('brands') ? \Illuminate\Support\Facades\Input::get('brands'): [];
        $counter = 0;
        ?>

        @foreach($products_cat as $cat)

            <input type="checkbox" name="brands[]" value="{{$cat->caterorie_id}}" {{in_array($cat->caterorie_id, $brands ) ? 'checked' :'' }}>
    {{ Categoriee::where('id',$cat->caterorie_id)->get()->first()->naam }}
            <br>

    @endforeach
</div>

            <div class="card">
                <div id="" style="overflow-y:scroll; overflow-x:hidden; height:100px;">
                    <?php $artiests = \Illuminate\Support\Facades\Input::has('artiests') ? \Illuminate\Support\Facades\Input::get('artiests'): [];
                    $counter = 0;
                    ?>

                    @foreach($products_ar as $cat)

                        <input type="checkbox" name="artiests[]" value="{{$cat->artiest}}" {{in_array($cat->artiest, $artiests ) ? 'checked' :'' }}>
                        {{ $cat->artiest }}
                        <br>
                    @endforeach
                </div>
                </div>

    <div class="card">
<br>
        <button >Go</button>
</div>
    </form>


</div>


<div class="ui cards">

    @foreach ($products as $product)
        <div class="card">
            <div class="content">
                <a class="header" href="product/{{ $product->id }}">{{ $product->naam }}</a>

                <div class="extra content">
                    €{{ $product->prijs }}
                </div>
<br>
                <div class="extra content">
                        <form action="car/add" method="get">
                            <input type="hidden"  name = 'id' value={{$product->id}} >
                            <input class="btn btn-success" type="submit" value="add to car">
                        </form>

                </div>



            </div>
        </div>
    @endforeach


</div>


@endsection

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection
