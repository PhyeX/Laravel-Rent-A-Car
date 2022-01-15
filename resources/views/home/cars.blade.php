@extends("layouts.home")

@section("title","Cars - ".$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section("content")
    @include("home._header")

        <div class="ftco-cover-1 overlay" style="background-image: url(
        @if( $cars != null )
            '{{ Storage::url($cars[0]->image)}}'
        @else
            'http://localhost:8000/assets/images/hero_1.jpg'
        @endif
        )">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1> Check a look our cars </h1>
                        <p>{!! $setting -> cars !!}</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($cars as $car)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="item-1">
                        <a href="#"><img src="{{ Storage::url($car->image)}}" alt="Image" class="img-fluid"></a>
                        <div class="item-1-contents">
                            <div class="text-center">
                                <h3><a href="#">{{ $car->title }}</a></h3>
                                <div class="rating">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                </div>
                                <div class="rent-price"><span>${{ $car->price }}/</span>day</div>
                            </div>
                            <ul class="specs">
                                <li>
                                    <span>Doors</span>
                                    <span class="spec">{{ $car->doors }}</span>
                                </li>
                                <li>
                                    <span>Seats</span>
                                    <span class="spec">{{ $car->seats }}</span>
                                </li>
                                <li>
                                    <span>Transmission</span>
                                    <span class="spec">{{ $car->transmission }}</span>
                                </li>
                                <li>
                                    <span>Minium age</span>
                                    <span class="spec">{{ $car->age }} years</span>
                                </li>
                            </ul>
                            <div class="d-flex action">
                                <a href="contact.html" class="btn btn-primary">Rent Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    @include("home._footer")
@endsection
