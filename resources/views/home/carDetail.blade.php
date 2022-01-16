@extends("layouts.home")

@section("title","About Us - ".$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section("content")
    @include("home._header")
    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('{{ Storage::url($car->image)}}')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">

                        <div class="feature-car-rent-box-1">
                            <h3>Range Rover S7</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <span>Doors</span>
                                    <span class="spec">{{ $car->title }}</span>
                                </li>
                                <li>
                                    <span>Seats</span>
                                    <span class="spec">{{ $car->seats }}</span>
                                </li>
                                <li>
                                    <span>Lugage</span>
                                    <span class="spec">{{ $car->lugage }}</span>
                                </li>
                                <li>
                                    <span>Transmission</span>
                                    <span class="spec">{{ $car->transmission }}</span>
                                </li>
                                <li>
                                    <span>Minium age</span>
                                    <span class="spec">{{ $car->age }}</span>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center bg-light p-3">
                                <span>${{ $car->price }}/day</span>
                                <a href="contact.html" class="ml-auto btn btn-primary">Rent Now</a>
                            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("home._footer")
@endsection
