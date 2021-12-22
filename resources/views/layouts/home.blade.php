<!doctype html>
<html lang="en">

<head>
    <title> @yield("title") </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <
    @include("home._css")
    @yield("css")
    @yield("header_js")
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    @section("content")
    @show



</div>
@include("home._script")
@yield("footer_js")
</body>

</html>

