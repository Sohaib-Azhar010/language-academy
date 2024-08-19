@include('partials.header')

<style>
    .popp {
        font-size: 1.6vw;
    }

    @media (max-width: 550px) {
        .popp {
            font-size: 2.5vw;
        }

    }

   
</style>


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class=" position-relative">
        <div class=" position-relative">
            <img class="img-fluid" src="img/home-bg.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(24, 29, 56, 0.817);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-12 col-lg-10">
                            <h1 class="text-white animated slideInDown" style="font-size: 4.8vw">Greetings To All
                                Aspiring Language
                                Learners From Across The Globe
                            </h1>
                            <p class="text-white  animated slideInLeft mb-4 pb-2 popp">
                                We are delighted to extend a heartfelt welcome to our Language Academy, a melting pot of
                                cultures and languages. Our mission is to provide you with a truly immersive and
                                enriching experience as you embark on a journey of language discovery. With an array of
                                ten captivating language courses to choose from, including Spoken English, IELTS,
                                German, French, Chinese, Russian, Portuguese, Korean, Arabic, and Pashto, you will find
                                the perfect opportunity to expand your horizons and embrace the world's
                                linguistic tapestry.
                            </p>
                            <a href="/courses" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Courses</a>
                            <a href="/contact" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Carousel End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class=" bg-white text-center text-primary px-3">Enrol Now and Discover the Wonders of Languages
                        !</h1>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Service Start -->

<div class="container-xxl py-3">
    <div class="container">
        <div class="row g-4 justify-content-center align-items-center ">
            <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="home-item text-left pt-3">
                    <div class="p-4">
                        <p class="wow fadeInUp" data-wow-delay="0.1s" style="font-size: 20px;"><span
                                class="checkmark">✔</span>Dedicated and Experienced Instructors</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="font-size: 20px;"><span
                                class="checkmark">✔</span>Interactive Learning</p>
                        <p class="wow fadeInUp" data-wow-delay="0.3s" style="font-size: 20px;"><span
                                class="checkmark">✔</span>Flexible Schedules</p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size: 20px;"><span
                                class="checkmark">✔</span>Cultural Exchange</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s" style="font-size: 20px;"><span
                                class="checkmark">✔</span>Global Opportunities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service End -->



<div class="container-xxl py-5" style="background-color: #06BBCC; margin-top: 10%;">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-light px-3">Join the Fun</h6>
            <h1 class="mb-5" style="color: white;">Explore Our Special Offers</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-5">
                <img onclick="toggleFullscreen(this)" class="fadeInUp" src="img/images/home-side.jpg" alt="image"
                    style="width: 100%; height: auto; border: 5px solid white;" title="Click to zoom"> <!-- Image on the left -->
            </div>
            <div class="col-lg-6 col-md-7">
                <video class="fadeInUp" controls width="100%" height="auto" style="border: 5px solid white;">
                    <source src="img/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>



<style>
    .uniform-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
</style>



<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.2s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Our Popular Courses</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/arab.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/china.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/france.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/germ.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/ielts.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/germ-a2.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/korea.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/pashto.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/portu.jpg" alt="Courses Image">
            </div>
            <div class="testimonial-item">
                <img class="uniform-image" src="img/images/spoken.jpg" alt="Courses Image">
            </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5 category">
    <div class="container col-lg-10 col-md-10">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Summer Courses</h6>
            <h1 class="mb-5">Our Summer Language Intensives</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative d-block overflow-hidden" >
                            <img class="img-fluid" src="img/images/summer2.jpg" alt="">
                           
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative d-block overflow-hidden" >
                            <img onclick="toggleFullscreen(this)" class="img-fluid" src="img/images/spanish-course.jpg" alt="" title="Click to zoom">
                          
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <div class="position-relative d-block overflow-hidden">
                            <img onclick="toggleFullscreen(this)" class="img-fluid" src="img/images/summer3.jpg" alt="" title="Click to zoom">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <div class="position-relative d-block h-100 overflow-hidden">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/images/summer4.jpg" alt="" style="object-fit: fixed;">
                  
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class=" bg-white text-center text-primary px-3">Follow Us on Social Media</h1>

                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .contact-box {
        background-color: #00c7d7;
        padding: 15px 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        transition: transform 0.2s;
    }

    .contact-box:hover {
        transform: scale(1.05);
    }

    .contact-box .icon {
        font-size: 24px;
        color: white;
        margin-right: 15px;
    }

    .contact-box a {
        color: white;
        font-size: 18px;
        text-decoration: none;
    }

    .contact-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .contact-item {
        flex: 1 1 calc(50% - 10px);
        /* Two items per row */
        display: flex;
        align-items: center;
    }
</style>

<div class="container-xxl py-2">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">

                <p class="mb-0" style="font-size: 20px">
                    Follow us on social media for the latest updates, language tips, and more!

                </p>

            </div>
            <div class="container mt-2 wow fadeInUp" data-wow-delay="0.5s">
                <div class="contact-row mt-4">
                    <!-- Phone Box -->
                    <div class="contact-item contact-box">
                        <i class="fab fa-facebook icon"></i>

                        <a href="https://www.facebook.com/thelanguageacademy" target="_blank">thelanguagesacademy</a>

                    </div>

                    <div class="contact-item contact-box">
                        <i class="fab fa-instagram icon"></i>
                        <a href="https://www.instagram.com/thelanguagesacademy"
                            target="_blank">thelanguagesacademy</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class=" bg-white text-center text-primary px-3">Enroll Today and Embrace a Multilingual Future
                        !
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    function toggleFullscreen(imgElement) {
        if (!document.fullscreenElement) {
            if (imgElement.requestFullscreen) {
                imgElement.requestFullscreen();
            } else if (imgElement.webkitRequestFullscreen) {
                /* Safari */
                imgElement.webkitRequestFullscreen();
            } else if (imgElement.msRequestFullscreen) {
                /* IE11 */
                imgElement.msRequestFullscreen();
            }
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                /* Safari */
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                /* IE11 */
                document.msExitFullscreen();
            }
        }
    }
</script>



@include('partials.footer')
