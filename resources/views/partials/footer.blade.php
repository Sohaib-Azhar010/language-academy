<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="/about">About Us</a>
                <a class="btn btn-link" href="/contact">Contact Us</a>
                <a class="btn btn-link" href="/team">Our Team</a>

            </div>
            <div class="col-lg-5 col-md-6">
                <h4 class="text-white mb-3">Contact Us</h4>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> <a href="tel:+447862872874 ">+44 7862 872874</a>
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> <a href="tel:+923348389629">+92 334 8389629</a>
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=thelanguageacademy.enquiries@gmail.com"
                        target="_blank">thelanguageacademy.enquiries@gmail.com</a>

                </p>

            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Follow Us</h4>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/thelanguageacademy"
                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/thelanguagesacademy"
                        target="_blank"><i class="fab fa-instagram"></i></a>
                    {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-whatsapp"></i></a> --}}
                </div>

            </div>


        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="/">The Language Academy</a>, All Right Reserved.


                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="/">Home</a>
                        <a href="/dashboard">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<script>
  $(document).ready(function() {
    $('.slick-carousel').slick({
        infinite: true,
        slidesToShow: 3,  // Default setting for larger screens
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev" style="background: #00c7d7; border-radius: 50%;"></button>',
        nextArrow: '<button type="button" class="slick-next" style="background: #00c7d7; border-radius: 50%;"></button>',
        autoplay: false,  // Prevents auto-scrolling
        responsive: [
            {
                breakpoint: 1024,  // Devices less than 1024px wide
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 800,  // Devices less than 1024px wide
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,  // Devices less than 600px wide
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

</script>
<script src="https://cdn.jsdelivr.net/jquery/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
