<!--TIMELINE ********************************************************************************************-->
<section id="our-life-sotry" class="ts-block ts-separate-bg-element ts-background-repeat" data-bg-image-opacity=".1"
    data-bg-image="{{ asset('assets/img/bg-pattern-dot.png') }}">
    <div class="text-center ts-title">
        <h2>{{__('about_us.activity_title')}}</h2>
    </div>
    <!--end ts-title-->
    <div class="ts-time-line__horizontal">
        <ul class="pt-5 owl-carousel" data-owl-items="99" data-owl-auto-width="1">
            {{-- <li class="ts-time-line__item ts-time-line__milestone">
                <div class="ts-box">
                    <h5>Company Founded</h5>
                </div>
                <!--end ts-box-->
                <figure>
                    <small>Sep</small>
                    <h6>2016</h6>
                </figure>
                <!--end date-->
            </li> --}}
@foreach($achements as $achement)
            <li class="ts-time-line__item">
                <div class="ts-box">
                    <h5>{{ $achement->{'achement_title' . $naming} }}</h5>
                    <span>Venue: {{ $achement->{'achement_location' . $naming} }}</span>
                    <span>Date: ({{$achement->achement_start_date}} to {{$achement->achement_end_date}})</span>
                    {{-- <p> --}}
                        <h6>
                            {{ $achement->{'achement_description' . $naming} }}
                        </h6>

                    {{-- </p> --}}
                    {{-- <a href="#" class="btn btn-dark btn-sm">Read More</a> --}}
                </div>
                <!--end ts-box-->
                <figure>
                    <small>Activities</small>
                    <h6>{{ $achement->{'achement_year' . $naming} }} </h6>
                </figure>
                <!--end date-->
            </li>
@endforeach

        </ul>
    </div>
    <!--end ts-timeline__horizontal-->
</section>
<!--END TIMELINE ****************************************************************************************-->
