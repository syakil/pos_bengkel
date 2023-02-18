<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="Description" content="HTML5 Bootstrap Admin Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="dashboard template,admin template,bootstrap dashboard,financial dashboard,personal finance dashboard,power bi financial dashboard,cfo dashboard,balance sheet dashboard,dashboard financial reporting,bootstrap admin template,admin dashboard html template,admin dashboard bootstrap 4,admin portal template,admin template design,best admin dashboard,best dashboard templates">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/brand/favicon.ico')}}" type="image/x-icon"/>

    <!-- Title -->
    <title>Nixlot - HTML5 Bootstrap Admin Template</title>

    <!-- Font Awesome -->
    <link href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Ionicons -->
    <link href="{{asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Typicons -->
    <link href="{{asset('assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">

    <!-- Sidebar css -->
    <link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!-- Side menu css-->
    <link href="{{asset('assets/css/sidemenu.css')}}" rel="stylesheet">

    <!-- Custom Scroll bar-->
    <link href="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css"')}} rel="stylesheet"/>

    <!-- Style Css-->
    <link href="{{asset('assets/css/dashboard-three.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dashboard-three-dark.css')}}" rel="stylesheet">

    <!-- Icon Style -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini dashboard-five custom-image">

<!-- Loader -->
<div id="loading">
    <img src="{{asset('assets/img/loader3.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- Loader -->
<!-- Main-signin-wrapper -->

<div class="main-signin-wrapper">
    <div class="row text-center pl-0 pr-0 ml-0 mr-0">
        <div class="col-lg-4 d-block mx-auto">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-solid-danger" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning!</strong> {{$error}}
                    </div>
                @endforeach
            @endif


            <div class="card">
                <div class="card-body">
                    <img src="{{asset('assets/img/brand/logo-3.png')}}" class="mb-3" alt="Logo">
                    <form method="POST" class="text-left mt-3" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Firstname &amp; Lastname</label> <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="form-group">
                            <label for="password" >Password</label> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>


                        <button class="btn btn-main-primary btn-block">Create Account</button>
                    </form>
                    <div class="main-signin-footer mg-t-5">
                        <p>Already have an account? <a href="{{route('login')}}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main-signin-wrapper -->

<!-- JQuery min js -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Bundle js -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Ionicons js -->
<script src="{{asset('assets/plugins/ionicons/ionicons.js')}}"></script>

<!-- Eva-Icons js -->
<script src="{{asset('assets/plugins/web-fonts/eva.min.js')}}"></script>

<!-- Moment js -->
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

<!-- Perfect-scrollbar js -->
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<!-- Custom Scroll bar Js-->
<script src="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>
