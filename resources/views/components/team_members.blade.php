            <section id="our-team" class="ts-block">
                <div class="container">
                    <div class="ts-title">
                        <h2>{{ __('home.executive_committees') }}</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                @foreach($committees as $committee)
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="ts-card__image ts-img-into-bg">
                            <img class="card-img-top" src="{{asset($committee->committee_image)}}" alt="Card image cap">
                        </div>
                        <!--end ts-card__image-->
                        <div class="card-body">
                            <h5 class="mb-1">{{ $committee->{'committee_name' . $naming} }}</h5>
                            <h6 class="ts-opacity__50">{{ $committee->{'committee_job_title' . $naming} }}</h6>
                        </div>
                        <!--end card-body-->
                        <div class="card-footer bg-white">
                            <div class="ts-social-icons">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <a href="#">
                                    Myanmar
                                </a>
                            </div>
                            <!--end social-icons-->
                        </div>
                        <!--end card-footer-->
                    </div>
                    <!--end card-->
                </div>
                @endforeach
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
