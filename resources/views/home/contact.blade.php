@extends("layouts.home")

@section("title","Contact Us - ".$setting->title)

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
                        <h1>Contact Us Anytime</h1>
                        @include('home.message')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2>Contact Us Or Use This Form To Rent A Car</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <form  method="post" action ="{{ route("home_sendmessage") }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <input type="text" class="form-control" name="name" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="surname" placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" placeholder="Email address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                        <p>{!! $setting -> contact !!} </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("home._footer")
@endsection
