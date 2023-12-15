@extends("layouts.master")

@section("head")
    <link href="/css/blogs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection

@section("title", "Blogs! - ".config("constants.appTitle"))

@section("content")

    @isset($single)
        @php

        @endphp
        <div class="blog-content">
            <h3 class="blog-title">
                <a href="{{ url("blogs/".$entry->id)  }}">{{ $entry->title }}</a>
            </h3>
            <div class="blog-author">
                <i class="fas fa-user"></i>
                <p>
                    {{ $entry->authorname }}
                </p>
            </div>
            <div class="blog-summary">
                <a class="blog-summary-text">
                    {{ $entry->summary }}
                </a>
            </div>
        </div>
    @else
        <div class="blog-entries">
            @foreach($entries as $entry)
                <x-blogentry :entry="$entry"></x-blogentry>
            @endforeach
        </div>
    @endisset

@endsection
