<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title> Myanmar Wrestling Federation</title>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body data-spy="scroll" data-target=".navbar">
    <div class="ts-page-wrapper" id="page-top">

        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-hero" class="ts-full-screen ts-separate-bg-element">
            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#141a3a">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">
                        <img src="{{ asset('/img/mwf_logo.png') }}" alt="" class="w-50">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="{{ route('home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link ts-scroll" href="#how-it-works">How It Works</a>
                            <a class="nav-item nav-link ts-scroll" href="{{ route('guest.about_us') }}">About Us</a>
                            <a class="nav-item nav-link ts-scroll" href="#successful-stories">Cases</a>
                            <a class="nav-item nav-link ts-scroll" href="#pricing">Pricing</a>
                            <a class="nav-item nav-link ts-scroll" href="#our-team">Team</a>
                            <a class="nav-item nav-link ts-scroll mr-2" href="#form-contact">Contact</a>
                            <a class="ts-scroll btn btn-primary btn-sm m-1 px-3 ts-width__auto" href="#form-contact">Get
                                a Quote</a>
                        </div>
                        <!--end navbar-nav-->
                    </div>
                    <!--end collapse-->
                </div>
                <!--end container-->
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->

            <div class="container align-self-center align-items-center">
                <div class="row align-items-center">
                    <div class="col-sm-7 col-md-7 d-none d-sm-block">
                        <h1 data-animate="ts-fadeInUp">
                            <h1>{{ __('messages.welcome') }}</h1>
                        </h1>
                        <div data-animate="ts-fadeInUp" data-delay=".1s">
                            <p class="w-75 text-white mb-5 ts-opacity__50">Morbi et nisl a sapien malesuada scelerisque.
                                Suspendisse tempor turpis mattis</p>
                        </div>
                        <a href="#how-it-works" class="btn btn-outline-light btn-lg ts-scroll mr-4"
                            data-animate="ts-fadeInUp" data-delay=".2s">
                            Learn More
                            <i class="fa fa-arrow-right small ml-3 ts-opacity__50"></i>
                        </a>
                    </div>
                    <div class="col-sm-5 offset-lg-1 col-md-4">
                        <form class="ts-form p-4 ts-border-radius__md text-white" data-php-path="assets/php/email.php"
                            data-bg-color="rgba(255,255,255,.2)" data-animate="ts-fadeInUp" data-delay=".2s">
                            <h3>Contact Us</h3>
                            <p class="text-white d-none d-lg-block">Vivamus fermentum magna non faucibus dignissim. Sed
                                a venenatis </p>

                            <div class="form-group">
                                <input type="text" class="form-control" id="hero-name" name="name"
                                    placeholder="Your Name" required>
                            </div>
                            <!--end form-group -->
                            <div class="form-group">
                                <input type="email" class="form-control" id="hero-email" name="email"
                                    placeholder="Your Email" required>
                            </div>
                            <!--end form-group -->
                            <div class="form-group">
                                <input type="test" class="form-control" id="hero-message" name="message"
                                    placeholder="message" required>
                            </div>
                            <!--end form-group -->
                            {{-- <div class="form-group">
                                <select class="custom-select form-control" required>
                                    <option selected>Select Interest</option>
                                    <option value="1">Business Grow</option>
                                    <option value="2">Brand Refresh</option>
                                    <option value="3">Crypto Investments</option>
                                </select>
                            </div> --}}
                            <!--end form-group -->
                            <button type="submit" class="btn btn-primary w-100">Get a Quote</button>
                        </form>
                        <!--end ts-form-->
                    </div>
                </div>
            </div>

            <div class="ts-background" data-bg-color="#001135" data-bg-parallax="scroll" data-bg-parallax-speed="3">
                <div class="ts-video-bg ts-opacity__50 ts-parallax-element bg-cover"
                    style="background: url({{ asset('/img/banner.jpg') }}); background-size: cover"
                    style="background-size: cover">
                    {{-- <iframe
                        src="https://www.youtube.com/embed/0HJdT7aNVgI?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1"
                        allowfullscreen></iframe> --}}
                    {{-- <img src="{{ asset('/img/banner.jpg') }}" class="w-full h-full bg-" alt=""> --}}
                </div>
                <!--end ts-video-->
            </div>
            <!--end ts-background-->

        </header>
        <!--end #hero-->

        @yield('content')
        <footer id="ts-footer">

            {{-- <div class="map ts-height__400px" id="map"></div> --}}

            <section id="contact" class="ts-separate-bg-element" data-bg-image="assets/img/bg-hand-mobile.jpg"
                data-bg-image-opacity=".1" data-bg-color="#12264f">
                <div class="container">
                    <div class="ts-box mb-0 p-5 ts-mt__n-10" data-animate="ts-fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Contact Us</h3>
                                <address>
                                    <figure>
                                        2590 Rocky Road
                                        Philadelphia, PA 19108
                                    </figure>
                                    <br>
                                    <figure>
                                        <div class="font-weight-bold">Email:</div>
                                        <a href="#">office@example.com</a>
                                    </figure>
                                    <figure>
                                        <div class="font-weight-bold">Phone:</div>
                                        +1 215-606-0391
                                    </figure>
                                    <div class="font-weight-bold">Skype:</div>
                                    fin.win
                                </address>
                                <!--end address-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-8">
                                <h3>Contact Form</h3>
                                <form id="form-contact" method="post"
                                    class="clearfix ts-form ts-form-email ts-inputs__transparent"
                                    data-php-path="assets/php/email.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-name">Your Name *</label>
                                                <input type="text" class="form-control" id="form-contact-name"
                                                    name="name" placeholder="Your Name" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-email">Your Email *</label>
                                                <input type="email" class="form-control" id="form-contact-email"
                                                    name="email" placeholder="Your Email" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                    </div>
                                    <!--end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form-contact-message">Your Message *</label>
                                                <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Your Message"
                                                    required></textarea>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-12 -->
                                    </div>
                                    <!--end row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn btn-primary float-right"
                                            id="form-contact-submit">Send a Message</button>
                                    </div>
                                    <!--end form-group -->
                                    <div class="form-contact-status"></div>
                                </form>
                                <!--end form-contact -->
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end ts-box-->
                    <div class="text-center text-white py-4">
                        <small>© 2025 MWF, All Rights Reserved</small>
                    </div>
                </div>
                <!--end container-->
            </section>

        </footer>
        <!--end #footer-->

    </div>
    <!--end page-->

    <script src="{{ asset('assets/js/custom.hero.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isInViewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolla.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validate.bootstrap-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
