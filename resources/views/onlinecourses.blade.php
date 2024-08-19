@include('partials.header')

<style>
    .slick-prev,
    .slick-next {
        color: white;
        /* Color of the arrows */
        font-size: 24px;
        /* Arrow size */
        width: 40px;
        /* Circle size */
        height: 40px;
        /* Circle size */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 100;
        /* Ensure arrows are above other content */
    }

    .slick-prev:hover,
    .slick-next:hover {
        background: #00c7d7;
        /* Hover background color */
    }

    .slick-carousel .slick-slide {
        padding: 0 15px;
        /* Adds space between slides */
    }
</style>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 online-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Our Online Classes</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                {{-- <h4 class=" bg-white text-center text-primary px-3">Don't Hesitate to Reach Out!</h4> --}}
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class=" bg-white text-center text-primary px-3">Unlock a World of Opportunities Through Language
                        Learning!</h1>

                </div>
                <br>
                <p class="mb-2 wow fadeInUp" style="font-size: 20px" data-wow-delay="0.3s">
                    Are you ready to embark on a journey of linguistic discovery from the comfort of your own home? <br>
                    Look
                    no further! Our cutting-edge academy brings you the world's languages at your fingertips. With 10
                    diverse language courses tailored to your needs, you're just a click away from becoming a global
                    communicator and opening doors to new cultures, friendships, and professional opportunities.
                </p>
            </div>
        </div>
    </div>
</div>



<!-- Carousel Start -->
<div class="container p-5 wow fadeInUp" style="background-color: #06BBCC;" data-wow-delay="0.3s">
    <div class="row wow fadeInRight" data-wow-delay="1s">
        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
            <img onclick="toggleFullscreen(this)" src="img/oc2.jpg" class="img-fluid" alt="Responsive image"
                title="Click too Zoom">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
            <img onclick="toggleFullscreen(this)" src="img/oc5.jpg" class="img-fluid" alt="Responsive image"
                title="Click too Zoom">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
            <img onclick="toggleFullscreen(this)" src="img/oc4.jpg" class="img-fluid"
                alt="Responsive image"title="Click too Zoom">
        </div>
    </div>
</div>


<!-- Carousel End -->

<div class="container-xxl py-2" style="margin-top: 5%">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                {{-- <h4 class=" bg-white text-center text-primary px-3">Don't Hesitate to Reach Out!</h4> --}}
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class=" bg-white text-center text-primary px-3">
                        Why Choose Our Online Language Academy?
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Service Start -->


<div class="container-xxl py-5" style="background-color: #06bbcc4d;">
    <div class="container">
        <div class="row g-4 ">
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-language text-primary mb-4"></i>
                        <h5 class="mb-3">Wide Array of Languages</h5>
                        <p>
                            Immerse yourself in the richness of languages from around the world. Whether you're
                            captivated by the romance of French, the precision of German, the elegance of Chinese, or
                            the charm of Russian, our academy has the perfect courses for you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-chalkboard-teacher text-primary mb-4"></i>
                        <h5 class="mb-3">Expert Instructors</h5>
                        <p>
                            Our team of experienced and passionate instructors are language experts above 15 years of
                            experience. They're committed to guiding you through the learning process, ensuring you gain
                            authentic pronunciation, grammar mastery, and cultural insights.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-desktop text-primary mb-4"></i>
                        <h5 class="mb-3">Flexible Learning</h5>
                        <p>
                            Life can be hectic, but that shouldn't hinder your learning journey. Our online classes
                            offer flexibility that traditional classrooms can't match. Individual Classes are also
                            available for students. Learn at your own pace, on your schedule, and from anywhere in the
                            world.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-users text-primary mb-4"></i>
                        <h5 class="mb-3">Interactive Virtual Environment</h5>
                        <p>
                            Engage with fellow learners in an immersive virtual environment that mimics the dynamics of
                            a real classroom. Participate in group discussions, interactive exercises, and language
                            games that make learning enjoyable and effective.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-book-reader text-primary mb-4"></i>
                        <h5 class="mb-3">Personalized Curriculum</h5>
                        <p>
                            We understand that each learner is unique. Our courses are designed to cater to different
                            learning styles and goals. Whether you're learning for travel, business, or personal
                            enrichment, our curriculum adapts to your needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-globe-asia text-primary mb-4"></i>
                        <h5 class="mb-3">Cultural Enrichment</h5>
                        <p>
                            Language learning goes beyond words. Immerse yourself in the culture, traditions, and
                            customs of the language you're studying. Gain insights that will allow you to connect with
                            native speakers on a deeper level.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-chart-line text-primary mb-4"></i>
                        <h5 class="mb-3">Progress Tracking</h5>
                        <p>
                            Stay motivated by tracking your progress throughout the course. Our intuitive platform lets
                            you see how far you've come, celebrate your achievements, and set new goals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-headset text-primary mb-4"></i>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p>
                            We're here for you every step of the way. Need clarification on a grammar point? Have
                            questions about assignments? Our support team is available around the clock to assist you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-award text-primary mb-4"></i>
                        <h5 class="mb-3">Certification</h5>
                        <p>Upon successful completion of your language course, receive a prestigious
                            certificate that showcases your language proficiency from our Academy. This certificate can
                            enhance your resume and boost your career prospects.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                <div class="classes-item text-center pt-3">
                    <div class="p-4">
                        <i class="fas fa-3x fa-network-wired text-primary mb-4"></i>
                        <h5 class="mb-3">Community and Networking</h5>
                        <p>
                            Join a global community of learners who share your passion for languages. Make friends,
                            practice with language partners, and expand your network with like-minded individuals from
                            around the world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service End -->

<div class="container-xxl py-5 category wow fadeInLeft" style="background-color: #06BBCC;">
    <div class="container col-lg-10 col-md-10">
        <div class="row g-3">
            <div class="col-lg-5 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative d-block overflow-hidden">
                            <img class="img-fluid" src="img/oc7.jpg" alt="">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative d-block overflow-hidden">
                            <img onclick="toggleFullscreen(this)" class="img-fluid" src="img/oc1.jpg" alt=""
                                title="Click to zoom">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <div class="position-relative d-block overflow-hidden">
                            <img onclick="toggleFullscreen(this)" class="img-fluid" src="img/oc3.jpg" alt=""
                                title="Click to zoom">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <div class="position-relative d-block h-100 overflow-hidden">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/oc6.jpg" alt=""
                        style="object-fit: fixed;">

                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center align-items-center ">
            <div class="col-lg-12 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="home-item text-center pt-3">
                    <div class="p-4">
                        <p class="wow fadeInUp" data-wow-delay="0.1s" style="font-size: 18px;">
                            Don't let geographical boundaries limit your potential. Unleash your linguistic prowess with
                            our
                            online language courses. Whether you're a beginner or looking to refine your skills, our
                            academy
                            offers a seamless, interactive, and enriching learning experience. Join us in breaking down
                            language barriers and building bridges of understanding. Your journey to becoming a
                            polyglot starts here!
                        </p>
                    </div>
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
