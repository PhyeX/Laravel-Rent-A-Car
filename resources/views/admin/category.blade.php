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
                                <li class="breadcrumb-item"><a href="#!">Categories</a></li>
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
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $datalist as $rs )
                                        <tr>
                                            <td>{{ $rs -> id }}</td>
                                            <td>{{ $rs -> parent_id }}</td>
                                            <td>{{ $rs -> title }}</td>
                                            <td>{{ $rs -> status }}</td>
                                            <td> Edit </td>
                                            <td> <a href =" {{ route('admin_category_delete',['id' => $rs->id ]) }}" onclick="return confirm('Delete ! Are you sure?')">Delete </a></td>
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

