@extends("layouts.home")

@section("title",$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section("content")
    @include("home._header")
    @include("home._selection")
    @include("home._transportLayout")
    @include("home._slider")
    @include("home._services")
    @include("home._customerTestimony")
    @include("home._ourblog")
    @include("home._footer")
@endsection
