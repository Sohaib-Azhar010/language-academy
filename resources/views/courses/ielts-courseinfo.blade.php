@include('partials.header')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 ielts-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">I E L T S</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-2 p-4 home-item" style="font-size: 20px">
                    The International English Language Testing System provides a universal recognition by educational
                    institutions, employers, and immigration authorities across English-speaking countries which makes
                    it an essential credential for academic, professional, and migration purposes. IELTS rigorously
                    evaluates language proficiency in all aspects – listening, reading, writing, and speaking – offering
                    a comprehensive assessment of language skills. The availability of Academic and General Training
                    modules caters to diverse objectives, ensuring relevance for individuals seeking higher education or
                    career opportunities. Preparing for IELTS not only refines English language abilities but also
                    instills confidence for effective communication in various settings. With abundant resources and
                    preparation options, IELTS facilitates successful navigation of international study, work, and
                    immigration pathways.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-card {
        background-color: #F0FBFC;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        border: 1px solid #06bbcc28;

    }

    .custom-card:hover {
        transform: translateY(-5px);
    }

    .card-img-top {
        height: 160px;
        width: 180px;
        border-radius: 10%;
        object-fit: cover;
        margin: 0px auto;
        display: block;
        
    }

    .card-body {
        color: #ffffff;
        background-color: #F0FBFC;
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-size: 18px;
        color: black;
    }

    .image-text-container {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin: 20px auto;

    }

    .image-text-container img {
        width: 100px;
        height: 80px;
        border-radius: 5px;
        border: 1px solid #06bbccb3;

    }

    .level-tag {
        background-color: #06BBCC;
        display: inline-block;
        padding: 5px 10px;
        margin-top: 5px;
        position: relative;
        z-index: 1;
        color: white;
        font-size: 15px;
        border-radius: 5px;
    }

    .card-info a {
        background-color: #06BBCC;
        border: none;
        padding: 15px 80px;
        margin-bottom: 10px;
        color: white;
        border-radius: 10px;
    }
</style>



<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Beginner to Advanced</h1>
        </div>
        <div class="row g-4 justify-content-center">


            <!-- Card 1 -->
            <div class="col-lg-4 col-sm-6">
                <div class="custom-card">
                    <img src="img/ielts-top.jpg" class="card-img-top" alt="Dutch Beginners 1">
                    <div class="card-body">
                        <h5 class="card-title">IELTS Preparation Course</h5>
                        <div class="image-text-container">
                            <div>
                                <img src="img/ielts-small.jpg" alt="">
                            </div>
                            <div>
                                <p class="level-tag">
                                    IELTS
                                </p>
                            </div>


                        </div>

                        <div class="card-info">
                            <a class="btn " href="/IELTS-course">Info and Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partials.footer')
