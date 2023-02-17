@extends('layouts.front')

@section('content')


    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">{{ $programmesmasterin->{'title_' . app()->getLocale()} }}</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('programmesmasters') }}" class="academy__menu__link">@lang('main.master')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">{{ $programmesmasterin->{'title_' . app()->getLocale()} }}</a>
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
                        <h3 class="programmes_in__title__h3">{{ $programmesmasterin->{'course_type_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.delivery_mode'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesmasterin->{'delivery_mode_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.study_mode'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesmasterin->{'study_mode_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">>@lang('main.duration'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesmasterin->{'duration_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.start_date'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesmasterin->{'start_date_' . app()->getLocale()} }}</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">@lang('main.application_deadline'):</h4>
                        <h3 class="programmes_in__title__h3">{{ $programmesmasterin->{'application_deadline_' . app()->getLocale()} }}</h3>
                    </div>
                </div>

                <div class="programmes_in__item">
                    <div class="academy_contint__text clearfix">
                        <p>
                            {!! $programmesmasterin->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                </div>


                {{-- <div class="programmes_in__item">
                    <h2 class="about__title__h2">Отзывы выпускников</h2>

                    <div class="programmes_in__reviews__list">

                        <div class="programmes_in__reviews__item">
                            <div class="programmes_in__reviews__img">
                                <img src="{{ asset('front/foto/programmes_in_1.png') }}" alt="">
                            </div>

                            <h3 class="programmes_in__reviews__name">John Doe</h3>
                            <h4 class="programmes_in__reviews__graduate">Выпускник 2017 года</h4>
                            <div class="programmes_in__reviews__text">
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="programmes_in__reviews__button">
                        <a href="#!" class="programmes_in__reviews__link">Подать заявку</a>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>

    <!-- programmes_in end -->



@endsection
