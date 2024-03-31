@extends('layouts.front.master')
@section('title-page', 'Contact')
@section('content')
@section('hero-description', 'Register')
@section('hero-link')
    <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>
@endsection


<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post"
                    id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control border" name="name" id="name" type="text"
                                    placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input class="form-control border" name="email" id="email" type="email"
                                    placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control border" name="password" id="name" type="password"
                                    placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <input class="form-control border" name="password_confirmation" type="password"
                                    placeholder="Enter your password confirmation">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <button type="submit" class="button button--active button-contactForm">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@endsection
