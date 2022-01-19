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
                    <div class="col-lg-7">
                    <form action="{{route("user_reserve_car" , [ 'carId' => $car->id ])}}" method="get">


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
                    <br>
                            <div class="row">



                                <div class="form-group col-md-3">
                                    <label for="cf-1"><b>Where you from</b></label>
                                    <input type="text" name = "whereyoufrom" id="cf-1" placeholder="Your pickup address" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cf-2"><b>Where you go</b></label>
                                    <input type="text" name = "whereyougo" id="cf-2" placeholder="Your drop-off address" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cf-3"><b>Journey date</b></label>
                                    <input type="text" name="rezdate" id="cf-3" placeholder="Your pickup address" class="form-control datepicker px-3">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cf-4"><b>Return date</b></label>
                                    <input type="text" id="cf-4" name="returndate" placeholder="Your pickup address" class="form-control datepicker px-3">
                                </div>
                                <br>



                            </div>
                            <div class="d-flex align-items-center bg-light p-3">
                                <span>${{ $car->price }}/day</span>
                                <button class ="ml-auto btn btn-primary">Rent Now</button>
                            </div>

                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include("home._footer")
@endsection
