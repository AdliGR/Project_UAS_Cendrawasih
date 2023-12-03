<!--
=========================================================
* Corporate UI - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/corporate-ui
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/material-dashboard-master/assets/img/favicon.png">
    <title>
        Sekolah Kristen Cendrawasih
    </title>

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
        rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('corporate-ui-dashboard-main/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('corporate-ui-dashboard-main/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    <link href="{{ asset('corporate-ui-dashboard-main/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('corporate-ui-dashboard-main/assets/css/corporate-ui-dashboard.css?v=1.0.0') }}" rel="stylesheet" />

     <!-- Core JS Files -->
    <script src="{{ asset('corporate-ui-dashboard-main/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('corporate-ui-dashboard-main/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('corporate-ui-dashboard-main/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('corporate-ui-dashboard-main/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <!-- main Content -->
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h1>Selamat Datang<h1>
                                    <h3 class="welcome-text"><span class="typed-text"></span></h3>
                                    <p class="mb-0">Silahkan masukan Email dan Password anda</p>
                                </div>
                                <div class="card-body">

                                    @if(session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <label>Email: </label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Masukan Email Anda" aria-label="Email"
                                                aria-describedby="email-addon">
                                        </div>
                                        <label>Password: </label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Masukan Password Anda" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                                <div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8"
                                    style="background-image:url('corporate-ui-dashboard-main/assets/img/image-sign-in.jpg')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="footer py-4" style="background-color: #252525; color: white;">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <span style="font-weight: bold;">@Sekolah Kristen Cendrawasih - Cengkareng - Jakarta</span>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link text-white font-weight-bold"
                                target="_blank">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gallery') }}" class="nav-link text-white font-weight-bold"
                                target="_blank">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aboutus') }}" class="nav-link text-white font-weight-bold"
                                target="_blank">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
