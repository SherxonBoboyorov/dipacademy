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

                {{-- {{ $articles->links("vendor.pagination.pagination")}} --}}

            </div>
        </section>
    </div>


  @endsection

  {{-- {{ $articles->links("vendor.pagination.pagination")}} --}}

  {{-- <div class="leadership__list">
    @foreach ($leaderships as $leadership)


    <div class="leadership__item">

        <div class="leadership__item__list">

            <div class="leadership__img">
                <img src="{{ asset($leadership->image) }}" alt="leadership">
            </div>

            <section class="leadership__item__text">
                <h2 class="leadership__title__h2">{{ $leadership->{'name_' . app()->getLocale()} }}</h2>
                <ul class="leadership__menu__contacts">
                    <li>
                        <span>@lang('main.job_title'):</span>
                        <h4 class="leadership__link__contacts">{{ $leadership->{'job_title_' . app()->getLocale()} }}</h4>
                    </li>

                    <li>
                        <span>@lang('main.phone'):</span>
                        <a href="tel:{{ $leadership->phone_number }}" class="leadership__link__contacts">{{ $leadership->phone_number }}</a>
                    </li>

                    <li>
                        <span>@lang('main.reception_days'):</span>
                        <h4 class="leadership__link__contacts">{{ $leadership->{'reception_days_' . app()->getLocale()} }}</h4>
                    </li>

                    <li>
                        <span>@lang('main.email'):</span>
                        <a href="mailto:{{ $leadership->email }}" class="leadership__link__contacts">{{ $leadership->email }}</a>
                    </li>
                </ul>
                <button class="leadership__button__open">@lang('main.more')</button>
            </section>

        </div>

        <section class="leadership__text__next">
            <div class="academy_contint__text clearfix">
                <p>
                    {!! $leadership->{'description_' . app()->getLocale()} !!}
                </p>
            </div>
        </section>

    </div>
    @endforeach
</div> --}}
