@extends('layouts.front')

@section('content')


    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.the_academy')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.the_academy')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- academy_contint start -->

    <div class="academy_contint">
        <section class="container">
            <div class="academy_contint__cart">
                @foreach ($pages as $page)
                <div class="academy_contint__item">
                    <div class="academy_contint__img">
                        <img src="{{ asset($page->image) }}" alt="academy">
                    </div>

                    <div class="academy_contint__text clearfix">
                        <p>
                            {!! $page->{'content_' . app()->getLocale()} !!}
                         </p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- academy_contint end -->


    <!-- Programmes start -->

    <div class="programmes">
        <section class="container">
            <div class="programmes__cart">
                <h2 class="about__title__h2">@lang('main.programmes')</h2>

                <ul class="programmes__menu">
                  @foreach ($programmesins as $programmesin)
                    <li>
                        <a href="{{ route('programmesin', $programmesin->id) }}" class="programmes__menu__link">{{ $programmesin->{'title_' . app()->getLocale()} }}</a>
                    </li>
                  @endforeach
                </ul>
            </div>
        </section>
    </div>

    <!-- Programmes end -->


    <!-- magistracy_in start -->

    <div class="magistracy_in">
        <section class="container">
            <div class="magistracy_in__cart">
                @foreach ($magistracies as $magistrscy)

                <h2 class="about__title__h2">@lang('main.magistracy')</h2>
                <div class="academy_contint__text clearfix">
                    <p>
                        {!! $magistrscy->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- magistracy end -->


    <!-- our partners start -->

    <div class="our_partners">
        <section class="container">
            <div class="our_partners__cart">
                <h2 class="about__title__h2">@lang('main.our_partners')</h2>

                <div class="our_partners__list owl-carousel">
                    @foreach ($ourpartners as $outpartner)
                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a>
                                <img src="{{ asset($outpartner->image) }}" alt="our_partners">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- our partners end -->

   @endsection
