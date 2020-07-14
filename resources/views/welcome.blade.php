@extends('layout.sitelayout')
@section('page-title') Lavogue Business School @endsection
@section('home_active') active @endsection

@section('page-content')
    <div class="slider-area">
        <div class="slider-active">
            <div class="slider-all">
                <img src="{!! asset('assets/images/slider/slider2.jpg') !!}" alt="">
                <div class="slider-text-wrapper">
                    <div class="table">
                        <div class="table-cell">
                            <div class="slider-text animated">
                                <h1>Degree Certification</h1>
                                <p>Are you thinking of bagging that extra degree with convenience and ease?
                                    <br>  Think no further with LABS. </p>
                                <a class="button extra-small mb-20" href="{!! route('register') !!}">
                                    <span>Apply Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-all">
                <img src="{!! asset('assets/images/slider/slider3.jpg') !!}" alt="">
                <div class="slider-text-wrapper">
                    <div class="table">
                        <div class="table-cell">
                            <div class="slider-text animated">
                                <h1>Admission For Everyone</h1>
                                <p>Seeking admission abroad for undergrad and postgrad studies and you need help? <br> Help in English proficiency tests (IELTS, PTE, TOEFL), SAT, ACT, GRE, GMAT? <br> Do you also seek counselling and advice on getting you to your chosen destination?  <br> We’ve get you there at LABS. </p>
                                <a class="button extra-small mb-20" href="{!! route('register') !!}">
                                    <span>Apply Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-all">
                <img src="{!! asset('assets/images/slider/slider1.jpg') !!}" alt="">
                <div class="slider-text-wrapper">
                    <div class="table">
                        <div class="table-cell">
                            <div class="slider-text animated">
                                <h1>Become an Entrepreneur</h1>
                                <p>Are you thinking an entrepreneur seeking to start-up or improve your business in no time and you’re lost in thoughts? <br> Think no further, we’ve got you covered at LABS. </p>
                                <a class="button extra-small mb-20" href="{!! route('register') !!}">
                                    <span>Apply Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of slider area -->
    <style>
        .blog-details p {
            padding-top: 20px;
        }
    </style>
    <section class="banner-blog-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-60">
                        <h1 class="uppercase">Programs</h1>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item"> <div class="blog-all mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#"> Certificate in Entrepreneurship Studies</a></h3>
                            <p>Run a certificate program in entrepreneurship studies</p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item"><div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">PGD Entrepreneurship development</a></h3>
                            <p>Run a post graduate program in Entrepreneurship development </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Diploma in Entrepreneurship development</a></h3>
                            <p>Run a diploma course in entrepreneurship development </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Advanced Diploma in Entrepreneurship development</a></h3>
                            <p>Become an expert in entrepreneurship development </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Diploma in Accountancy</a></h3>
                            <p>Run a diploma course in diploma in accountancy </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div> <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Certificate in Digital Marketing</a></h3>
                            <p>Run a certificate course in digital marketing </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div> <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Advance Diploma in Digital Marketing</a></h3>
                            <p>Learn advanced digital marketing from our diploma program. </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div> <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Certificate in Website Design and Development</a></h3>
                            <p>Run a certificate program in website design and development. </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div> <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Certificate in computer programming</a></h3>
                            <p>LoreRun a certificate course in computer programming</p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div> <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Certificate in computer networking</a></h3>
                            <p>Run a certificate program in computer networking. </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Certificate in computer engineering</a></h3>
                            <p>Run a certificate program in computer engineering. </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Certificate in Database Development</a></h3>
                            <p>Learn database development and management.</p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>

                </div> <div class="item">
                    <div class="blog-all mrg-sm mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/blog/books.jpg') !!}" alt="" ></a>
                        </div>
                        <div class="blog-details">
                            <h3><a href="#">Certificate in computer animation</a></h3>
                            <p>Run a certificate program in computer animation. </p>
                            <a class="button extra-small" href="#">
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End of slider area -->
    <section class="banner-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30">
                        <h1 class="uppercase">Partnership</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <div class="blog-all mrg-xs">
                        <div class="blog-img">
                            <a href="#"><img src="{!! asset('assets/images/ph.jpeg') !!}" alt="" ></a>
                        </div>
                        <div class="text-center">
                            <h4><a href="#">University of Port harcourt</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start page content -->
    <section class="service-area gray-bg ptb-110">
        <!-- Demo Section    -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-all white-bg">

                            <h2>LABS</h2>

                        <p>LABS is education, evolved; with online and live curricula and events that transform learning from an institutionalized, linear, means to an end, to a complete and conscious lifelong adventure that has no end. And we do it all by re-igniting the innate curiosity that lives in us all.</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-support"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>Entrepreneurship</h3>
                                        <p>We focus on harnessing entrepreneurial skills for the possibility of creating sustainable new ventures.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left mrg-xs">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-gift"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>Education for All</h3>
                                        <p>A unique way to obtain high quality, globally recognised qualifications through internet and financial engineering.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left service-mrg mrg-xs">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-world"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>Globally focused</h3>
                                        <p>Study in some of the world’s most influential economies, including India, South Africa and Nigeria.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left service-mrg mrg-xs">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-football-american"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>Spiritual Intelligence</h3>
                                        <p>We approach education holistically, intellectually, emotionally and spiritually.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area pt-50">
        <div class="section-title text-center mb-30">
            <h1 class="uppercase">Google Maps</h1>
        </div>
        <div class="container mb-4">
            <iframe src="https://maps.google.com/maps?q=lavogue%20international%20school%2C%20Kurudu%2C%20Abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </section>
    <!-- End page content -->
@endsection

@section('page-script')
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                responsiveClass:true,
                margin:20,

                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                }
            });
        });
    </script>
@endsection
