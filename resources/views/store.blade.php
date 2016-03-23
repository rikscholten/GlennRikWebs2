@extends('layouts.app')

@section('content')



<h1 class="ui centered aligned header">Muziek shop</h1>

<div class="ui cards">

    @foreach ($products as $product)
        <div class="card">
            <div class="content">
                <a class="header" href="product/{{ $product->id }}">{{ $product->naam }}</a>

                <div class="extra content">
                    €{{ $product->prijs }}
                </div>
            </div>
        </div>
    @endforeach


</div>


@endsection

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection
