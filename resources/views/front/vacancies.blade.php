@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Job vacancies</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">Job vacancies</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- vacancies start -->

    <div class="vacancies">
        <section class="container">
            <div class="vacancies__cart">
                <div class="vacancies__list">
                    @foreach ($vacancies as $vacancy)
                    <div class="vacancies__item">
                        <h3 class="vacancies__title__h3">
                            {{ $vacancy->{'title_' . app()->getLocale()} }}
                            <span><i class="fas fa-chevron-down"></i></span>
                        </h3>

                        <div class="vacancies__text">
                            <p>
                                {!! $vacancy->{'description_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- vacancies end -->

@endsection
