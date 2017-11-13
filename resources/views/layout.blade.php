<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Aplikasi E-commerce Ikan Koi</title>
        <link href="{{asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('css/images/ico/favicon.ico')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('css/images/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('css/images/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('css/images/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('css/images/ico/apple-touch-icon-57-precomposed.png')}}">
    </head>
    <body>
        <header id="header">
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="{{asset('css/images/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        
                    </div>
                </div>
            </nav>
        </header>
        <section>
            @yield('content');  
        </section>
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Banyuglugur</a>. Situbondo.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Tentang</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{asset('css/js/jquery.js')}}"></script>
        <script src="{{asset('css/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('css/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('css/js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('css/js/main.js')}}"></script>
        <script src="{{asset('css/js/wow.min.js')}}"></script>
    </body>
</html>
