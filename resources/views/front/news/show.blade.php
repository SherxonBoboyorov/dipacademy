@extends('layouts.front')

@section('content')


    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">{{ $article->{'title_' . app()->getLocale()} }}</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('articles') }}" class="academy__menu__link">News</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">{{ $article->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- news_in start -->

    <div class="news_in">
        <section class="container">
            <div class="news_in__cart">
                <h2 class="about__title__h2">{{ $article->{'title_' . app()->getLocale()} }}</h2>
                <div class="news_in__list">

                    <div class="news_in__item">
                        <div class="academy_contint__img">
                            <img src="{{ asset($article->image) }}" alt="news">
                        </div>

                        <div class="academy_contint__text clearfix">
                            <p>
                                {!! $article->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>

                    <aside>
                        <ul class="news_in__menu">
                            <li>
                                <h4 class="news_in__data">Дата:</h4>
                                <h3 class="news_in__title__h3 red">{{  date('d.m.Y', strtotime($article->created_at)) }}</h3>
                            </li>

                            <li>
                                <h4 class="news_in__data">Просмотры:</h4>
                                <h3 class="news_in__title__h3">{{ $article->views }}</h3>
                            </li>

                            <li>
                                <h4 class="news_in__data">Категория:</h4>
                                <h3 class="news_in__title__h3 red">Research</h3>
                            </li>

                            <li>
                                <h4 class="news_in__data">Поделиться:</h4>
                                <div class="news_in__icons__list">
                                    <a href="" class="news_in__icons__link">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a href="#!" class="news_in__icons__link">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="#!" class="news_in__icons__link">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>

                        <h3 class="news_in__similar__title">Похожие новости</h3>

                        <ul class="news_in__similar__list">
                          @foreach ($articles as $article)
                            <li>
                                <a href="{{ route('article', $article->{'slug_' . app()->getLocale()}) }}">
                                    <div class="news_in__similar__img">
                                        <img src="{{ asset($article->image) }}" alt="similar">
                                    </div>

                                    <div>
                                        <h2 class="news_in__similar__name">
                                            {{ $article->{'title_' . app()->getLocale()} }}
                                        </h2>
                                        <h4 class="news_in__similar__data">
                                            {{  date('d.m.Y', strtotime($article->created_at)) }}
                                        </h4>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </aside>

                </div>
            </div>
        </section>
    </div>

    <!-- news_in end -->

@endsection
