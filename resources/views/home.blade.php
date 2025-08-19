@extends('layouts.main_layout')

@section('content')
    {{-- Moto Section --}}
    <section class="text-center my-5 py-5">
        <div content="ts-title mb-5">
            <h3 class="mb-1">Swift and clever,
                Strength of wrestler</h3>
            {{-- <h5 class="font-weight-normal ts-opacity__50 mb-5">သို့ဖောင့်များယူပြီး စာရင်းပေးသွင်းကြပါရန်။</h5> --}}
        </div>
        <a href="#" class="btn btn-outline-primary btn-lg border-0 mt-2" data-bg-color="#ebf1fe">သို့ဖောင့်များယူပြီး
            စာရင်းပေးသွင်းကြပါရန်။</a>
    </section>

    <!--ABOUT US ********************************************************************************************-->
    @include('components.about_us')
    <!--END ABOUT US ****************************************************************************************-->

    <!--SUCCESSFUL STORIES **********************************************************************************-->
    @include('components.posts')
    <!--END SUCCESSFUL STORIES **********************************************************************************-->

    <!--COUTERS **********************************************************************************-->
    @include('components.counters')
    <!--END COUTERS **********************************************************************************-->

    <!--TEAM MEMBERS **********************************************************************************-->
    @include('components.team_members')
    <!--END TEAM MEMBERS **********************************************************************************-->
@endsection
