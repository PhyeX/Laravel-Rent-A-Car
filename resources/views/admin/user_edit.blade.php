@extends("layouts.admin")

@section("title","Edit Page")

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
                                <h5 class="m-b-10">Edit User</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Edit User</a></li>
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
                            <h5>Edit User</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action = "{{route('admin_user_update',['id' => $data->id ])}}" method="post" enctype ="multipart/form-data">
                                @csrf

                                <label>Name</label>
                                <input type="text" value="{{$data->name}}" name="name" class="form-control" id="inputPassword4">
                                <br>

                                <label>Email</label>
                                <input type="text" value="{{$data->email}}" name="email" class="form-control" id="inputEmail4">
                                <br>

                                <label>Phone</label>
                                <input type="text" value="{{$data->phone}}" name="phone" class="form-control" id="inputEmail4">
                                <br>

                                <label>Address</label>
                                <input type="text" value="{{$data->address}}" name="address" class="form-control" id="inputEmail4">
                                <br>


                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file"  name="image" class="form-control" id="inputEmail4">
                                    <br>
                                    @if( $data -> profile_photo_path != null )
                                        <img src="{{ Storage::url( $data->profile_photo_path ) }}" height="200" style="border-radius: 10px" alt="">
                                    @endif
                                </div>

                                <button style=" margin: auto ; text-align: center; " type="submit" class="btn  btn-primary">Update</button>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection
