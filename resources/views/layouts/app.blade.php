<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ @$pageTitle }}</title>
        <meta name="description" content="{{ @$pageDescription }}">
        <meta name="keywords" content="{{ @$pageKeywords }}">
        <link rel="Maqura Realty" href="favicon.ico" type="image/x-icon">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Segoe UI:100,200,300,400,500,600,700,800" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-bathtub.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app-general-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app-list-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app-form-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">

        <!-- Script -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
    </head>
    <body>
        <section class="main-block-holder">
            <header>
                <section class="top-bar">
                    <article class="left-side">
                        <a href="{{ url('/') }}" class="fa fa-home"></a>
                        <span id="sep-h">|</span>
                        <a href="{{ url('about-us') }}">about us</a>
                    </article>

                    <article class="right-side">
                        <span id="mobi-hide">
                            +233 <strong>24 406 2242</strong> / +233 <strong>20 704 9559</strong>
                        </span>
                        <span>
                            <span id="sep-h">|</span>
                            <a href="{{ url('contact-us') }}" class="fa fa-envelope"></a>
                            <span id="sep-h">|</span>
                            <a href="https://www.facebook.com/maqurarealty" target="_blank" class="fa fa-facebook"></a>
                            <a href="https://www.instagram.com/maqurarealty" target="_blank" class="fa fa-instagram"></a>
                            <a href="https://www.twitter.com/maqurarealty" target="_blank" class="fa fa-twitter"></a>
                            <a href="https://www.linkedin.com/maqurarealty" target="_blank" class="fa fa-linkedin"></a>
                        </span>
                    </article>
                </section>

                <section class="siteName-menu">
                    <a href="{{ url('/') }}" class="site-name">
                        <img src="{{ url('images/maqura-realty-logo.png') }}" alt="Maqura Realty" title="Maqura Realty" border="0">
                    </a>

                    <nav class="main-menu">
                        <a class="navicon">
                            <i class="fa fa-navicon"></i> MENU
                        </a>
                        <ul>
                            <li id="l-red">
                                <a>properties <i class="fa fa-angle-down"></i></a>

                                <ol>
                                    <li>
                                        <a href="{{ url('properties/houses') }}">houses</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/houses/for-sale') }}">for sale</a>
                                            <a href="{{ url('properties/houses/for-rent') }}">for rent</a>
                                        </article>
                                    </li>
                                    <li>
                                        <a href="{{ url('properties/apartments') }}">apartments</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/apartments/for-sale') }}">for sale</a>
                                            <a href="{{ url('properties/apartments/for-rent') }}">for rent</a>
                                        </article>
                                    </li>
                                    <li>
                                        <a href="{{ url('properties/office-spaces') }}">office spaces</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/office-spaces/for-sale') }}">for sale</a>
                                            <a href="{{ url('properties/office-spaces/for-rent') }}">for rent</a>
                                        </article>
                                    </li>
                                    <li>
                                        <a href="{{ url('properties/lands') }}">lands</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/lands/for-sale') }}">for sale</a>
                                        </article>
                                    </li>
                                </ol>
                            </li>
                            <li id="l-gold">
                                <a>what we do</a>
                                <ol>
                                    <li>
                                        <a href="">real estate agency</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('property-management') }}">property management</a>
                                    </li>
                                    <!--li>
                                        <a href="{{ url('property-management') }}">architectual design</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('property-management') }}">interior design</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('property-management') }}">building construction</a>
                                    </li-->
                                </ol>
                            </li>
                            <li id="l-green">
                                <a href="{{ url('contact-us') }}">contact us</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </header>

            @yield('content')

            <section class="contact-info">
                <ul>
                    <li>
                        <h3><i class="fa fa-map-marker"></i> location</h3>
                        Star Tower, R2, Abia, Ningo-Prampram, <br>Greater Accra, Ghana.
                    </li>
                    <li>
                        <h3><i class="fa fa-clock-o"></i> work hours</h3>
                        Monday to Friday - 8am to 5pm<br>
                        Saturday - 8am to 2pm
                    </li>
                    <li>
                        <h3><i class="fa fa-phone"></i> telephone</h3>
                        +233 24 406 2242<br>
                        +233 20 704 9559
                    </li>
                    <li>
                        <h3><i class="fa fa-envelope-o"></i> email</h3>
                        <a href="mailto:info@maqurarealty.com">info@maqurarealty.com</a><br>
                        <a href="mailto:maqurarealty@gmail.com">maqurarealty@gmail.com</a>
                    </li>
                </ul>
            </section>

            <footer>
                <ul class="color-bars">
                    <li id="c-red"></li>
                    <li id="c-gold"></li>
                    <li id="c-green"></li>
                    <li id="c-black"></li>
                </ul>
                <article class="info">
                    <article class="socmed">
                        <a href="https://www.facebook.com/maqurarealty" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/maqurarealty" target="_blank" class="fa fa-instagram"></a>
                        <a href="https://www.twitter.com/maqurarealty" target="_blank" class="fa fa-twitter"></a>
                        <a href="https://www.linkedin.com/maqurarealty" target="_blank" class="fa fa-linkedin"></a>
                    </article>
                    Copyright &copy;{{ date("Y") }} Maqura Realty<br>
                </article>
            </footer>
        </section>
    </body>
</html>
