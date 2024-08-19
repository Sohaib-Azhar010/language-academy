@include('partials.header')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 pashto-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">PASHTO</h1>
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
                    Beyond language proficiency, Pashto forges a cultural link to the Pashtun people and their
                    traditions. Proficiency facilitates meaningful communication, making it valuable in careers like
                    translation, journalism, and diplomacy. It aids humanitarian work in Pashto-speaking areas and
                    enriches travel experiences. Learning Pashto also provides insights into related languages and
                    fosters appreciation for Pashto literature and culture. Ultimately, it opens doors to diverse
                    opportunities while fostering cross-cultural understanding.
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
        /* Makes the image circular */
        object-fit: cover;
        /* Ensures the image covers the area */
        margin: 0px auto;
        /* Centers the image horizontally and adds space */
        display: block;
        /* Ensures the image is treated as a block-level element, which respects margin: auto */
        /* overflow: hidden; */
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
            <h1 class="mb-5">Beginner to Intermediate</h1>
        </div>
        <div class="row g-4 justify-content-center">


            <!-- Card 1 -->
            <div class="col-lg-4 col-sm-6">
                <div class="custom-card">
                    <img src="img/pashto-top.jpg" class="card-img-top" alt="Dutch Beginners 1">
                    <div class="card-body">
                        <h5 class="card-title">Pashto Language Course</h5>
                        <div class="image-text-container">
                            <div>
                                <img src="img/pashto-left.jpg" alt="">
                            </div>
                            <div>
                                <p class="level-tag">
                                    Pashto
                                </p>
                            </div>


                        </div>

                        <div class="card-info">
                            <a class="btn " href="/pashto-course">Info and Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partials.footer')
