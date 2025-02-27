<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Flooring Contractor NJ. - Carpenter Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
     <!-- Google reCaptcha Integration  -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>11 Sussex Rd, East Brunswick, NJ 08816</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="tel:+13472480499">+13472480499</a></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">Flooring Contractor NJ.</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
            <div class="nav-item dropdown">
                <a href="#" id="about-us" class="nav-link dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['about.php','testimonial.php', 'why-us.php', 'faqs.php']) ? 'active' : '' ?>" >About Us</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="testimonial.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'testimonial.php' ? 'active' : '' ?>">Testimonial</a>
                    <a href="why-us.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'why-us.php' ? 'active' : '' ?>">Why Us?</a>
                    <a href="faqs.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'faqs.php' ? 'active' : '' ?>">FAQs</a>
                </div>
            </div> 

            <div class="nav-item dropdown">
                <a href="#" id="services" class="nav-link dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['service.php','sanding-refining-new-jersey.php', 'wood-floor-installation-new-jersey.php', 'floor-repair-new-jersey.php','design-parquet-new-jersey.php','design-borders-new-jersey.php','design-medallions-new-jersey.php']) ? 'active' : '' ?>" >Services</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="sanding-refining-new-jersey.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'sanding-refining.php' ? 'active' : '' ?>">Sanding & Refinishing</a>
                    <a href="wood-floor-installation-new-jersey.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'wood-floor-installation.php' ? 'active' : '' ?>">Installation</a>
                    <a href="floor-repair-new-jersey.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'floor-repair.php' ? 'active' : '' ?>">Repairs</a>
                    <a href="design-parquet-new-jersey.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'design-parquet-new-jersey.php' ? 'active' : '' ?>">Custom Design Parquet</a>
                    <a href="design-borders-new-jersey.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'design-borders-new-jersey.php' ? 'active' : '' ?>">Custom Design Borders</a>
                    <a href="design-medallions-new-jersey.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'design-medallions-new-jersey.php' ? 'active' : '' ?>">Custom Design Medallions</a>
                </div>
            </div> 
            <a href="https://www.webatmax.net" class="nav-item nav-link">Products</a>
            <a href="wood-flooring.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'wood-flooring.php' ? 'active' : '' ?>">Projects</a>
            <a href="contact.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a>
        </div>
        <a href="quote.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
    <!-- Navbar End -->