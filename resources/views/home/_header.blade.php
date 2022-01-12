@php
$setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

<header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">

            <div class="col-3 ">
                <div class="site-logo">
                    <a href="{{ route('home_index') }}">Car Rent</a>
                </div>
            </div>

            <div class="col-9  text-right">


                <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">

                        @if (Auth::check())
                            <li><a href="/user/profile" class="nav-link">My Account</a></li>
                        @else
                            <li><a href="/login" class="nav-link">Sign-in</a></li>
                            <li><a href="/register" class="nav-link">Sign-up</a></li>
                        @endif

                        <li class="active"><a href="{{ route('home_index') }}" class="nav-link">Home</a></li>
                        <li><a href="{{ route('home_services') }}" class="nav-link">Services</a></li>
                        <li><a href="{{ route('home_cars') }}" class="nav-link">Cars</a></li>
                        <li><a href="{{ route('home_about') }}" class="nav-link">About</a></li>
                        <li><a href="{{ route('home_blog') }}" class="nav-link">Blog</a></li>
                        <li><a href="{{ route('home_contact') }}" class="nav-link">Contact</a></li>

                        @if (Auth::check())
                                <li><a href="{{ route('logout') }}" class="nav-link">Log Out</a></li>
                        @endif
                    </ul>
                </nav>
            </div>


        </div>
    </div>

</header>
