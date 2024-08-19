<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Language Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    {{-- <link href="img/favicon.ico" rel="icon"> --}}
    <link rel="icon" href="img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <style>
        /* Center the logo in the collapsed navbar */
        @media (max-width: 400px) {
            .navbar-collapse {
                text-align: left;
                margin-top: 15px;
                /* Adjust if needed */
            }

            .navbar-brand {
                display: block;
                margin: 0 auto;
            }

            .navbar-nav {
                text-align: left;
                margin-top: 10px;
                /* Adjust if needed */
            }

            .navbar-nav .nav-link {
                display: block;
                margin: 5px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-3">
        <a class="navbar-brand" href="">
            <img src="img/logo.png" alt="Logo" class="d-inline-block align-top"
                style="height: 100px;margin-top:-25px"> <!-- Adjust the height as needed -->
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/courses" class="nav-item nav-link">Language Courses</a>
                <a href="/online-courses" class="nav-item nav-link">Online Classes</a>
                <a href="/team" class="nav-item nav-link">Faculty</a>
                <a href="/testimonial" class="nav-item nav-link">Students' Reviews</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
