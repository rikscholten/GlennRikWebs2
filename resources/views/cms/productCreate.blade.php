@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Product toevoegen</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/productbeheer/createProduct']) !!}
                        {!! Form::label('product_naam', 'Product naam') !!}
                        {!! Form::text('product_naam', null, ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('product_kortebeschrijving', 'Korte beschrijving') !!}
                        {!! Form::textarea('product_kortebeschrijving', null , ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('product_beschrijving', 'Beschrijving') !!}
                        {!! Form::text('product_beschrijving', null, ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('product_prijs', 'Prijs') !!}
                        {!! Form::textarea('product_prijs', null , ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('product_artiest', 'Artiest') !!}
                        {!! Form::text('product_artiest', null, ['class' => 'form-control']) !!}
                        <br>
                        <input type="submit" class="btn btn-primary" value="Aanmaken">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
