@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.news')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.news')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- news start -->

    <div class="news">
        <section class="container">
            <div class="news__cart">

                <div class="news__list">
                  @foreach ($articles as $article)
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

                {{ $articles->links("vendor.pagination.pagination")}}

            </div>
        </section>
    </div>

    <!-- news end -->

@endsection
