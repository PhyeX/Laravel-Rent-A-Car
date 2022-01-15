@extends("layouts.admin")

@section("title","Message Page")

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
                                <h5 class="m-b-10">Messages</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Messages</a></li>
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
                        @include('home.message')
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Ip</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $datalist as $rs )
                                        <tr>
                                            <td>{{ $rs -> id }}</td>
                                            <td>{{ $rs -> name }}</td>
                                            <td>{{ $rs -> surname }}</td>
                                            <td>{{ $rs -> email }}</td>
                                            <td>{{ $rs -> ip }}</td>
                                            <td>{{ $rs -> message }}</td>
                                            <td>{{ $rs -> note }}</td>
                                            <td>{{ $rs -> status }}</td>

                                            <td> <a href ="{{ route('admin_message_edit',['id' => $rs->id ]) }}"> Edit </a></td>
                                            <td> <a href ="{{ route('admin_message_delete',['id' => $rs->id ]) }}" onclick="return confirm('Delete ! Are you sure?')"> Delete </a></td>
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
