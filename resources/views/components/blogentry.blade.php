@once
<link href="css/blogentry.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endonce

<div class="blog-entry">

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
