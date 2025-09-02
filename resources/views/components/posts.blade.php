            <section id="successful-stories" class="ts-block pb-5 mb-4">
                <div class="container">
                    <div class="ts-title text-center">
                        <h2>{{ __('home.news_and_posts') }}</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-4">
                                <div class="ts-story ts-separate-bg-element" data-animate="ts-fadeInUp"
                                    data-bg-color="rgba(0,0,0,.7)" data-bg-image="{{ asset($post->post_banner) }}"
                                    data-bg-image-opacity=".6">
                                    <figure>{{ $post->post_created_date }}</figure>
                                    {{-- <h3>{{ $post->post_title . $naming }}</h3> --}}
                                    <h3>{{ $post->{'post_title' . $naming} }}</h3>
                                    {{-- <p>{{ Str::words(strip_tags($post->{'post_body' . $naming}), 10) }} </p> --}}
                                    <a href="{{ route('guest.news_detail', $post->id) }}"
                                        class="btn btn-primary btn-sm">{{ __('home.view_more') }}</a>
                                </div>
                                <!--end ts-story-->
                            </div>
                        @endforeach
                    </div>
                    <!--end row-->
                    <div class="my-5 text-center">
                        <a href="{{ route('guest.news') }}" class="btn btn-outline-primary border-0"
                            data-bg-color="#ebf1fe">{{ __('home.see_more') }}</a>
                    </div>
                </div>
                <!--end container-->
            </section>
