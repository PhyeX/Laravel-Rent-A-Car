@extends("layouts.home")

@section("title","References - ".$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section("content")
    @include("home._header")
    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('http://localhost:8000/assets/images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1>References</h1>
                        <p>{!! $setting -> references !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("home._footer")
@endsection
