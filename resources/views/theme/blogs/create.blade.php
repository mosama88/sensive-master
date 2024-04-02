@extends('layouts.front.master')
@section('title-page', 'Create Blogs')
@section('content')
@section('hero-description', 'Create Blogs')
@section('hero-link')
    <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Blogs</li>
        </ol>
    </nav>
@endsection

{{--  --}}

<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('success') != null)
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" class="form-contact contact_form" action="{{ route('blogs.store') }}"
                    id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf

                    {{-- Name Input --}}
                    <div class="form-group">
                        <input class="form-control border" name="name" id="name" value="{{ old('name') }}"
                            type="text" placeholder="Enter your name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    {{--  Image Input --}}
                    <div class="form-group">
                        <input class="form-control border" name="image" id="image" type="file">
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                    {{-- Category Input --}}
                    <div class="form-group">
                        <select class="form-control border" name="category_id" id="">
                            <option value="" disabled selected>Select From Here</option>
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>
                    {{-- Description Input --}}
                    <div class="form-group">
                        <textarea class="w-100" name="description" placeholder="Enter description" rows="4  ">
                                {{ old('description') }}
                </textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    {{-- User Input --}}
                    {{-- @if (count($users) > 0)
                            <div class="form-group">
                                <select class="form-control border" name="user_id" id="">
                                    <option value="" disabled selected>Select From Here</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        @endif
                    </div> --}}
            </div>

            <div class="form-group text-center text-md-right mt-3">
                <input class="button button-active button-contactForm" type="submit" value="Submit">
            </div>


            </form>
        </div>
</section>
<!-- ================ contact section end ================= -->

@endsection
