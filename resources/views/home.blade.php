@extends('layouts.homemaster')

@section("title", "Hos geldiniz! - ".config("constants.appTitle"))

<style>
    .hero_area {
        height: 100vh;
    }

    body {
        display: unset!important;
    }
</style>

@section("sliderSection")
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="detail-box">
                                    <div>
                                        <h1>
                                            Welcome to<br>
                                            <span>Blogium!</span>
                                        </h1>
                                        <p>
                                            I really don't know what can I say in here.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/contact" class="btn-1">
                                                Contact Me
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="detail-box">
                                    <div>
                                        <h1>
                                            Thanos was<br>
                                            <span>RIGHT!</span>
                                        </h1>
                                        <p>
                                            Yes, absolutely the Thanos was right.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Contact With Thanos
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom_carousel-control">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- end slider section -->
@endsection

@section("aboutSection")
    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                            desktop publishing packages and web page editors now use Lorem Ipsum as their
                        </p>
                        <a href="">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="../images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
@endsection

@section("serviceSection")
    <!-- service section -->
    <section class="service_section ">
        <div class="container">
            <div class="heading_container">
                <h2>
                    At Your Service
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="../images/s-1.png" alt="">
                        </div>
                        <h4>
                            Written with Love
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content t,
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box align-items-end align-items-md-start text-right text-md-left">
                        <div class="img-box">
                            <img src="../images/s-2.png" alt="">
                        </div>
                        <h4>
                            Fast Turnaround
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content here', making it look like
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="../images/s-3.png" alt="">
                        </div>
                        <h4>
                            Up to Date
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content here', making it look like now use Lorem Ipsum as
                            their default model text,
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box align-items-end align-items-md-start text-right text-md-left">
                        <div class="img-box">
                            <img src="../images/s-4.png" alt="">
                        </div>
                        <h4>
                            Premium Content
                        </h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                            of
                            letters, as opposed to using 'Content here, content here', making it look like
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service section -->
@endsection

@section("quoteSection")
    <!-- quote section -->
    <section class="quote_section layout_padding">
        <div class="container">
            <div class="box">
                <div class="detail-box">
                    <h3>
                        Get Your Quote Today!
                    </h3>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                    </p>
                </div>
                <div class="btn-box">
                    <a href="">
                        Get A Quote
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end quote section -->
@endsection

@section("contactSection")
    <!-- contact section -->
    <section class="contact_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Let's Get In Touch!
                </h2>
            </div>
        </div>
        <div class="container contact_bg layout_padding2-top">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form ">
                        <form action="">
                            <input type="text" placeholder="Name ">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Message" class="message_input">
                            <button>
                                Send
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="../images/contact-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
@endsection

@section("clientSection")
    <!-- client section -->

    <section class="client_section layout_padding-top">
        <div class="d-flex justify-content-center">
            <div class="heading_container">
                <h2>
                    Testimonial
                </h2>
            </div>
        </div>
        <div class="container layout_padding2">
            <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
                    <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="img-box">
                                    <img src="../images/client.jpg" alt="">
                                </div>
                                <div class="client_name">
                                    <div>
                                        <h3>
                                            Johndue
                                        </h3>
                                        <p>
                                            Farm & CO
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_detail">
                                <div class="client_text">
                                    <blockquote>
                                        <p>
                                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="img-box">
                                    <img src="../images/client.jpg" alt="">
                                </div>
                                <div class="client_name">
                                    <div>
                                        <h3>
                                            Johndue
                                        </h3>
                                        <p>
                                            Farm & CO
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_detail">
                                <div class="client_text">
                                    <blockquote>
                                        <p>
                                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="client_container">
                            <div class="client-id">
                                <div class="img-box">
                                    <img src="../images/client.jpg" alt="">
                                </div>
                                <div class="client_name">
                                    <div>
                                        <h3>
                                            Johndue
                                        </h3>
                                        <p>
                                            Farm & CO
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_detail">
                                <div class="client_text">
                                    <blockquote>
                                        <p>
                                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end client section -->
@endsection

@section("infoSection")
    <!-- info section -->

    <section class="info_section layout_padding">
        <div class="footer_contact">
            <div class="heading_container">
                <h2>
                    Contact Us
                </h2>
            </div>
            <div class="box">
                <a href="" class="img-box">
                    <img src="../images/location.png" alt="" class="img-1">
                    <img src="../images/location-o.png" alt="" class="img-2">
                </a>
                <a href="" class="img-box">
                    <img src="../images/call.png" alt="" class="img-1">
                    <img src="../images/call-o.png" alt="" class="img-2">
                </a>
                <a href="" class="img-box">
                    <img src="../images/envelope.png" alt="" class="img-1">
                    <img src="../images/envelope-o.png" alt="" class="img-2">
                </a>
            </div>
        </div>


    </section>


    <!-- end info section -->
@endsection


