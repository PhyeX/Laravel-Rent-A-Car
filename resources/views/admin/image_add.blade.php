
 <html>


 <head>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
     <!--[if lt IE 11]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
     <!-- Meta -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="description" content="" />
     <meta name="keywords" content="">
     <meta name="author" content="Phoenixcoded" />
     <!-- Favicon icon -->
     <link rel="icon" href="{{asset("assets/admin")}}/assets/images/favicon.ico" type="image/x-icon">

     <!-- vendor css -->
     <link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/style.css">
 </head>
<!-- [ Main Content ] start -->

    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add Image</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route("admin_home") }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route("admin_home") }}">Home</a></li>
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
                        <h5>{{ $data -> title }}</h5>
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

                        <form action = "{{route('admin_image_store',['car_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <label>Title</label>
                            <input type="text" name="title" class="form-control" id="inputPassword4">
                            <br>


                            <label>Image</label>
                            <input type="file" name="image" class="form-control" id="inputEmail4">
                            <br>

                            <button style=" margin: auto ; text-align: center; " type="submit" class="btn  btn-primary">Add Image</button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $images as $rs )
                    <tr>
                        <td>{{ $rs -> id }}</td>
                        <td>{{ $rs -> title }}</td>

                        <td>
                            @if ( $rs -> image )
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image)}}" height="60" alt="">
                            @endif
                        </td>

                        <td> <a href ="{{ route('admin_image_delete',['id' => $rs->id ,'product_id' => $data -> id ] ) }}" onclick="return confirm('Delete ! Are you sure?')"> Delete </a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

</div>
<!-- [ Main Content ] end -->
 <script src="{{ asset("assets/admin") }}/assets/js/vendor-all.min.js"></script>
 <script src="{{ asset("assets/admin") }}/assets/js/plugins/bootstrap.min.js"></script>
 <script src="{{ asset("assets/admin") }}/assets/js/pcoded.min.js"></script>

 <!-- Apex Chart -->
 <script src="{{ asset("assets/admin") }}/assets/js/plugins/apexcharts.min.js"></script>


 <!-- custom-chart js -->
 <script src="{{ asset("assets/admin") }}/assets/js/pages/dashboard-main.js"></script>
 </html>
