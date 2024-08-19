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

    .slick-carousel img {
        max-width: 100%;
        /* Ensures the image scales within its container */
        max-height: 350px;
        /* Sets a maximum height */
        margin: 0 auto;
        /* Centers the image horizontally */
        display: block;
        /* Ensures images are block level to handle margins correctly */
    }
</style>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 testimonial-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Our Students’ Reviews</h1>

            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/review.png" alt=""
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="mb-4">Thrilled and Transformed: Hear Our Students' Feedback! 🌟</h2>
                <p class="mb-4">
                    Our students' feedbacks are the heartbeat of The Language Academy. From beginners taking their first
                    steps to fluent speakers crossing cultural divides, our diverse community has flourished through the
                    power of language. But don't just take our word for it – hear from those who have embarked on this
                    transformative journey.
                </p>
                <p>
                    Through their voices, you'll discover the profound impact of our courses, the dedication of our
                    instructors, and the lasting friendships formed. These testimonials reflect the heartwarming moments
                    of success, growth, and confidence that our students experience every day. Join us in celebrating
                    their accomplishments and become a part of our vibrant language-learning family. Your journey starts
                    here!

                </p>


            </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.2s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="mb-5">Our Students Say!</h1>
        </div>
        <div class="slick-carousel">
            <!-- Same testimonial items -->
            <div><img src="img/r1.jpg" alt="Review Image"></div>
            <div><img src="img/r2.jpg" alt="Review Image"></div>
            <div><img src="img/r3.jpg" alt="Review Image"></div>
            <div><img src="img/r4.jpg" alt="Review Image"></div>
            <div><img src="img/r5.jpg" alt="Review Image"></div>
            <div><img src="img/r6.jpg" alt="Review Image"></div>
            <div><img src="img/r7.jpg" alt="Review Image"></div>
            <div><img src="img/r8.jpg" alt="Review Image"></div>
        </div>
    </div>
</div>

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.2s">
    <div class="container">
        <div class="slick-carousel">
            <!-- Same testimonial items -->
            <div><img src="img/r9.jpg" alt="Review Image"></div>
            <div><img src="img/r10.jpg" alt="Review Image"></div>
            <div><img src="img/r11.jpg" alt="Review Image"></div>
            <div><img src="img/r12.jpg" alt="Review Image"></div>
            <div><img src="img/r13.jpg" alt="Review Image"></div>
            <div><img src="img/r14.jpg" alt="Review Image"></div>
            <div><img src="img/r15.jpg" alt="Review Image"></div>
            <div><img src="img/r16.jpg" alt="Review Image"></div>
        </div>
    </div>
</div>



<style>
    .contact-box {
        background-color: #00c7d7;
        /* Match the color of the provided button */
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

    @media (max-width: 450px) {
        #maill {
            font-size: 3vw;
        }

    }
</style>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p>
                <h3>Dive into More Reviews</h3>
                </p>
            </div>
            <div class="container mt-2 wow fadeInUp" data-wow-delay="0.5s">
                <div class="contact-row mt-4">
                    <!-- Phone Box -->
                    <div class="contact-item contact-box">
                        <i class="fab fa-facebook icon"></i>

                        <a href="https://www.facebook.com/thelanguageacademy/reviews" target="_blank">Click to See
                            More
                            Reviews</a>
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
                <p style="font-size: 20px">Join us today, and let your story become a cherished part of our
                    ever-growing
                    tapestry of success. </p>
            </div>
        </div>
    </div>
</div>




<!-- Footer Start -->
@include('partials.footer')
