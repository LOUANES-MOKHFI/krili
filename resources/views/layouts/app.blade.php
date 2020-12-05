<!DOCTYPE html>
<html  class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KRILI - @yield('title')</title>
    <link rel="shortcut icon" href="/designe/favicon.ico" type="image/x-icon" />
    <!-- Scripts -->
  @yield('header')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {!! Html::style('/designe/assets/css/bootstrap.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/vegas.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/slicknav.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/magnific-popup.css')!!}
    {!! Html::style('/designe/assets/css/plugins/owl.carousel.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/gijgo.css')!!}
    {!! Html::style('/designe/assets/css/font-awesome.css')!!}
    {!! Html::style('/designe/assets/css/reset.css')!!}
    {!! Html::style('/designe/assets/css/style.css')!!}
    {!! Html::style('/designe/assets/css/responsive.css')!!}
    <!-- Styles -->
</head>     
<body class="loader-active">
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="/designe/assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <header id="header-area" class="fixed-top">
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> {{getsetting()->adress}}
                    </div>
                   
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +213{{getsetting()->site_phone}}
                    </div>
                    
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> {{now()}}
                    </div>
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="{{url('/home')}}" class="logo" style="height: 60px">
                            <img src="{{asset('/images/'.getsetting()->logo)}}" alt="{{getsetting()->site_name}}" width="120">
                        </a>
                    </div>
                    <div class="col-lg-9 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="{{url('/home')}}">Accueil</a></li>
                                 <li><a href="#">services</a>
                                    <ul style="width: 280px">
                                        <li><a href="{{url('/services')}}">nos services</a></li>
                                        <li><a href="{{url('/about')}}">a propos</a></li>
                                        <li><a href="{{url('/contact')}}">Contacter nous</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Agences</a>
                                    <ul style="width: 280px">
                                        <li><a href="{{url('/agences-des-vehicules')}}">LOCATION DES VEHICULES</a></li>
                                        <li><a href="{{url('/agences-des-appartements')}}">LOCATION DES APPARTEMENTS</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/tout-les-vehicules')}}">Vehicules</a></li>
                                 <li><a href="{{url('/tout-les-appartements')}}">Appartement</a></li>
                                
                                 @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li >
                                    <a href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                        @else
                        <li><a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul style="width: 180px">
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                        
                                    </ul>
                                </li>
                           
                        @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="main">
    @yield('content')
</div>
<section id="footer-area">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>A propos </h2>
                            <div class="widget-body">
                                <img src="{{asset('/images/'.getsetting()->logo)}}" alt="{{getsetting()->site_name}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>nos informations</h2>
                            <div class="widget-body">
                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i>{{getsetting()->adress}}</li>
                                    <li><i class="fa fa-mobile"></i> +213{{getsetting()->site_phone}}</li>
                                    <li><i class="fa fa-envelope"></i> {{getsetting()->site_email}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                            <h2>{{getsetting()->site_name}} </h2>
                            <div class="widget-body">
                                <p>{{getsetting()->slegon}}.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droit réservé </a>
</p>
                    </div>
                </div>
            </div>
        </div>
</section>

    <div class="scroll-top">
        <img src="/designe/assets/img/scroll-top.png" alt="JSOFT">
    </div>

</body>
{!!Html::script("/designe/assets/js/jquery-3.2.1.min.js")!!}
{!!Html::script("/designe/assets/js/jquery-migrate.min.js")!!}
{!!Html::script("/designe/assets/js/popper.min.js")!!}
{!!Html::script("/designe/assets/js/bootstrap.min.js")!!}
{!!Html::script("/designe/assets/js/plugins/gijgo.js")!!}
{!!Html::script("/designe/assets/js/plugins/vegas.min.js")!!}
{!!Html::script("/designe/assets/js/plugins/isotope.min.js")!!}
{!!Html::script("/designe/assets/js/plugins/owl.carousel.min.js")!!}
{!!Html::script("/designe/assets/js/plugins/waypoints.min.js")!!}
{!!Html::script("/designe/assets/js/plugins/counterup.min.js")!!}
{!!Html::script("/designe/assets/js/plugins/mb.YTPlayer.js")!!}
{!!Html::script("/designe/assets/js/plugins/magnific-popup.min.js")!!}
{!!Html::script("/designe/assets/js/plugins/slicknav.min.js")!!}
{!!Html::script("/designe/assets/js/main.js")!!}
@yield('footer')
</html>
