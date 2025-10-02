@extends('layouts.main_layout')
@section('banner_title')
    <h1>{{ __('layout.website_name') }}</h1>
@endsection
@php
    $locale = app()->getLocale();
    $naming = $locale == 'en' ? '' : '_mm';
@endphp
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@section('content')
    {{-- Moto Section --}}
    <section class="ts-block ts-separate-bg-element ts-background-repeat text-center" data-bg-image-opacity=".1"
        data-bg-image="{{ asset('assets/img/bg-pattern-dot.png') }}">
        <div content="ts-title mb-5">
            <h2 class="mb-1">Swift and clever, Strength of wrestler</h2>
            <h4 class="mb-1">ထက်မြက်လျင်မြန်၊နပန်းအားမာန်</h4>
            {{-- <h5 class="font-weight-normal ts-opacity__50 mb-5">သို့ဖောင့်များယူပြီး စာရင်းပေးသွင်းကြပါရန်။</h5> --}}
        </div>
        {{-- <a href="#" class="btn btn-outline-primary btn-lg border-0 mt-2" data-bg-color="#ebf1fe">သို့ဖောင့်များယူပြီး
            စာရင်းပေးသွင်းကြပါရန်။</a> --}}
    </section>
    <!-- Carousel  -->
    @include('components.hero_carousel')
    <!--END Carousel **********************************************************************************-->
    <!--POSTS & NEWS} **********************************************************************************-->
    @include('components.posts')
    <!--END POSTS & NEWS} **********************************************************************************-->

    <!--ABOUT US ********************************************************************************************-->
    @include('components.about_us')
    <!--END ABOUT US ****************************************************************************************-->


    <!--TIMELINE **********************************************************************************-->
    @include('components.timeline')
    <!--END TIMELINE **********************************************************************************-->

    <!--COUTERS **********************************************************************************-->
    @include('components.counters')
    <!--END COUTERS **********************************************************************************-->



    <!--TEAM MEMBERS **********************************************************************************-->
    @include('components.team_members')
    <!--END TEAM MEMBERS **********************************************************************************-->
@endsection
<script>
    $(document).ready(function() {

        $('#owl-demo').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            nav: true,
            dots: true,
            navText: ['‹', '›'],
            smartSpeed: 700,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        // Force caption animation on first slide (in case of initial active state)
        setTimeout(function() {
            $('#owl-demo .owl-item.active .carousel-caption').css('opacity', '1');
        }, 50);

    });
</script>
