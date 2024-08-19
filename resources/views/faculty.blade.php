@include('partials.header')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 member-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{ $instructor->designation }}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item bg-light">
            <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('storage/' . $instructor->image_path) }}"
                    alt="{{ $instructor->name }}">
            </div>
            <div class="text-center p-4">
                <h5 class="mb-0">{{ $instructor->name }}</h5>
                {{-- <small>{{ $instructor->designation }}</small> --}}
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-info animate animated wow fadeInUp" data-wow-delay="0.2s">
                    <p><strong>Teaching Experience:</strong> {{ $instructor->teaching_experience }}</p>
                    <p><strong>Seniority:</strong> {{ $instructor->seniority }}</p>
                    <p><strong>Leadership Role:</strong> {{ $instructor->leadership_role }}</p>
                    <p><strong>Qualifications:</strong> {{ $instructor->qualifications }}</p>
                    <p><strong>Scholarly Recognition:</strong> {{ $instructor->scholarly_recognition }}</p>
                </div>

                <div class="faculty-item text-center pt-3 wow fadeInUp" style="margin-top: 40px" data-wow-delay="0.3s">
                    <div class="p-4">
                        <p>{{ $instructor->honoring_words }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partials.footer')
