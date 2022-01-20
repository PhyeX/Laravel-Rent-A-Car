@extends("layouts.admin")

@section("title","User Page")

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
                                <h5 class="m-b-10">Users</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Users</a></li>
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

                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Roles</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $datalist as $rs )
                                        <tr>
                                            <td>{{ $rs -> id }}</td>
                                            <td>
                                                @if( $rs->profile_photo_path )
                                                    <img src="{{ Storage::url($rs->profile_photo_path) }}" height="50" style="border-radius: 10px" alt="">
                                                @endif
                                            </td>
                                            <td>{{ $rs -> name }}</td>
                                            <td>{{ $rs -> email }}</td>
                                            <td>{{ $rs -> phone }}</td>
                                            <td>{{ $rs -> address }}</td>
                                            <td>
                                                @foreach( $rs->roles as $row )
                                                    {{ $row->name }},
                                                @endforeach
                                            </td>
                                            <td> <a href ="{{ route('admin_user_roles',['id' => $rs->id ]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"> Roles </a>
                                            <a href="{{route('admin_user_edit',['id'=>$rs->id])}}">Edit</a>
                                            <a href="{{route('admin_user_delete',['id' => $rs->id])}}">Delete</a></td>
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

