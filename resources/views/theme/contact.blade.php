@extends('layouts.front.master')
@section('title-page', 'Contact')
@section('content')
@section('contact-active', 'active')
@section('hero-description', 'Contact Us')
@section('hero-link')
    <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
@endsection

<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>California United States</h3>
                        <p>Santa monica bullevard</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                    <div class="media-body">
                        <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                @if (session('success') != null)
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" class="form-contact contact_form"
                    action="contact_process.php" method="POST" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" value="{{ old('name') }}"
                                    type="text" placeholder="Enter your name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" value="{{ old('email') }}" id="email"
                                    type="email" placeholder="Enter email address">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subject" value="{{ old('subject') }}" id="subject"
                                    type="text" placeholder="Enter Subject">
                                @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5"
                                    placeholder="Enter Message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <button type="submit" class="button button--active button-contactForm">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
@endsection
