@extends("layouts.admin")

@section("title","Settings Edit Page")
@section("javascript")
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
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
                            <h5 class="m-b-10">Edit Setting</h5>
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
                        <h5>Edit Setting</h5>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">

                                <div class="card-body">
                                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="general-tab" data-toggle="tab" href="#hometab" role="tab" aria-controls="home" aria-selected="true">General Settings</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="smtp-tab" data-toggle="tab" href="#smtptab" role="tab" aria-controls="profile" aria-selected="false">Smtp Email</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="social-tab" data-toggle="tab" href="#socialtab" role="tab" aria-controls="contact" aria-selected="false">Social Media</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="about-tab" data-toggle="tab" href="#abouttab" role="tab" aria-controls="contact" aria-selected="false">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="services-tab" data-toggle="tab" href="#servicestab" role="tab" aria-controls="contact" aria-selected="false">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="blog-tab" data-toggle="tab" href="#blogtab" role="tab" aria-controls="contact" aria-selected="false">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab" href="#contacttab" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="references-tab" data-toggle="tab" href="#referencestab" role="tab" aria-controls="contact" aria-selected="false">References</a>
                                        </li>
                                    </ul>
                                    <form action = "{{ route('admin_setting_update') }}" method="GET" >
                                        @csrf
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="hometab" role="tabpanel" aria-labelledby="home-tab">
                                            <input type="hidden" name="id" value="{{ $data -> id }}" class="form-control" id="inputPassword4">


                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ $data -> title }}" class="form-control" id="inputPassword4">
                                            <br>

                                            <label>Keywords</label>
                                            <input type="text" name="keywords" value="{{ $data  -> keywords }}" class="form-control" id="inputEmail4">
                                            <br>

                                            <label>Company</label>
                                            <input type="text" name="company"  value="{{ $data -> company }}"class="form-control" id="inputEmail4">
                                            <br>

                                            <label>Address</label>
                                            <input type="text" name="address" value="{{ $data  -> address }}" class="form-control" id="inputEmail4">
                                            <br>

                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{ $data  -> phone }}" class="form-control" id="inputEmail4">
                                            <br>

                                            <label>Fax</label>
                                            <input type="text" name="fax" value="{{ $data  -> Fax }}"  class="form-control" id="inputEmail4">
                                            <br>

                                            <label>Email</label>
                                            <input type="text" name="email" value="{{ $data  -> email }}"  class="form-control" id="inputEmail4">
                                            <br>

                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control" name ="status" id="exampleFormControlSelect1">

                                                <option selected="selected" >{{ $data -> status }}</option>
                                                <option>False</option>
                                                <option>True</option>
                                            </select>
                                            <br>


                                        </div>

                                        <div class="tab-pane fade" id="smtptab" role="tabpanel" aria-labelledby="profile-tab">
                                            <label>Smtp Server</label>
                                            <input type="text" name="smtpserver" value="{{ $data  -> smtpserver }}" class="form-control" id="inputEmail4">
                                            <br>

                                            <label>Smtp Email</label>
                                            <input type="text" name="smtpemail" value="{{ $data  -> smtpemail }}"  class="form-control" id="inputEmail4">
                                            <br>
                                            <label>Smtp Password</label>
                                            <input type="password" name="smtppassword" value="{{ $data  -> smtppassword }}"  class="form-control" id="inputEmail4">
                                            <br>
                                            <label>Smtp Port</label>
                                            <input type="number" name="smtpport" value="{{ $data  -> smtpport }}"  class="form-control" id="inputEmail4">
                                            <br>
                                        </div>

                                        <div class="tab-pane fade" id="socialtab" role="tabpanel" aria-labelledby="contact-tab">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" value="{{ $data  -> facebook }}"  class="form-control" id="inputEmail4">
                                            <br>
                                            <label>Instagram</label>
                                            <input type="text" name="instagram" value="{{ $data  -> instagram }}"  class="form-control" id="inputEmail4">
                                            <br>
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" value="{{ $data  -> twitter }}"  class="form-control" id="inputEmail4">
                                            <br>
                                            <label>Youtube</label>
                                            <input type="text" name="youtube" value="{{ $data  -> youtube }}"  class="form-control" id="inputEmail4">
                                            <br>
                                        </div>

                                        <div class="tab-pane fade" id="abouttab" role="tabpanel" aria-labelledby="contact-tab">
                                            <label>About</label>
                                            <textarea id="about" type="text"  class="form-control" name="about"></textarea>
                                            <br>
                                        </div>

                                        <div class="tab-pane fade" id="servicestab" role="tabpanel" aria-labelledby="contact-tab">
                                            <label>Services</label>
                                            <textarea id="services" type="text"  class="form-control" name="services"></textarea>
                                            <br>
                                        </div>

                                        <div class="tab-pane fade" id="abouttab" role="tabpanel" aria-labelledby="contact-tab">
                                            <label>About</label>
                                            <textarea id="about" type="text"  class="form-control" name="about"></textarea>
                                            <br>
                                        </div>

                                        <div class="tab-pane fade" id="blogtab" role="tabpanel" aria-labelledby="contact-tab">
                                            <label>Blog</label>
                                            <textarea id="blog" type="text"  class="form-control" name="blog"></textarea>
                                            <br>
                                        </div>

                                        <div class="tab-pane fade" id="contacttab" role="tabpanel" aria-labelledby="contact-tab">
                                            <label>Contact</label>
                                            <textarea id="contact" type="text"  class="form-control" name="contact"></textarea>
                                            <br>
                                        </div>

                                        <div class="tab-pane fade" id="referencetab" role="tabpanel" aria-labelledby="contact-tab">
                                            <label>References</label>
                                            <textarea id="referencestab" type="text"  class="form-control" name="contact"></textarea>
                                            <br>
                                        </div>



                                    </div>
                                </div>
                                <button style=" margin: auto ; text-align: center; " type="submit" class="btn  btn-primary">Update Setting</button>
                                <br>
                            </div>

                        </div>

                    </div>


                            <script>
                                $('#summernote').summernote({
                                    placeholder: '{{ $data  -> references }}',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                                $('#contact').summernote({
                                    placeholder: '{{ $data  -> contact }}',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                                $('#blog').summernote({
                                    placeholder: '{{ $data  -> blog }}',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                                $('#services').summernote({
                                    placeholder: '{{ $data  -> services }}',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                                $('#about').summernote({
                                    placeholder: '{{ $data  -> about }}',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });

                            </script>




                        </form>
                    </div>
                </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@endsection
