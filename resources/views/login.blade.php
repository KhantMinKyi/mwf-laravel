@extends('layouts.login_layout')
@section('content')
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src={{ asset('/img/mwf_logo.png') }} style="width: 125px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">{{ __('layout.website_name') }}</h4>
                                    </div>

                                    <form action="{{ route('show.login') }}" method="post">
                                        @csrf
                                        <p>{{ __('auth.login_sub_title') }}</p>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="form2Example11" class="form-control" name="login"
                                                placeholder="{{ __('auth.username') }}" />
                                            <label class="form-label" for="form2Example11">{{ __('auth.username') }}</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control"
                                                name="password" />
                                            <label class="form-label" for="form2Example22">{{ __('auth.password') }}</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">{{ __('auth.login') }}</button>
                                            <a class="text-muted" href="#!">{{ __('auth.forgot_password') }}</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2"
                                style="background-color: #12264f">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">{{ __('layout.website_name') }}</h4>
                                    <p class="small mb-0 text-success">{{ __('home.our_history_start_line') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
