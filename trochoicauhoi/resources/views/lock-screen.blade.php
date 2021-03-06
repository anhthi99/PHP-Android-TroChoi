<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LTD - Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/ltd.ico')}}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="authentication-bg authentication-bg-pattern">
@include('sweetalert::alert')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <a href="index.html">
                                <span><img src="{{asset('assets/images/logo-cerbercus.png')}}" alt="" height="26"></span>
                            </a>
                        </div>

                        <div class="text-center w-75 m-auto">
                            <img src="{{ asset('assets/images/users/').'/'.Auth::user()->anh_dai_dien }} " width="88" alt="user-image" class="rounded-circle img-thumbnail">
                            <h4 class="text-dark-50 text-center mt-3">Chào ! {{Auth::user()->ho_ten}}
                            </h4>
                            <p class="text-muted mb-4">Nhập lại mật khẩu của bạn để truy cập trang Admin.</p>
                        </div>

                        <h5 class="auth-title">Lock Screen</h5>

                        <form action="{{ route('lock') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" id="password" name="mat_khau" placeholder="Nhập password">
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-danger btn-block" type="submit"> Đăng nhập </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Không phải bạn? trở về <a href="{{ route('dangnhap') }}" class="text-muted ml-1"><b class="font-weight-semibold">Đăng nhập</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<footer class="footer footer-alt">
    2019 © Upvex theme by <a href="" class="text-muted">Coderthemes</a> 
</footer>

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js')}}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js')}}"></script>
        
    
</body></html>