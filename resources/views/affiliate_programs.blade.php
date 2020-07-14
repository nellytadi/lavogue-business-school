@extends('layout.sitelayout')
@section('page-title') LABS - Affiliate Programs @endsection
@section('affiliate_active') active @endsection
@section('page-content')
    <section class="breadcrumbs-area bg-affiliate ptb-110 bg-opacity bg-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumbs">
                        <h2 class="page-title">Affiliate Programs</h2>
                                <ul>
                                    <li>
                                        <a class="active" href="{{route('home')}}">Home</a>
                                    </li>
                                    <li>Affiliate Programs</li>
                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start page content -->
    <section class="service-area gray-bg ptb-50">
        <!-- Demo Section    -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-all white-bg">

                        <h2 class="text-center">Our Affiliate Programs</h2>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-gift"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>ABK</h3>
                                        <ul>
                                            <li>- Accounts and book keeping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left mrg-xs">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-gift"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>RENT</h3>
                                        <ul>
                                            <li>- Risk taking behaviour</li>
                                            <li>- Entrepreneurship</li>
                                            <li>- Time management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left service-mrg mrg-xs">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-gift"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>IBES</h3>
                                        <ul>
                                            <li> - Implementation of business ideas and business plan preparation</li>
                                            <li> - Exploring opportunities</li>
                                            <li> - Startup strategy and small business startup</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-left service-mrg mrg-xs">
                                    <div class="offer-icon">
                                        <i class="icofont icofont-gift"></i>
                                    </div>
                                    <div class="offer-text">
                                        <h3>CRAMS</h3>
                                        <ul>
                                            <li>- Customer relationship management</li>
                                            <li>- Exploring opportunities</li>
                                            <li>- Analysis of market</li>
                                        </ul>
                                    </div>
                                </div>
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

@endsection

