@extends('layouts.main_layout')
@php
    $locale = app()->getLocale();
    $naming = $locale == 'en' ? '' : '_mm';
    $photo_array = explode(',', $post->post_image);
@endphp


@section('content')
    <section id="our-team" class="ts-block">
        <div class="container">
            <div class="ts-title">
                <h2>{{ $post->{'post_title' . $naming} }}</h2>
            </div>
            <div class="text-center ">
                <img src="{{ asset($post->post_banner) }}" class="pb-5" alt="" style="max-width:75%;">
            </div>
            <div>
                <p>
                    {{ $post->{'post_body' . $naming} }}
                </p>
            </div>
            <!--end ts-title-->
            <div class="row ">
                @foreach ($photo_array as $photo)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="ts-card__image ts-img-into-bg">
                                <img class="card-img-top" src="{{ asset($photo) }}" alt="Card image cap">
                            </div>
                            <!--end ts-card__image-->
                            {{-- <div class="card-body">
                                <h5 class="mb-1">Anita Matthews</h5>
                                <h6 class="ts-opacity__50">Company CEO</h6>
                            </div> --}}
                            <!--end card-body-->
                            <div class="card-footer bg-white">
                                <div class="ts-social-icons">
                                    <a href="#">
                                        <i class="fa fa-clock"></i>
                                    </a>
                                    <a href="#">
                                        {{ $post->post_created_date }}
                                    </a>
                                </div>
                                <!--end social-icons-->
                            </div>
                            <!--end card-footer-->
                        </div>
                        <!--end card-->
                    </div>
                @endforeach
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
