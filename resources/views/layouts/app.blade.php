<!DOCTYPE html>
<html lang="en" id="top">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Mobilan - Driving School')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="driving course, driving school, Mobilan, Batam" name="keywords">
    <meta content="Mobilan helps students learn to drive with experienced instructors, flexible course packages, and well-maintained training cars." name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/mobilan.png') }}" rel="shortcut icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-secondary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="#top" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0">Mobilan</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#top" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About Us</a>
                <a href="#courses" class="nav-item nav-link">Courses</a>
                <a href="#instructors" class="nav-item nav-link">Instructors</a>
                <a href="#cars" class="nav-item nav-link">Cars</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Office</h4>
                    <h2 class="text-primary mb-4"><i class="fa text-white me-2"></i>Mobilan</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Komplek Agung Citra Sari Blok E 20, Batam
                        Kota, Batam</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0811 222 877</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>admin@mobilan.com</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-light mb-4">Navigation</h4>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="#courses">Courses</a>
                    <a class="btn btn-link" href="#booking">Book Now</a>
                    <a class="btn btn-link" href="#instructors">Instructors</a>
                    <a class="btn btn-link" href="#cars">Cars</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Email Subscription</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email">
                            <button class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Our Social Media</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href="#" aria-label="Twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href="#" aria-label="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href="#" aria-label="YouTube"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href="#" aria-label="LinkedIn"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#top">2025 PT Mobilan Solusi Indonesia</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <button type="button" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js?v5') }}"></script>

</body>

</html>
