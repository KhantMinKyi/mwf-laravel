<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">
<!-- SEO Meta Description -->
    <meta name="description" content="The Myanmar Wrestling Federation (MWF) was registered with the International Wrestling Federation (FILA) in 2008 and officially recognized in 2010. Our motto: Swift and Clever, Strength of Wrestler.">

    <!-- Keywords -->
    <meta name="keywords" content="Myanmar Wrestling Federation, MWF, FILA, Wrestling Myanmar, Wrestling Federation, Swift and Clever, Strength of Wrestler">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Myanmar Wrestling Federation | Swift and Clever, Strength of Wrestler">
    <meta property="og:description" content="The Myanmar Wrestling Federation (MWF) was registered with the International Wrestling Federation (FILA) in 2008 and officially recognized in 2010. Our motto: Swift and Clever, Strength of Wrestler.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/mwf-logo.png') }}"> <!-- Replace with your logo/image path -->

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Myanmar Wrestling Federation | Swift and Clever, Strength of Wrestler">
    <meta name="twitter:description" content="The Myanmar Wrestling Federation (MWF) was registered with the International Wrestling Federation (FILA) in 2008 and officially recognized in 2010. Our motto: Swift and Clever, Strength of Wrestler.">
    <meta name="twitter:image" content="{{ asset('images/mwf-logo.png') }}"> <!-- Replace with your logo/image path -->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/mwf_logo.png') }}" type="image/png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title> Myanmar Wrestling Federation</title>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body>
    <div class="ts-page-wrapper" id="page-top">

        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-hero" class="ts-full-screen ts-separate-bg-element">
            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#141a3a">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
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
                            <a class="nav-item nav-link  ts-scroll {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">{{ __('layout.home') }}
                                <span class="sr-only">(current)</span></a>
                            {{-- <a class="nav-item nav-link ts-scroll" href="#how-it-works">How It Works</a> --}}
                            <a class="nav-item nav-link ts-scroll {{ request()->routeIs('guest.about_us') ? 'active' : '' }} "
                                href="{{ route('guest.about_us') }}">{{ __('layout.about_us') }} </a>
                            <a class="nav-item nav-link ts-scroll {{ request()->routeIs('guest.news') ? 'active' : '' }} "
                                href="{{ route('guest.news') }}">{{ __('layout.news') }}
                            </a>
                            {{-- <a class="nav-item nav-link ts-scroll" href="#pricing">Pricing</a> --}}
                            <a class="nav-item nav-link ts-scroll {{ request()->routeIs('guest.committee') ? 'active' : '' }}"
                                href="{{ route('guest.committee') }}">{{ __('layout.committee') }} </a>
                            {{-- <a class="nav-item nav-link ts-scroll mr-2"
                                href="#">{{ __('layout.contact_us') }}</a> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('layout.language') }}
                                    @if (session('locale') == 'en')
                                        <img src="{{ asset('/img/english.png') }}" alt="" class="md:w-25"
                                            style="width: 24px;">
                                    @endif
                                    @if (session('locale') == 'mm')
                                        <img src="{{ asset('/img/myanmar.png') }}" alt="" class="md:w-25"
                                            style="width: 24px;">
                                    @endif
                                    @if (!session('locale'))
                                        <img src="{{ asset('/img/english.png') }}" alt="" class="md:w-25"
                                            style="width: 24px;">
                                    @endif
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('locale.set', 'en') }}"> <img
                                            src="{{ asset('/img/english.png') }}" alt="" class="md:w-25"
                                            style="width: 24px;"><span
                                            class="pl-2">{{ __('layout.english') }}</span></a>
                                    <a class="dropdown-item" href="{{ route('locale.set', 'mm') }}"> <img
                                            src="{{ asset('/img/myanmar.png') }}" alt="" class="md:w-25"
                                            style="width: 24px;"><span
                                            class="pl-2">{{ __('layout.myanmar') }}</span></a>
                                </div>
                            </li>
                            <a class="ts-scroll btn btn-primary btn-sm m-1 px-3 ts-width__auto"
                                href="{{ route('login') }}">{{ __('auth.login') }}</a>
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

                            @yield('banner_title')

                        </h1>
                        <div data-animate="ts-fadeInUp" data-delay=".1s">
                            <p class="w-75 text-white mb-5 ts-opacity__50">{{ __('home.our_history_start_line') }}</p>
                        </div>
                        <a href="#how-it-works" class="btn btn-outline-light btn-lg ts-scroll mr-4"
                            data-animate="ts-fadeInUp" data-delay=".2s">
                            {{ __('layout.learn_more') }}
                            <i class="fa fa-arrow-right small ml-3 ts-opacity__50"></i>
                        </a>
                    </div>
                    <div class="col-sm-5 offset-lg-1 col-md-4">
                        <form class="ts-form p-4 ts-border-radius__md text-white" data-php-path="assets/php/email.php"
                            data-bg-color="rgba(255,255,255,.2)" data-animate="ts-fadeInUp" data-delay=".2s">
                            <h3>{{ __('layout.contact_us') }}</h3>
                            <p class="text-white d-none d-lg-block">{{ __('layout.contact_sub_title') }}</p>

                            <div class="form-group">
                                <input type="text" class="form-control" id="hero-name" name="name"
                                    placeholder="{{ __('layout.name') }}" required>
                            </div>
                            <!--end form-group -->
                            <div class="form-group">
                                <input type="email" class="form-control" id="hero-email" name="email"
                                    placeholder="{{ __('layout.email') }}" required>
                            </div>
                            <!--end form-group -->
                            <div class="form-group">
                                <input type="test" class="form-control" id="hero-message" name="message"
                                    placeholder="{{ __('layout.message') }}" required>
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
                            <button type="submit" class="btn btn-primary w-100">{{ __('layout.send') }}</button>
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


            <section id="contact" class="ts-separate-bg-element" data-bg-image="assets/img/bg-hand-mobile.jpg"
                data-bg-image-opacity=".1" data-bg-color="#12264f">
                <div class="container">
                    <div class="ts-box mb-0 p-5 ts-mt__n-10" data-animate="ts-fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>{{ __('layout.contact_us') }}</h3>
                                <address>
                                    <figure>
