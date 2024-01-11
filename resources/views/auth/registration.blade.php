<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
        <!-- Favicon -->
        <link rel="icon" href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/img/brand/favicon.ico" type="image/x-icon"/>

        <!-- Title -->
        <title>Dashlead -  Admin Panel  Dashboard Template</title>

        <!---Fontawesome css-->
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!---Ionicons css-->
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

        <!---Typicons css-->
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/typicons.font/typicons.css" rel="stylesheet">

        <!---Feather css-->
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/feather/feather.css" rel="stylesheet">

        <!---Falg-icons css-->
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

        <!---Style css-->
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/css/style.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/css/custom-style.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/css/skins.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/css/dark-style.css" rel="stylesheet">
        <link href="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/css/custom-dark-style.css" rel="stylesheet">

        
    </head>

    <body>
        <!-- Loader -->
        <div id="global-loader">
            <img src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/img/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- End Loader -->


                            <!-- Page -->
        <div class="page main-signin-wrapper">

            <!-- Row -->
            <div class="row text-center pl-0 pr-0 ml-0 mr-0">
                <div class="col-lg-3 d-block mx-auto">
                    <div class="text-center mb-2">
                        <img src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/img/brand/logo.png" class="header-brand-img" alt="logo">
                        <img src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/img/brand/logo-light.png" class="header-brand-img theme-logos" alt="logo">
                    </div>
                    <div class="card custom-card">
                         <h3 class="card-header text-center">Signup to Your Account</h3>
                        <div class="card-body">
                         <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group text-left">
                                <label>Name</label>
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                         
                            <div class="form-group text-left">
                                    <label>Email</label>
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group text-left">
                                <label>Password</label>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">
                                <p class="mb-0">Already have an account? <a href="{{config('app.baseURL')}}/login">Sign In</a></p>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                          <a href="{{ route('login.facebook') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                            Login With facebook
                          </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- End Page -->

        
        <!-- End Page -->
        <!-- Jquery js-->
        <script src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap js-->
        <script src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Ionicons js-->
        <script src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/ionicons/ionicons.js"></script>
        
        <!-- Rating js-->
        <script src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/plugins/rating/jquery.rating-stars.js"></script>

        
        <!-- Custom js-->
        <script src="https://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/js/custom.js"></script>



    
    </body>
</html>