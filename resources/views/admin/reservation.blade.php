@extends("layouts.admin")

@section("title","Category Page")

@section("admincontent")
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Categories</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Reservations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">

                            <a href="{{ route('admin_category_add') }}" > <button  type="button" class="btn btn-info">Add Category</button> </a>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Id</th>
                                        <th>Car Id</th>
                                        <th>Where you from</th>
                                        <th>Where you go</th>
                                        <th>Rezervation Date</th>
                                        <th>Rezervation Time</th>
                                        <th>Return Date</th>
                                        <th>Return Time</th>
                                        <th>Price</th>
                                        <th>Ip Adress</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                        <th>Add Note</th>
                                        <th>Accept </th>
                                        <th>Confirm</th>
                                        <th>Reject </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $reservations as $reservation )
                                        <tr>
                                            <td>{{ $reservation -> id }}</td>
                                            <td>{{ $reservation -> user_id }}</td>
                                            <td>{{ $reservation -> car_id }}</td>
                                            <td>{{ $reservation -> where_you_from }}</td>
                                            <td>{{ $reservation -> where_you_go }}</td>
                                            <td>{{ $reservation -> rezdate }}</td>
                                            <td>{{ $reservation -> reztime }}</td>
                                            <td>{{ $reservation -> returndate }}</td>
                                            <td>{{ $reservation -> returntime }}</td>
                                            <td>{{ $reservation -> price }}</td>
                                            <td>{{ $reservation -> ip }}</td>
                                            <td>{{ $reservation -> note }}</td>
                                            <td>{{ $reservation -> status }}</td>
                                            <td> <a href ="{{ route('admin_reservation_edit',['id' => $reservation->id ]) }}"> Add Note </a></td>
                                            <td> <a href ="{{ route('admin_reservation_accept',['id' => $reservation->id ]) }}"> Accept </a></td>
                                            <td> <a href ="{{ route('admin_reservation_confirm',['id' => $reservation->id ]) }}"> Confirm </a></td>
                                            <td> <a href ="{{ route('admin_reservation_reject',['id' => $reservation->id ]) }}"> Reject </a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>

    <!-- [ Main Content ] end -->
@endsection

