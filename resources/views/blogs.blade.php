@extends("layouts.master")

@section("head")
    <link href="css/blogs.css" rel="stylesheet" />
@endsection

@section("title", "Blogs! - ".config("constants.appTitle"))

@section("content")


    @isset($single)
        @php

        @endphp
        <div class="blog-content">

        </div>
    @else
        <div class="blog-entries">
            @foreach($entries as $entry)
                <x-blogentry :entry="$entry"></x-blogentry>
            @endforeach
        </div>
    @endisset

@endsection