---
                                    </figure>
                                    <br>
                                    <figure>
                                        <div class="font-weight-bold">{{ __('layout.email') }}</div>
                                        <a href="#">contact@mwfmyanmar.org</a>
                                    </figure>
                                    <figure>
                                        <div class="font-weight-bold">{{ __('layout.phone') }}</div>
                                        +1 215-606-0391
                                    </figure>
                                </address>
                                <!--end address-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-8">
                                <h3>{{ __('layout.contact_form') }}</h3>
                                <form id="form-contact" method="post"
                                    class="clearfix ts-form ts-form-email ts-inputs__transparent"
                                    data-php-path="assets/php/email.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-name">{{ __('layout.your_name') }} *</label>
                                                <input type="text" class="form-control" id="form-contact-name"
                                                    name="name" placeholder="{{ __('layout.your_name') }}"
                                                    required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-email">{{ __('layout.your_email') }}
                                                    *</label>
                                                <input type="email" class="form-control" id="form-contact-email"
                                                    name="email" placeholder="{{ __('layout.your_email') }}"
                                                    required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                    </div>
                                    <!--end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form-contact-message">{{ __('layout.your_message') }}
                                                    *</label>
                                                <textarea class="form-control" id="form-contact-message" rows="5" name="message"
                                                    placeholder="{{ __('layout.your_message') }}" required></textarea>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-12 -->
                                    </div>
                                    <!--end row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn btn-primary float-right"
                                            id="form-contact-submit">{{ __('layout.send') }}</button>
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
