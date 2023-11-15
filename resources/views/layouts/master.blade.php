<?php
use App\Util\Checks;

$navs = ['Home', 'Blogs'];
$loggedInNav = ['Panel', 'Logout'];
$guestNav = ['Login'];
$navs = auth()->check() ? array_merge($navs, $loggedInNav) : array_merge($navs, $guestNav);
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" type="image/x-icon" href="/images/logo.png">

    <title>@yield("title")</title>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <link href="css/master.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />

    <link href="css/responsive.css" rel="stylesheet" />

    @yield("head")
</head>

<body>
<div class="hero_area">

    @section("header")
    <!-- Header should to show immediately. So I should to use show. -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand mr-5" href="{{ url('/blog') }}">
                    <img src="images/logo.png" alt="">
                    <span>
              {{ config("constants.appTitle") }}
            </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            @foreach($navs as $nav)
                                @php
                                    $navLower = strtolower($nav);
                                    $check = Checks::routeCheck($navLower);
                                @endphp
                                <li class="nav-item @if($check) active @endif">
                                    <a class="nav-link" href="{{ route($navLower) }}">{{ $nav }} @if($check) <span class="sr-only">(current)</span> @endif </a>
                                </li>
                            @endforeach
                        </ul>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    @show

    @yield("sliderSection")

</div>

<div class="page-container">
    @yield("content")
</div>

<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        Copyright &copy; 2023 All Rights Reserved By Koply
    </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
