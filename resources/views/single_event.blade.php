@extends('layout.sitelayout')
@section('page-title') LABS - News and Events @endsection
@section('news_active') active @endsection
@section('page-content')

    <!-- Start page content -->
    <section class="events-details-area ptb-90">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="events-details-right-sidebar">
                            <div class="events-details-img1">

                                <img alt="" src="{!! asset('assets/images/events/'.$event->picture) !!}" >
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="about-lectures">
                            <h3 style="margin-top:20px;">{!! $event->title !!}</h3>
                            <p>{!! $event->description !!}</p>
                        </div>
                        <div class="events-details-all">
                            <div class="events-details-time">
                                <div class="time-icon">
                                    <i class="icofont icofont-clock-time"></i>
                                </div>
                                <div class="time-text">
                                    <span>Event Date</span>
                                    <p class="time-mrg">{!! $event->date !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End page content -->
@endsection