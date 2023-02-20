@extends('layouts.front')

@section('content')


    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">{{ $programmesin->{'title_' . app()->getLocale()} }}</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('programmes') }}" class="academy__menu__link">@lang('main.programmes')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">{{ $programmesin->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- programmes_in start -->

    <div class="programmes_in">
        <section class="container">
            <div class="programmes_in__cart">

                <div class="programmes_in__list">
                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.course_type'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesin->{'course_type_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.delivery_mode'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesin->{'delivery_mode_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.study_mode'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesin->{'study_mode_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.duration'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesin->{'duration_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.start_date'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesin->{'start_date_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.application_deadline'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesin->{'application_deadline_' . app()->getLocale()} }}</h3>
                    </div>
                </div>

                <div class="programmes_in__item">
                    <div class="academy_contint__text clearfix">
                        <p>
                            {!! $programmesin->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                </div>


                <div class="programmes_in__item">
                    <h2 class="about__title__h2">@lang('main.alumni_reviews')</h2>

                    <div class="programmes_in__reviews__list">
                        @foreach ($program_reviws as $programreviw)
                        <div class="programmes_in__reviews__item">
                            <div class="programmes_in__reviews__img">
                                <img src="{{ asset($programreviw->image) }}" alt="">
                            </div>

                            <h3 class="programmes_in__reviews__name">{{ $programreviw->{'name_' . app()->getLocale()} }}</h3>
                            <h4 class="programmes_in__reviews__graduate">{{ $programreviw->{'graduate_' . app()->getLocale()} }}</h4>
                            <div class="programmes_in__reviews__text">
                                <p>
                                    {!! $programreviw->{'content_' . app()->getLocale()} !!}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- <div class="programmes_in__reviews__button">
                        <a href="#!" class="programmes_in__reviews__link">Подать заявку</a>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>

    <!-- programmes_in end -->



@endsection
