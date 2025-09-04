@extends('layouts.main_layout')
@section('banner_title')
    <h1>{{ __('layout.website_name') }}</h1>
@endsection
@php
    $locale = app()->getLocale();
    $naming = $locale == 'en' ? '' : '_mm';
@endphp
@section('content')
    {{-- Moto Section --}}
    <section class="ts-block ts-separate-bg-element ts-background-repeat text-center" data-bg-image-opacity=".1"
        data-bg-image="{{ asset('assets/img/bg-pattern-dot.png') }}">
        <div content="ts-title mb-5">
            <h2 class="mb-1">{{ __('home.motto') }}</h2>
            {{-- <h5 class="font-weight-normal ts-opacity__50 mb-5">သို့ဖောင့်များယူပြီး စာရင်းပေးသွင်းကြပါရန်။</h5> --}}
        </div>
        {{-- <a href="#" class="btn btn-outline-primary btn-lg border-0 mt-2" data-bg-color="#ebf1fe">သို့ဖောင့်များယူပြီး
            စာရင်းပေးသွင်းကြပါရန်။</a> --}}
    </section>

    <!--POSTS & NEWS} **********************************************************************************-->
    @include('components.posts')
    <!--END POSTS & NEWS} **********************************************************************************-->

    <!--ABOUT US ********************************************************************************************-->
    @include('components.about_us')
    <!--END ABOUT US ****************************************************************************************-->


    <!--COUTERS **********************************************************************************-->
    @include('components.counters')
    <!--END COUTERS **********************************************************************************-->

    <!--TEAM MEMBERS **********************************************************************************-->
    @include('components.team_members')
    <!--END TEAM MEMBERS **********************************************************************************-->
@endsection
