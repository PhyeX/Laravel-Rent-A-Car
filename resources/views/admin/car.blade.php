@extends("layouts.admin")

@section("title","Car Page")

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
                                <h5 class="m-b-10">Cars</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Cars</a></li>
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

                            <a href="{{ route('admin_car_create') }}" > <button  type="button" class="btn btn-info">Add Car</button> </a>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Image Gallery</th>
                                        <th>Age</th>
                                        <th>Doors</th>
                                        <th>Seats</th>
                                        <th>Lugage</th>
                                        <th>Transmission</th>
                                        <th>User Id</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $datalist as $rs )
                                        <tr>
                                            <td>{{ $rs -> id }}</td>
                                            <td>
                                              {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                            </td>
                                            <td>{{ $rs -> title }}</td>
                                            <td>{{ $rs -> status }}</td>
                                            <td>{{ $rs -> keywords }}</td>
                                            <td>{{ $rs -> description }}</td>
                                            <td>{{ $rs -> price }}</td>
                                            <td>
                                                @if ( $rs -> image )
                                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30" alt="">
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin_image_add',['car_id' => $rs->id ])}}" onclick="return !window.open(this.href ,'','top=50 left=100 width=1100,height=700')">Image Gallery</a></td>
                                            <td>{{ $rs -> age }}</td>
                                            <td>{{ $rs -> doors }}</td>
                                            <td>{{ $rs -> seats }}</td>
                                            <td>{{ $rs -> lugage }}</td>
                                            <td>{{ $rs -> transmission }}</td>
                                            <td>{{ $rs -> user_id }}</td>

                                            <td> <a href ="{{ route('admin_car_edit',['id' => $rs->id ]) }}"> Edit </a></td>
                                            <td> <a href ="{{ route('admin_car_delete',['id' => $rs->id ]) }}" onclick="return confirm('Delete ! Are you sure?')"> Delete </a></td>
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
