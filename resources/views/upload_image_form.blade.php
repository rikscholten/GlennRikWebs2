@extends('layouts.app')

@section('content')
    <div class="about-section">
        <div class="text-content" enctype="mulipart/form-data">
            <form action="upload" method="post">
           <input type="text" name="title" >
            <input type="text" name="title" >
            <input type="file" name="title" >
            <input type="submit" name="opslaan" >
</form>
        </div>
    </div>
@endsection