@extends('layouts.main_layout')

@section('banner_title')
    <h1>{{ __('home.about_us') }}</h1>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class=" ts-block pr-3">
                    <div class="ts-title">
                        <h2>{{ __('home.about_us') }}</h2>
                    </div>
                    <!--end ts-title-->
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                </div>
            </div>
            <!--end col-md-6-->
            <div class="col-sm-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('/img/mwf_logo.png') }}" alt="" class="w-50">

            </div>
            <!--end col-md-6-->
        </div>
        <!--end row-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class=" pr-3">
                    <div class="ts-title">
                        <h2>{{ __('home.our_vision') }}</h2>
                    </div>
                    <!--end ts-title-->
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class=" pr-3">
                    <div class="ts-title">
                        <h2>{{ __('home.our_mission') }}</h2>
                    </div>
                    <!--end ts-title-->
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class=" pr-3">
                    <div class="ts-title">
                        <h2>{{ __('home.our_philosophy') }}</h2>
                    </div>
                    <!--end ts-title-->
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                    <p>
                        Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                        Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                    </p>
                </div>
            </div>
            <!--end col-md-6-->
        </div>
        <!--end row-->
    </div>
    <div class="container mb-10">
        <div class=" text-center mt-4">
            <h2>{{ __('home.our_history') }}</h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class=" pr-3">
                    <!--end ts-title-->
                    <p class=" text-dark mt-2">
                        {{ __('home.our_history_detail') }}

                    </p>
                </div>
            </div>

            <!--end col-md-12-->
        </div>
        <!--end row-->
    </div>

    @include('components.timeline')
@endsection
