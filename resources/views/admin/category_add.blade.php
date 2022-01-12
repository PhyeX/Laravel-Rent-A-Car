@extends("layouts.admin")

@section("title","Add Category Page")

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
                            <h5 class="m-b-10">Add Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Add Category</a></li>
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
                        <h5>Add Category</h5>
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

                        <form action = "{{route('admin_category_create')}}" method="post">
                            @csrf
                            <label>Category</label>
                            <select class="form-control" name ="parent_id" id="exampleFormControlSelect1">
                                <option value = "0">Main Category</option>
                                @foreach( $datalist as $rs )
                                    <option value="{{ $rs -> id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                @endforeach
                            </select>
                            <br>

                            <label>Title</label>
                            <input type="text" name="title" class="form-control" id="inputPassword4">
                            <br>

                            <label>Keywords</label>
                            <input type="text" name="keywords" class="form-control" id="inputEmail4">
                            <br>

                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" id="inputEmail4">
                            <br>

                            <label>Description</label>
                            <input type="text" name="description" class="form-control" id="inputEmail4">
                            <br>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name ="status" id="exampleFormControlSelect1">
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>





                            <button style=" margin: auto ; text-align: center; " type="submit" class="btn  btn-primary">Add Category</button>

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
