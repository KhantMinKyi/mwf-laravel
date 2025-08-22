    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="ts-block pr-3">
                        <div class="ts-title">
                            <h2>{{ __('home.about_us') }}</h2>
                        </div>
                        <!--end ts-title-->
                        <p>
                            Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                            Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                        </p>
                        <div class="list-group list-group-flush mb-5">
                            <a href="#collapseOne"
                                class="list-group-item list-group-item-action border-top-0 pl-0 font-weight-bold bg-transparent"
                                data-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="collapseOne">{{ __('home.our_mission') }}</a>
                            <div class="collapse" id="collapseOne">
                                <p class="pt-3 small">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident.
                                </p>
                            </div>
                            <a href="#collapseTwo"
                                class="list-group-item list-group-item-action pl-0 font-weight-bold bg-transparent"
                                data-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="collapseTwo">{{ __('home.our_vision') }}</a>
                            <div class="collapse" id="collapseTwo">
                                <p class="pt-3 small">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident.
                                </p>
                            </div>
                            <a href="#collapseThree"
                                class="list-group-item list-group-item-action pl-0 font-weight-bold bg-transparent"
                                data-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="collapseThree">{{ __('home.our_philosophy') }}</a>
                            <div class="collapse" id="collapseThree">
                                <p class="pt-3 small">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary mr-3 my-2">{{ __('home.contact_us') }}</a>
                        <a href="#"
                            class="btn btn-outline-dark ts-btn-border-muted my-2">{{ __('home.more_information') }}</a>
                    </div>
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="ts-background d-none d-sm-block" data-bg-color="#fafafa" data-bg-parallax1="scroll"
            data-bg-parallax-speed="3">
            <div class="owl-carousel w-50 ts-push-left__100 h-100 ts-parallax-element1" data-owl-loop="1"
                data-owl-nav-container="#carousel-external-control">
                <div class="ts-background-image" data-bg-image="{{ asset('/img/banner_2.jpg') }}"></div>
                <div class="ts-background-image" data-bg-image="{{ asset('/img/banner_4.jpg') }}"></div>
            </div>
            <!--end owl-carousel-->
        </div>
        <!--end ts-background-->

    </section>
