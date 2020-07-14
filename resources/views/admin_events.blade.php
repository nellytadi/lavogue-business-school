@extends('layout.sitelayout')
@section('page-title') LABS - Admin events @endsection
@section('page-content')
    <!-- Start page content -->
    <section class="news-page-area ptb-110">
        <div class="container">
            <div class="col-md-12">
                <div class="section-title text-center mb-30">
                    <button class="btn btn-primary" id="event_btn">Add new event</button>
                </div>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{!! Session::get('success') !!}</strong>
                </div>
            @endif
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
                                    <div class="blog-meta for-news">
                                        <span class="published3">
                                            <a href="{!! route('delete_event',$event->id) !!}">
                                                <i class="icofont icofont-trash"></i> Delete
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-text gray-bg">
                                <h3><a href="#">{{$event->title}}</a></h3>
                                <p>{{$event->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End page content -->

    <div class="modal fade draggable-modal" id="draggable1" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title text-center">Create event</h4>
                </div>

                <form action="{!! action('NavigationController@submitEvent') !!}" method="post" enctype="multipart/form-data">
                    <input type="text" hidden="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="modal-body text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Event title</label>
                                <input type="text" name="title" class="form-control">
                                <label>Event description</label>
                                <textarea name="description" class="form-control" required="required">

                                                        </textarea>
                                <label>Event Date</label>
                                <input type="date" name="date" class="form-control">
                                <br/>
                                <label>Event picture</label>
                                <input type="file" name="picture" class="form-control">
                                <br/>
                                <input type="submit" class="btn btn-success" value="Submit">

                                <button type="button" style="margin-top:20px;" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


@endsection
@section('page-script')
    <script>
        $('#event_btn').click(function(){
            $('#draggable1').modal();
        })


    </script>
@endsection