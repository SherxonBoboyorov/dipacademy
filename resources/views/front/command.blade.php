@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.team')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.team')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- command start -->

    <div class="command">
        <section class="container">
            <div class="command__cart">

                <div class="leadership__item leadership__active">

                    <div class="leadership__item__list">


                        <div class="leadership__img">
                            <img src="{{ asset($team->image) }}" alt="leadership">
                        </div>

                        <section class="leadership__item__text">
                            <h2 class="leadership__title__h2">{{ $team->{'name_' . app()->getLocale()} }}</h2>
                            <ul class="leadership__menu__contacts">
                                <li>
                                    <span>@lang('main.job_title'):</span>
                                    <h4 class="leadership__link__contacts">{{ $team->{'job_title_' . app()->getLocale()} }}</h4>
                                </li>

                                <li>
                                    <span>@lang('main.phone'):</span>
                                    <a href="tel:{{ $team->phone_number }}" class="leadership__link__contacts">{{ $team->phone_number }}</a>
                                </li>

                                <li>
                                    <span>@lang('main.reception_days'):</span>
                                    <h4 class="leadership__link__contacts">{{ $team->{'reception_days_' . app()->getLocale()} }}</h4>
                                </li>

                                <li>
                                    <span>@lang('main.email'):</span>
                                    <a href="mailto:{{ $team->email }}" class="leadership__link__contacts">{{ $team->email }}</a>
                                </li>
                            </ul>
                        </section>

                    </div>

                    <section class="leadership__text__next">
                        <div class="academy_contint__text clearfix">
                            <p>
                                {!! $team->{'description_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </section>

                </div>

            </div>
        </section>
    </div>

    <!-- command end -->

@endsection
