@include('partials.header')



<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 contact-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>

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
                    <h1 class=" bg-white text-center text-primary px-3">Don't Hesitate to Reach Out!</h1>

                </div>
                <p class="mb-2" style="font-size: 20px">Have a question or need assistance? We're here to help! Reach
                    out to our dedicated
                    support team for any inquiries you might have regarding our language courses or academy. Your
                    feedback is invaluable to us, and we're committed to providing you with the best possible
                    experience.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p>
                <h3>ASK US ANYTHING</h3>
                </p>
                <p class="mb-2" style="font-size: 20px">For general inquiries, course information, and assistance, our
                    support team is
                    available 24/7.
                </p>
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

    @media (max-width: 450px) {
        #maill {
            font-size: 3vw;
        }

    }
</style>

<div class="container mt-0 wow fadeInUp" data-wow-delay="0.5s">
    <div class="contact-row">
        <!-- Email Box -->
        <div class="contact-item contact-box">
            <i class="fas fa-envelope icon"></i>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=thelanguageacademy.enquiries@gmail.com"
                target="_blank" id="maill">thelanguageacademy.enquiries@gmail.com</a>
        </div>

    </div>
    <div class="contact-row mt-4">
        <!-- Phone Box -->
        <div class="contact-item contact-box">
            <i class="fas fa-phone-alt icon"></i>
            <a href="tel:++447862872874 ">+447862872874 </a>
        </div>

        <div class="contact-item contact-box">
            <i class="fab fa-whatsapp icon ms-2"></i>
            <a href="https://wa.me/+447862872874 " target="_blank">+447862872874 </a>
        </div>

        <!-- Second Phone Box -->
        <div class="contact-item contact-box">
            <i class="fas fa-phone-alt icon"></i>
            <a href="tel:+923348389629">+923348389629</a>
        </div>

        <div class="contact-item contact-box">
            <i class="fab fa-whatsapp icon ms-2"></i>
            <a href="https://wa.me/+923348389629" target="_blank">+923348389629</a>
        </div>
    </div>
</div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-2" style="font-size: 20px">
                    Feel free to fill out the form below and we'll get back to you within 24 hours.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container"  id="contact-form-section">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('submit.query') }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="first-name" name="first_name" placeholder="First Name" required>
                                <label for="first-name">First Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last Name" required>
                                <label for="last-name">Last Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                <label for="phone">Phone (including country code)</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
                                <label for="age">Age of the student</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email-address" name="email" placeholder="Email Address" required>
                                <label for="email-address">Email Address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                                <label for="country">Country</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-control" id="language-courses" name="language_course" required>
                                    <option value="" selected>Select Language Course</option>
                                    <option value="German Beginners A1">German Beginners A1</option>
                                    <option value="German Intermediate A2">German Intermediate A2</option>
                                    <option value="German Advanced B1">German Advanced B1</option>
                                    <option value="German for Children & Youth FIT 1 & 2">German for Children & Youth FIT 1 & 2</option>
                                    <option value="French Beginners A1">French Beginners A1</option>
                                    <option value="French Intermediate A2">French Intermediate A2</option>
                                    <option value="Russian Beginners A1">Russian Beginners A1</option>
                                    <option value="Russian Intermediate A2">Russian Intermediate A2</option>
                                    <option value="Russian Advanced B1">Russian Advanced B1</option>
                                    <option value="Chinese Beginners HSK 1">Chinese Beginners HSK 1</option>
                                    <option value="Chinese Intermediate HSK 2">Chinese Intermediate HSK 2</option>
                                    <option value="Portuguese Beginners A1">Portuguese Beginners A1</option>
                                    <option value="Portuguese Intermediate A2">Portuguese Intermediate A2</option>
                                    <option value="Spoken English (SEL001)">Spoken English (SEL001)</option>
                                    <option value="Korean Beginners A1">Korean Beginners A1</option>
                                    <option value="IELTS">IELTS</option>
                                    <option value="Arabic Language Course">Arabic Language Course</option>
                                    <option value="Online QURAN Classes">Online QURAN Classes</option>
                                    <option value="Pashto Language Course">Pashto Language Course</option>
                                    <option value="Spanish Language Course">Spanish Language Course</option>
                                    
                                </select>
                                <label for="language-courses">Language Courses</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Leave a message here" style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p>
                <h3>We Value Your Feedback</h3>
                </p>
                <p class="mb-4" style="font-size: 20px">
                    Your opinions matter to us. If you've taken one of our courses or used our platform, we'd love to
                    hear about your experience. Your feedback helps us improve and ensures we're providing the best
                    language learning journey for all our students.

                </p>
                <p class="mb-4" style="font-size: 20px">
                    Thank you for choosing The Language Academy for your language learning needs. We look forward to
                    assisting you on your path to linguistic excellence!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p>
                <h3>Connect With Us</h3>
                </p>
                <p class="mb-0" style="font-size: 20px">
                    Stay connected with us on social media for the latest updates, language tips, and more!

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


@include('partials.footer')
