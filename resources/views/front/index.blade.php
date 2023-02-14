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
                        <a href="{{ $slider->link }}" class="slider__link">More</a>
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

                        <a href="{{ route('about') }}" class="about__link">More <span><i class="fas fa-chevron-right"></i></span></a>
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
                <h2 class="about__title__h2">programmes for diplomats</h2>

                <div class="programmes_for__list">

                    <div class="programmes_for__item">
                        <div class="programmes_for__img">
                            <img src="foto/programmes_1.png" alt="programmes">
                        </div>

                        <div class="programmes_for__text">
                            <p>
                                Systematic training and advanced training course for reserve diplomats
                            </p>
                        </div>

                        <a href="programmes_in.html" class="programmes_for__link">More <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>

                    <div class="programmes_for__item">
                        <div class="programmes_for__img">
                            <img src="foto/programmes_2.png" alt="programmes">
                        </div>

                        <div class="programmes_for__text">
                            <p>
                                SysA systematic and intensive training course for appointed ambassadors
                            </p>
                        </div>

                        <a href="programmes_in.html" class="programmes_for__link">More <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>

                    <div class="programmes_for__item">
                        <div class="programmes_for__img">
                            <img src="foto/programmes_1.png" alt="programmes">
                        </div>

                        <div class="programmes_for__text">
                            <p>
                                MFA administrative and technical staff for long-term business trips abroad
                            </p>
                        </div>

                        <a href="programmes_in.html" class="programmes_for__link">More <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>

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
                    <div class="magistracy__img">
                        <img src="foto/magistracy.png" alt="">
                    </div>

                    <div class="magistracy__item">
                        <h2 class="about__title__h2">магистратура</h2>
                        <div class="about__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        </div>

                        <a href="AdmissionsMaster.html" class="magistracy__link">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- magistracy end -->


    <!-- all programmes start -->

    <div class="all_programmes">
        <section class="container">
            <div class="all_programmes__cart">
                <h2 class="about__title__h2">all programmes</h2>

                <div class="all_programmes__list">

                    <div class="all_programmes__item">
                        <h3 class="all_programmes__title__h3">
                            <span>01.</span>Programmes for government sector
                        </h3>

                        <div class="all_programmes__text">
                            <p>
                               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                               Duration: 1 month
                            </p>
                        </div>

                        <a href="programmes_in.html" class="all_programmes__link"><i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="all_programmes__item">
                        <h3 class="all_programmes__title__h3">
                            <span>02.</span>Programmes for the private sector
                        </h3>

                        <div class="all_programmes__text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                Duration: 2 months
                            </p>
                        </div>

                        <a href="programmes_in.html" class="all_programmes__link"><i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="all_programmes__item">
                        <h3 class="all_programmes__title__h3">
                            <span>03.</span>Programmes for government sector
                        </h3>

                        <div class="all_programmes__text">
                            <p>
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                Duration: 3 months
                            </p>
                        </div>

                        <a href="programmes_in.html" class="all_programmes__link"><i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="all_programmes__item">
                        <h3 class="all_programmes__title__h3">
                            <span>04.</span>Programmes for the private sector
                        </h3>

                        <div class="all_programmes__text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                Duration: 4 months
                            </p>
                        </div>

                        <a href="programmes_in.html" class="all_programmes__link"><i class="fas fa-chevron-right"></i></a>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- all programmes end -->


    <!--  choose the academy start -->

    <div class="choose_academy">
        <section class="container">
            <div class="choose_academy__cart">
                <h2 class="about__title__h2">why to choose the academy</h2>

                <div class="choose_academy__list">

                    <div class="choose_academy__item">
                        <a href="#!">
                            <div class="choose_academy__img">
                                <img src="foto/choose_academy.png" alt="choose_academy">
                            </div>

                            <h3 class="choose_academy__title__h3">Quality of programmes</h3>
                        </a>
                    </div>

                    <div class="choose_academy__item">
                        <a href="#!">
                            <div class="choose_academy__img">
                                <img src="foto/choose_academy_1.png" alt="choose_academy">
                            </div>

                            <h3 class="choose_academy__title__h3">High level lecturers</h3>
                        </a>
                    </div>

                    <div class="choose_academy__item">
                        <a href="#!">
                            <div class="choose_academy__img">
                                <img src="foto/choose_academy_2.png" alt="choose_academy">
                            </div>

                            <h3 class="choose_academy__title__h3">Well trained staff</h3>
                        </a>
                    </div>

                    <div class="choose_academy__item">
                        <a href="#!">
                            <div class="choose_academy__img">
                                <img src="foto/choose_academy_3.png" alt="choose_academy">
                            </div>

                            <h3 class="choose_academy__title__h3">Government network</h3>
                        </a>
                    </div>

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
                    <h2 class="about__title__h2">News</h2>
                    <a href="News.html" class="news__all__link">
                        All news <span><i class="fas fa-chevron-right"></i></span>
                    </a>
                </div>

                <div class="news__list">
                    <div class="news__item">
                        <a href="news_in.html">
                            <div class="news__img">
                                <img src="foto/news_1.png" alt="news">
                                <h3 class="news__title__h3">Publications</h3>
                            </div>

                            <div class="news__item__list">
                                <h4 class="news__data">12.04.2022</h4>
                                <h5 class="news__eyes">
                                    <span><i class="fas fa-eye"></i></span>
                                    2 657
                                </h5>
                            </div>

                            <h2 class="news__title__h2">
                                Ut enim ad minim veniam, quis nostrud
                            </h2>

                            <div class="news__text">
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="news__item">
                        <a href="news_in.html">
                            <div class="news__img">
                                <img src="foto/news_2.png" alt="news">
                                <h3 class="news__title__h3">research</h3>
                            </div>

                            <div class="news__item__list">
                                <h4 class="news__data">12.04.2022</h4>
                                <h5 class="news__eyes">
                                    <span><i class="fas fa-eye"></i></span>
                                    2 657
                                </h5>
                            </div>

                            <h2 class="news__title__h2">
                                Exercitation ullamco laboris nisi ut aliquip ex ea
                            </h2>

                            <div class="news__text">
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="news__item">
                        <a href="news_in.html">
                            <div class="news__img">
                                <img src="foto/news_3.png" alt="news">
                                <h3 class="news__title__h3">research</h3>
                            </div>

                            <div class="news__item__list">
                                <h4 class="news__data">12.04.2022</h4>
                                <h5 class="news__eyes">
                                    <span><i class="fas fa-eye"></i></span>
                                    2 657
                                </h5>
                            </div>

                            <h2 class="news__title__h2">
                                Duis aute irure dolor in reprehenderit in voluptate
                            </h2>

                            <div class="news__text">
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- news end -->


    <!-- our partners start -->

    <div class="our_partners">
        <section class="container">
            <div class="our_partners__cart">
                <h2 class="about__title__h2">our partners</h2>

                <div class="our_partners__list owl-carousel">

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_1.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_2.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_3.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_4.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_5.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_3.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_4.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- our partners end -->

    @endsection

