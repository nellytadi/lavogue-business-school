@extends('layout.sitelayout')
@section('page-title') LABS - News and Events @endsection
@section('news_active') active @endsection
@section('page-content')
    <section class="breadcrumbs-area bg-event ptb-110 bg-opacity bg-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumbs">
                        <h2 class="page-title">News and Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start page content -->
    <section class="news-page-area ptb-110">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-4 col-sm-6">
                        <div class="news-are">
                            <div class="news-img">
                                <img style="height: 300px;" src="{!! asset('assets/images/events/'.$event->picture) !!}" alt="" >
                                <div class="news-date navy-bg">
                                    <div class="blog-meta-2">
                                        <span class="published3">
                                            <i class="icofont icofont-ui-calendar"></i>
                                            {{$event->date}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-text gray-bg">
                                <h3><a href="#">{{$event->title}}</a></h3>
                                <p>{{str_limit($event->description,40)}} </p>
                                <a class="button extra-small" href="{!! route('view_event',$event->id) !!}">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End page content -->

@endsection