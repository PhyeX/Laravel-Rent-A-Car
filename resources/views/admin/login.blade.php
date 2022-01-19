<!DOCTYPE html>
<html lang="en">

<head>

    <title> Sign in </title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
    <link rel="icon" href="{{ asset("assets/admin") }}/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="{{ asset("assets/admin") }}/assets/images/logo.png" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <form action = "{{ route('admin_login_check') }}" method = "POST">
                        @csrf
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400">Sign in</h4>
                        <hr>
                        <div class="form-group mb-3">
                            <input type="text" name="email" class="form-control" id="Email" placeholder="Email address">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                        </div>
                        <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                        </div>
                        <button class="btn btn-block btn-primary mb-4">Sign in</button>
                        <hr>
                        <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Sign up</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset("assets/admin") }}/assets/js/vendor-all.min.js"></script>
<script src="{{ asset("assets/admin") }}/assets/js/plugins/bootstrap.min.js"></script>

<script src="{{ asset("assets/admin") }}/assets/js/pcoded.min.js"></script>



</body>

</html>
