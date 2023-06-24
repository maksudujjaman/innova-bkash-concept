<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>User Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="home-btn d-none d-sm-block">
    <a href="#" target="_blank" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h1 class="text-primary">User Login</h1>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('/')}}admin/assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-2">
                            <h4 class="text-center text-danger">{{session('message')}}</h4>

                            <form class="form-horizontal" action="{{route('user.login')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="user_mobile">Mobile Number</label>
                                    <input type="number" name="mobile" class="form-control" id="user_mobile" placeholder="Enter Mobile Number">
                                </div>

                                <div class="form-group">
                                    <label for="user_password">Password</label>
                                    <input type="password" name="password" class="form-control" id="user_password" placeholder="Enter password">
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:04 GMT -->
</html>

