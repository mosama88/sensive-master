@extends('layouts.front.master')
@section('title-page', 'Category')
@section('content')
@section('category-active', 'active')
@section('hero-description', 'Blog details')
@section('hero-link')
    <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
        </ol>
    </nav>
@endsection

<!--================Header Menu Area =================-->

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @if (isset($blogs) && count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <div class="col-md-6">
                                <div class="single-recent-blog-post card-view">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="{{ asset("storage/blogs/$blog->image ") }}"
                                            alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#"><i class="ti-user"></i>{{ $blog->user->name }}</a>
                                            </li>
                                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="{{ route ('blogs.show' , $blog->id)  }}">
                                            <h3>{{ $blog->name }}</h3>
                                        </a>
                                        <p>{{ Str::limit($blog->description, 100) }}</p>
                                        <a class="button" href="{{ route ('blogs.show' , $blog->id)  }}">Read More <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>





                <div class="row">
                    <div class="col-lg-12">
                        @if (isset($blogs) && count($blogs) > 0)
                            {{ $blogs->render('pagination::bootstrap-5') }}
                        @endif

                    </div>
                </div>
            </div>

            <!-- Start Blog Post Siddebar -->
            @include('layouts.front.sidebar')

            <!-- End Blog Post Siddebar -->
        </div>
</section>
<!--================ End Blog Post Area =================-->

@endsection
