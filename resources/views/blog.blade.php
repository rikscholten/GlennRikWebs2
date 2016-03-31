@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Maak nieuwe blog</div>

                    <div class="panel-body">
                        <form action="http://localhost/GlennRikWebs2/public/blog/add" method="get" id ="h">
                            Naam:  <br>    <input type="text" name="naam"><br>
                           Tekst: <br><textarea form="h" name="text" >tekst</textarea><br>
                            Onderwerp:<br> <input type="text" name="onderwerp"><br>
                            Uren: <br>     <input type="text" name="uren"><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>

                    <div class="panel-heading">posts</div>

                    <div class="panel-body">
                       @foreach($blogs as $blog)
                         <b>  schrijver :</b><br> {{$blog->naam}}<br><br>
                             <b>   onderwerp :</b><br> {{$blog->onderwerp}}<br>
                                 <b>   text : </b><br>{{$blog->text}}<br><br>
                                     <b>  aantal uren :</b><br> {{$blog->aantal_uur}}<br>
                                         <b>  gepost op  :</b> <br>{{$blog->created_at}}<br>
<hr>




                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection