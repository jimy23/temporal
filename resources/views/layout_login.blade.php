<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plataforma PTTI</title>

    <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://blackrockdigital.github.io/startbootstrap-sb-admin/css/sb-admin.css"/>

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"
          integrity="sha256-szHusaozbQctTn4FX+3l5E0A5zoxz7+ne4fr8NgWJlw=" crossorigin="anonymous"/>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"
          integrity="sha256-AIodEDkC8V/bHBkfyxzolUMw57jeQ9CauwhVW6YJ9CA=" crossorigin="anonymous"/>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
          rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
          rel="stylesheet" type="text/css">

    <style type="text/css">
        IMG.displayed {
            display: block;
            margin-left: auto;
            margin-right: auto }
        div.superior{
            background-color: #e6e6e6;
        }
        body {
            background-color:#fff;
            -webkit-font-smoothing: antialiased;
            font: normal 14px Roboto,arial,sans-serif;
        }



        .form-login {
            background-color: white;
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 15px;
            border-color:#d2d2d2;
            border-width: 5px;
            box-shadow:0 1px 0 #cfcfcf;
        }

        h4 {
            border:0 solid #fff;
            border-bottom-width:1px;
            padding-bottom:10px;
            text-align: center;
        }

        .form-control {
            border-radius: 10px;
        }

        .wrapper {
            text-align: center;
        }
    </style>

    <style type="text/css">
        body { background: #d9d9d9 !important;  } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        .navbar { background: #d9d9d9 !important;  }
    </style>
</head>
<body>

<div class="section superior">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#"><img src="http://media.utp.edu.co/img/optimized/marca_UTP.png" class="displayed"></a>
            </div>
            <div class="col-md-4">
                <h1 class="text-center">PTTI</h1>
            </div>
            <div class="col-md-4">
                <a href="#"><img src="http://media.utp.edu.co/img/optimized/ministerioeducacion.png" class="displayed"></a>
            </div>
        </div>
    </div>
</div>



<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{url('home')}}">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{url('auth/login')}}">Login</a></li>
                    <li><a href="{{url('auth/register')}}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="{{url('home')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->nombre}} {{Auth::user()->apellido}} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('auth/logout')}}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<div class="section superior">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-11"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="alignmiddle"><img src="http://media.utp.edu.co/img/optimized/marca_UTP.png" class="displayed"></a>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
{!! Html::script('js/dropdown.js') !!}
@yield('scripts')
</body>
</html>
