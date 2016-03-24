@extends('layouts.app')

@include('session')
@section('content')



    <h1 class="ui centered aligned header">Muziek shop</h1>

    <div class="ui cards">
{{$_SESSION['naam']}}
    </div>


@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">
@endsection
