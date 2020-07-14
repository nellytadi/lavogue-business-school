@extends('layout.sitelayout')
@section('page-title') LABS - About Us @endsection
@section('about_active') active @endsection
<style>
    .section-title p {
        margin-top: 25px;
    }
</style>
@section('page-content')

    <!-- End of header area -->
    <section class="breadcrumbs-area bg-about ptb-110 bg-opacity bg-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumbs">
                        <h2 class="page-title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start page content -->
    <section class="about-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="about-text">
                        <h2 style="padding-bottom: 50px;">Welcome To Lavogue Business School (LABS)</h2>
                        <p>Lavogue Business School(LBS) offers academic programmes, executive programmes, short courses and customised courses specifically for company needs, as well as open-enrolment courses in Management Education. The school's programmes have been ranked among the best of business schools in Africa, as it strives towards improving the practice of management in the continent. The business school’s efforts have been recognised by several world-class accreditation and ranking bodies. Besides the quality bar set at world-standards, LBS programmes also stand out because of the emphasis on professional ethics and service to the community. </p>
                        <p class="about-text-top">Education at LBS is comprehensive, drawing on the experiences of a multinational faculty and participants. Learning is participants-centred with the use of the case study method as well as the group work approach. School Activities are held in the school's multipurpose facility. These attest to the expert teaching, the relevance of the programmes and the overall benefits derived from attending.</p>

                    </div>
                </div>
                {{--<div class="col-md-6 mb-60 mrg-btm-about col-sm-6">--}}
                    {{--<div class="book-img">--}}
                        {{--<img alt="" src="{!! asset('assets/images/vogue.jpg') !!}" >--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>

            <div class="col-md-12 mb-60 mrg-btm-about col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center mb-60">
                            <h1 class="uppercase">Vision</h1>
                            <div class="separator my mtb-15">
                                <i class="icofont icofont-hat-alt"></i>
                            </div>
                            <p>To be the leading business school in entrepreneurial mentorship and  financial training in our sphere of influence</p>

                        </div>
                   </div>
                      <div class="col-md-12">
                        <div class="section-title text-center mb-60">
                            <h1 class="uppercase">Mission</h1>
                            <div class="separator my mtb-15">
                                <i class="icofont icofont-hat-alt"></i>
                            </div>

                            <p>To provide continuous entrepreneurial mentorship and training to would-be entrepreneurs and business owners.</p>


                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-title text-center mb-60">
                            <h1 class="uppercase">Core Values</h1>
                            <div class="separator my mtb-15">
                                <i class="icofont icofont-hat-alt"></i>
                            </div>
                            <p><ul>
                                <li>Integrity</li>
                                <li>Friendliness </li>
                                <li>Creativity</li>
                                <li>Resourcefulness</li>
                                <li>Timeliness</li>
                                <li>Excellence</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                </div>

                </div>
            </div>
        </div>
    </section>
    <div class="counter-area bg-2 bg-opacity bg-relative ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 text-center">
                    <div class="counter-bottom2">
                        <div class="counter-img">
                            <img src="images/icons/1.png" alt="" >
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Teachers</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>34</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3  text-center">
                    <div class="counter-bottom2 mrg-xs">
                        <div class="counter-img">
                            <img src="images/icons/2.png" alt="" >
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Students</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>3554</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3  text-center">
                    <div class="counter-bottom2 mrg-xs">
                        <div class="counter-img">
                            <img src="images/icons/3.png" alt="" >
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Research</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>354</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3  text-center">
                    <div class="counter-bottom2 mrg-xs">
                        <div class="counter-img">
                            <img src="images/icons/4.png" alt="" >
                        </div>
                        <div class="counter-all">
                            <div class="counter-next2">
                                <h2>Awards</h2>
                            </div>
                            <div class="counter cnt-two">
                                <h1>44</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lecturers-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-60">
                        <h1 class="uppercase">The team</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                        <div class="separator my mtb-15">
                            <i class="icofont icofont-hat-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-lecturers">
                        <div class="lecturers-img">
                            <a href="#"><img alt="" src="{{asset('assets/images/lecturers/julie.jpg')}}"></a>
                            <div class="img-title">
                                <h3>Mrs. Julie Onovwiona</h3>
                                <p> Founder </p>
                            </div>
                        </div>
                        <div class="lecturers-details">
                            <h3>Mrs. Julie Onovwiona</h3>
                            <p>Founder</p>
                            <div class="last-about-details">
                                <ul>
                                    {{--<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>--}}
                                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                </ul>
                            </div>
                            <p>Is a coach , a tested entrepreneur and a mentor . A top performance intelligence expert,Business trainer, wealth attitude modeling professional ,a management consultant ,an Educationist per excellence and the proprietress of La - vogue International Schools. An expert when it comes to managing several businesses and making money at the same time</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-lecturers mrg-xs4">
                        <div class="lecturers-img">
                            <a href="#"><img alt="" src="images/banner/3.jpg"></a>
                            <div class="img-title">
                                <h3>John Doe</h3>
                                <p> Lecturers</p>
                            </div>
                        </div>
                        <div class="lecturers-details">
                            <h3>Jane Doe</h3>
                            <p> Lecturers</p>
                            <div class="last-about-details">
                                <ul>
                                    <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
                                </ul>
                            </div>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseru mollit ank id est laborum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-lecturers mrg-sm mrg-xs4">
                        <div class="lecturers-img">
                            <a href="#"><img alt="" src="images/banner/4.jpg"></a>
                            <div class="img-title">
                                <h3>John Doe</h3>
                                <p> Lecturers</p>
                            </div>
                        </div>
                        <div class="lecturers-details">
                            <h3>Jane Doe</h3>
                            <p> Lecturers</p>
                            <div class="last-about-details">
                                <ul>
                                    <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
                                </ul>
                            </div>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseru mollit ank id est laborum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-lecturers mrg-sm mrg-xs4">
                        <div class="lecturers-img">
                            <a href="#"><img alt="" src="images/banner/5.jpg"></a>
                            <div class="img-title">
                                <h3>Jane Doe</h3>
                                <p> Lecturers</p>
                            </div>
                        </div>
                        <div class="lecturers-details">
                            <h3>Jane Doe</h3>
                            <p> Lecturers</p>
                            <div class="last-about-details">
                                <ul>
                                    <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-dribbble"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
                                </ul>
                            </div>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseru mollit ank id est laborum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
