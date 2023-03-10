@extends('layouts.front')

@section('content')

    <!-- slider start -->

    <div class="slider">
        <div class="slider__list">
            @foreach ($sliders as $slider)
            <div class="slider__item" style="background: linear-gradient(0deg, rgba(18, 54, 84, 0.5), rgba(18, 54, 84, 0.5)), url({{ asset($slider->image) }});">
                <section class="container">
                    <div class="slider__cart">
                        <h1 class="slider__title__h1">{{ $slider->{'title_' . app()->getLocale()} }}</h1>
                        <div class="slider__text">
                            <p>{{ $slider->{'description_' . app()->getLocale()} }}</p>
                        </div>
                        <a href="{{ $slider->link }}" class="slider__link">@lang('main.more')</a>
                    </div>
                </section>
            </div>
            @endforeach
        </div>
    </div>

    <!-- slider end -->


    <!-- about start -->

    <div class="about">
        <section class="container">
            <div class="about__cart">
                <div class="about__list">
                    @foreach ($pages as $page)

                    <div class="about__item__text">
                        <h2 class="about__title__h2">{{ $page->{'title_' . app()->getLocale()} }}</h2>

                        <div class="about__text">
                            <p>
                                {!! $page->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <a href="{{ route('about') }}" class="about__link">@lang('main.more') <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>

                    <div class="about__item">
                        <p class="text-center">
                            <a data-fancybox href="{{ $page->frame }}">
                                <section>
                                    <img class="inline" width="500" alt="" src="{{ asset($page->image) }}"/>
                                    <!-- play start -->

                                    <div class="button__min is-play" href="#">
                                        <div class="button-outer-circle has-scale-animation"></div>
                                        <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                        <div class="button-icon is-play">
                                            <img class="about__item__img__play" alt="All" src="{{ asset('front/foto/pley.svg') }}">
                                        </div>
                                    </div>

                                    <!-- play end -->
                                </section>
                            </a>
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- about end -->


    <!-- programmes for diplomats start -->

    <div class="programmes_for">
        <section class="container">
            <div class="programmes_for__cart">
                <h2 class="about__title__h2">@lang('main.programmes_for_diplomats')</h2>

                <div class="programmes_for__list">
                    @foreach ($programmesins as $programmesin)
                    <div class="programmes_for__item">
                        <div class="programmes_for__img">
                            <img src="{{ asset($programmesin->image) }}" alt="programmes">
                        </div>

                        <div class="programmes_for__text">
                            <p>
                                {{ $programmesin->{'title_' . app()->getLocale()} }}
                            </p>
                        </div>

                        <a href="{{ route('programmesin', $programmesin->id) }}" class="programmes_for__link">@lang('main.more') <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- programmes for diplomats end -->


    <!-- magistracy start -->

    <div class="magistracy">
        <section class="container">
            <div class="magistracy__cart">
                <div class="magistracy__list">
                    @foreach ($magistracies as $magistracy)

                    <div class="magistracy__img">
                        <img src="{{ asset($magistracy->image) }}" alt="">
                    </div>

                    <div class="magistracy__item">
                        <h2 class="about__title__h2">@lang('main.magistracy')</h2>
                        <div class="about__text">
                            <p>
                                {!! $magistracy->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <a href="{{ route('about') }}" class="magistracy__link">@lang('main.more')</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- magistracy end -->


    <!-- all programmes start -->

    <div class="all_programmes">
        <section class="container">
            <div class="all_programmes__cart">
                <h2 class="about__title__h2">@lang('main.all_programmes')</h2>

                <div class="all_programmes__list">
                    @foreach ($programmesmasterins as $programmesmasterin)
                     <div class="all_programmes__item">
                        <h3 class="all_programmes__title__h3">
                            <span>0{{ $programmesmasterin->id}}.</span>{{ $programmesmasterin->{'title_' . app()->getLocale()} }}
                        </h3>

                        <div class="all_programmes__text">
                            <p>
                                {!! $programmesmasterin->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <a href="{{ route('programmesmasterin', $programmesmasterin->id) }}" class="all_programmes__link"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- all programmes end -->


    <!--  choose the academy start -->

    <div class="choose_academy">
        <section class="container">
            <div class="choose_academy__cart">
                <h2 class="about__title__h2">@lang('main.why_to_choose_the_academy')</h2>

                <div class="choose_academy__list">
                   @foreach ($whydipacademies as $whydipacademy)
                    <div class="choose_academy__item">
                        <a>
                            <div class="choose_academy__img">
                                <img src="{{ asset($whydipacademy->image) }}" alt="choose_academy">
                            </div>

                            <h3 class="choose_academy__title__h3">{{ $whydipacademy->{'title_' . app()->getLocale()} }}</h3>
                        </a>
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
    </div>

    <!--  choose the academy end -->


    <!-- news start -->

    <div class="news">
        <section class="container">
            <div class="news__cart">
                <div class="news__cart__list">
                    <h2 class="about__title__h2">@lang('main.news')</h2>
                    <a href="{{ route('articles') }}" class="news__all__link">
                        @lang('main.all_news') <span><i class="fas fa-chevron-right"></i></span>
                    </a>
                </div>

                <div class="news__list">
                   @foreach (\App\Models\Article::orderBy('created_at', 'DESC')->get() as $article)
                    <div class="news__item">
                        <a href="{{ route('article', $article->{'slug_' . app()->getLocale()}) }}">
                            <div class="news__img">
                                <img src="{{ asset($article->image) }}" alt="news">
                                <h3 class="news__title__h3">{{ $article->category->{'title_' . app()->getLocale()} }}</h3>
                            </div>

                            <div class="news__item__list">
                                <h4 class="news__data">{{  date('d.m.Y', strtotime($article->created_at)) }}</h4>
                                <h5 class="news__eyes">
                                    <span><i class="fas fa-eye"></i></span>
                                    {{ $article->views }}
                                </h5>
                            </div>

                            <h2 class="news__title__h2">
                                {{ $article->{'title_' . app()->getLocale()} }}
                            </h2>

                            <div class="news__text">
                                <p>
                                    {!! $article->{'content_' . app()->getLocale()} !!}
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- news end -->


    <!-- our partners start -->

    <div class="our_partners">
        <section class="container">
            <div class="our_partners__cart">
                <h2 class="about__title__h2">@lang('main.our_partners')</h2>

                <div class="our_partners__list owl-carousel">
                  @foreach ($ourpartners as $ourpartner)
                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a>
                                <img src="{{ asset($ourpartner->image) }}" alt="our_partners">
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

