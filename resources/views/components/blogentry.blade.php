@isset($entry) @else
    @php
        $title = "404";
        $author = "404";
        $summary = "summary 404"
    @endphp
@endisset

@once
<link href="css/blogentry.css" rel="stylesheet" />
@endonce

<div class="blog-entry">

    <h3 class="blog-title">
        <a href="{{ url("blogs/".$entry->id)  }}">{{ $entry->title }}</a>
    </h3>
    <div class="blog-author">
        <p>
            {{ $entry->author }}
        </p>
    </div>
    <div class="blog-summary">
        <a class="blog-summary-text">
            {{ $entry->summary }}
        </a>
    </div>

</div>
