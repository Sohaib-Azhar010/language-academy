@include('partials.header')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 faculty-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Our Faculty</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-2" style="font-size: 20px">
                    At The Language Academy, we pride ourselves on having a team of dedicated and experienced language
                    instructors who are passionate about guiding you on your language learning journey. Our instructors
                    bring a wealth of knowledge, cultural insights, and teaching expertise to the classroom. Get to know
                    the individuals who will be by your side as you explore the world of languages:
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .team-image {
        width: 100%;
        height: 250px; /* Set a fixed height */
        object-fit: cover; /* Maintain aspect ratio and cover the entire area */
    }
</style>

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
            <h1 class="mb-5">Expert Instructors</h1>
        </div>
        <div class="row g-4">

            @foreach($instructors as $instructor)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <a href="{{ route('faculty.info', $instructor->id) }}">
                            <div class="overflow-hidden">
                                <img class="img-fluid team-image" src="{{ asset('storage/' . $instructor->image_path) }}" alt="{{ $instructor->name }}">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">{{ $instructor->name }}</h5>
                                <small>{{ $instructor->designation }}</small>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-2" style="font-size: 20px">
                    Our instructors are not only language experts but also mentors, guiding you through the intricacies
                    of language learning with enthusiasm and patience. Their commitment to your success and growth is
                    unwavering, ensuring that your journey with us is both educational and enjoyable. Join us and
                    experience firsthand the transformative power of our exceptional faculty. 
                </p>
                <p style="font-size: 20px">
                    Let's embark on this
                    exciting linguistic adventure together!
                </p>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
