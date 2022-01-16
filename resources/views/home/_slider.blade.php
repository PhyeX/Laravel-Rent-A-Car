<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h3>Our Offer</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
                <p>
                    <a href="#" class="btn btn-primary custom-prev">Previous</a>
                    <span class="mx-2">/</span>
                    <a href="#" class="btn btn-primary custom-next">Next</a>
                </p>
            </div>
            <div class="col-lg-9">





                <div class="nonloop-block-13 owl-carousel">
                    @foreach($slider as $rs)
                    <div class="item-1">
                        <a href="#"><img src="{{ Storage::url($rs->image)}}" alt="Image" class="img-fluid"></a>
                        <div class="item-1-contents">
                            <div class="text-center">
                                <h3><a href="#">{{ $rs->title }}</a></h3>
                                <div class="rating">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                </div>
                                <div class="rent-price"><span>{{ $rs->price }}$/</span>day</div>
                            </div>
                            <ul class="specs">
                                <li>
                                    <span>Doors</span>
                                    <span class="spec">{{ $rs->doors }}</span>
                                </li>
                                <li>
                                    <span>Seats</span>
                                    <span class="spec">{{ $rs->seats }}</span>
                                </li>
                                <li>
                                    <span>Transmission</span>
                                    <span class="spec">{{ $rs->transmission }}</span>
                                </li>
                                <li>
                                    <span>Minium age</span>
                                    <span class="spec">{{ $rs->age }} years</span>
                                </li>
                            </ul>
                            <div class="d-flex action">
                                <a href="{{route('home_carDetail',['slug'=>$rs->id,'id'=>$rs->id])}}" class="btn btn-primary">Rent Now</a>
                            </div>
                        </div>

                    </div>
                    @endforeach




                </div>

            </div>
        </div>
    </div>
</div>
