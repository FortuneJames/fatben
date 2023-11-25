

<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from eres.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 07:54:30 GMT -->

<head>

    <!-- Title -->
    <title>Register</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords"
        content="	admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
    <meta name="description"
        content="Our HTML Admin Dashboard is built with a responsive design, ensuring seamless compatibility across different devices and screen sizes. The user-friendly interface makes navigation intuitive and straightforward for administrators.">

    <meta property="og:title" content="ERES - Hospital Admin Dashboard Bootstrap HTML Template">
    <meta property="og:description"
        content="Our HTML Admin Dashboard is built with a responsive design, ensuring seamless compatibility across different devices and screen sizes. The user-friendly interface makes navigation intuitive and straightforward for administrators.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{route ('register')}}"><img src="/assets/images/10x.jpg" width="50%" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control" placeholder="Name" type="text"
                                                name="name" :value="old('name')" required autofocus
                                                autocomplete="name">
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" placeholder="hello@example.com" type="email"
                                                name="email" :value="old('email')" required autocomplete="username">
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        <label class="form-label">Password</label>
                                        <div class="mb-3 position-relative">
                                            <input id="dz-password" class="form-control" type="password"
                                                name="password" required autocomplete="new-password">
                                            <span class="show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                        <label class="form-label">Confirm Password</label>
                                        <div class="mb-3 position-relative">
                                            <input id="dz-password" class="form-control" type="password"
                                                name="password_confirmation" required autocomplete="new-password">
                                            <span class="show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary btn-block">Sign me
                                                up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                          <p class="mb-0">Already have an account? <a class="text-primary"
                                                href="{{ route('login') }}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
  Scripts
 ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>


</html>
