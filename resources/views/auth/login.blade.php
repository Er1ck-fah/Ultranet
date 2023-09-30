<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Login | UltraNet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Ultranet SUARL" name="description">
        <meta content="Ultranet" name="Erick Kongne Fah">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('template/assets/images/ultranet.ico')}}" >

        <!-- Bootstrap Css -->
        <link href="{{url('template/assets/css/bootstrap.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{url('template/assets/css/icons.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{url('template/assets/css/app.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{url('template/assets/css/cdnjs.cloudflare.com_ajax_libs_animate.css_4.1.1_animate.min.css')}}" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

<body>

   
    <div class="account-pages my-5 pt-5 bounce">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Welcome UltraNet !</h5>
                                <p class="text-white">Sign in to continue to UltraNet Univer.</p>
                            
                            </div>
                        </div>

                        <div class="card-body p-4">

                            <div class="p-3">
                                @include('_message')
                                <form class="mt-4" action="{{url('login')}}" method="POST">

                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="email" class="form-control" name="email" id="username" placeholder="Enter username" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password"  id="userpassword" placeholder="Enter password" required>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="remember" id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>

                                    <div class="mt-2 mb-0 row ">
                                        <div class="col-12 mt-4">
                                            <a href="{{url('forgot-password')}}"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
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
    <script src="{{url('template/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{url('template/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('template/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{url('template/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('template/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{url('template/assets/js/app.js')}}"></script>
    <script src="{{url('template/assets/js/cdnjs.cloudflare.com_ajax_libs_animations_2.1_js_animations.min.js')}}" integrity="sha512-Jb1xPasilz4CRWpHF6CQPrVq8ar/oOGD+IYRc02srqssq/X4jdGb4tEq2mklHHiS3SKpFzU8RerqdbGhQGFomQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>