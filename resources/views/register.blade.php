@extends('layout.sitelayout')
@section('page-title') LABS - Register Course @endsection
@section('register_active') active @endsection
@section('page-content')

    <!-- Start page content -->
    <div class="countdown-area bg-1 ptb-110 bg-opacity bg-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                    <div class="countdown-all">
                        <h3>LABS Registration is on going </h3>
                        <h1>Register Now</h1>
                        {{--<div class="timer">--}}
                            {{--<div data-countdown="2019/01/01"></div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="register-from">
                        <h3>Fill The Register Form</h3>
                        <p>Please ensure you fill all the forms correctly. We will contact you as soon as your registration is successful</p>
                        @if(Session::has('error'))
                            <div class="alert alert-danger text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>{!! Session::get('error') !!}</strong>
                            </div>
                        @endif
                        @if(Session::has('errors'))
                            <div class="alert alert-danger text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>{!! $errors->first()!!}</strong>
                            </div>
                        @endif
                        @if(Session::has('reg_success'))
                            <div class="alert alert-success text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>{!! Session::get('reg_success') !!}</strong>
                            </div>
                        @endif
                        <form class="ordering" method="post" action="{!! action('NavigationController@submitReg') !!}">
                            <input type="text" name="_token" value="{!! csrf_token() !!}" hidden>
                            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                <label class="pull-left">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ Request::old('name') }}" required class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                <label class="pull-left">Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ Request::old('email') }}" required class="form-control" placeholder="example@domain.com">
                            </div>
                            <div class="form-group {!! $errors->has('phone_number') ? 'has-error' : '' !!}">
                                <label class="pull-left">Phone Number <span class="text-danger">*</span></label>
                                <input type="number" name="phone_number" value="{{ Request::old('phone_number') }}" required class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group {!! $errors->has('gender') ? 'has-error' : '' !!}">
                                <label class="pull-left">Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-control">
                                    <option selected disabled>----Select gender-----</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group {!! $errors->has('date_of_birth') ? 'has-error' : '' !!}">
                                <label class="pull-left">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" name="date_of_birth" value="{{ Request::old('date_of_birth') }}" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group {!! $errors->has('marital_status') ? 'has-error' : '' !!}">
                                <label class="pull-left">Marital Status<span class="text-danger">*</span></label>
                                <select name="marital_status" class="form-control">
                                    <option selected disabled>----Select status-----</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="form-group {!! $errors->has('school') ? 'has-error' : '' !!}">
                                <label class="pull-left">School Attended <span class="text-danger">*</span></label>
                                <input type="text" name="school" value="{{ Request::old('school') }}" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group {!! $errors->has('course_of_study') ? 'has-error' : '' !!}">
                                <label class="pull-left">Course of Study <span class="text-danger">*</span></label>
                                <input type="text" name="course_of_study" value="{{ Request::old('course_of_study') }}" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group {!! $errors->has('graduation_year') ? 'has-error' : '' !!}">
                                <label class="pull-left">Graduation Year <span class="text-danger">*</span></label>
                                <input type="number" name="graduation_year" value="{{ Request::old('graduation_year') }}" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group {!! $errors->has('course') ? 'has-error' : '' !!}">
                                <label class="pull-left">Course <span class="text-danger">*</span></label>
                                <select name="course" class="form-control" required>
                                    <option selected disabled>----Select course-----</option>
                                    <option value="Certificate in Entrepreneurship Studies">Certificate in Entrepreneurship Studies</option>
                                    <option value="PGD Entrepreneurship development">PGD Entrepreneurship development</option>
                                    <option value="Diploma in Entrepreneurship development">Diploma in Entrepreneurship development</option>
                                    <option value="Advanced Diploma in Entrepreneurship development">Advanced Diploma in Entrepreneurship development</option>
                                    <option value="Diploma in Accountancy">Diploma in Accountancy</option>
                                    <option value="Certificate in Digital Marketing">Certificate in Digital Marketing</option>
                                    <option value="Advance Diploma in Digital Marketing">Advance Diploma in Digital Marketing</option>
                                    <option value="Certificate in Website Design and Development">Certificate in Website Design and Development</option>
                                    <option value="Certificate in computer programming">Certificate in computer programming</option>
                                    <option value="Certificate in Database Development">Certificate in Database Development</option>
                                    <option value="Certificate in computer animation">Certificate in computer animation</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control" value="Submit">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
