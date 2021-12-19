<!doctype html>
<html lang="en">

<head>
    <title>Car Rent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include("home._css")


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

    @include("home._header")
    @include("home._selection")
    @include("home._transportLayout")
    @include("home._slider")
    @include("home._services")
    @include("home._customerTestimony")
    @include("home._ourblog")
    @include("home._footer")

</div>

@include("home._script")

</body>

</html>

