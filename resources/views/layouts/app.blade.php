<?php use Illuminate\Support\Facades\Auth ;
?>


<html lang="en">
<head>
    @yield('style')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RaveMusic</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.1/semantic.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar">wat</span>
                    <span class="icon-bar">is</span>
                    <span class="icon-bar">dit</span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    RaveMusic
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <?php create_navbar(0, 1); ?>



                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/car') }}"><i class=" fa fa-shopping-cart"></i> Shopping car</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


</body>
</html>



<?php
function create_navbar($parent, $level ) {
    $result = DB::select("SELECT a.id, a.label, a.link, a.admin, Deriv1.Count
				FROM `menu` a
					LEFT OUTER JOIN (
            SELECT parent, COUNT(*) AS Count
						FROM `menu`
						GROUP BY parent
					) Deriv1 ON a.id = Deriv1.parent
				WHERE a.parent=" . $parent);


    echo "<ul class='nav navbar-nav'>";
    foreach ($result as $row) {
        if( Auth::guest()  ){
break;
        }

if( $row->admin){

    if(Auth::user()->isAdmin != $row->admin){
break;
    }
}



        if ($row->Count > 0  ) {
            echo "<li><a href='".url($row->link)."'>" . $row->label . "</a>";
            create_navbar($row->id, $level + 1 );
            echo "</li>";
        } elseif ($row->Count ==0) {
            echo "<li><a href='" .url($row->link)."'>" . $row->label . "</a></li>";
        } else;

        }

    echo "</ul>";



}
?>
