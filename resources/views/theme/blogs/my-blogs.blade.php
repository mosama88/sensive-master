@extends('layouts.front.master')
@section('content')
@section('title-page', 'My Blogs')
@section('hero-description', 'My Blogs')
@section('hero-link')
    <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Blogs</li>
        </ol>
    </nav>
@endsection

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">My Blogs</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Blog Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blogs->firstItem() + $loop->index }}</td>
                                <td>
                                    <a class="text-success-emphasis" href="{{ route('blogs.show', ['blog' => $blog]) }}"
                                        target="blank">
                                        {{ Str::limit($blog->name, 30) }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" type="button"
                                        class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="" type="button" class="btn btn-danger">Delete</a>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (isset($blogs) && count($blogs) > 0)
                {{ $blogs->render('pagination::bootstrap-5') }}
            @endif

        </div>
    </div>

</div>




@endsection
