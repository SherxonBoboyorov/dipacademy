@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.video_gallery')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.video_gallery')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- Advisory board start -->


    <!-- videoGallery start -->

    <div class="videoGallery">
        <section class="container">
            <div class="videoGallery__cart">
                @if ($videos->count() > 0)

                <div class="videoGallery__list">
                    <div class="videoGallery__list__item">
                        <a data-fancybox="video-gallery" href="{{ $videos[0]->frame }}">
                            <img class="videoItem" src="{{ asset($videos[0]->image) }}" alt="video"/>
                            <!-- play start -->

                            <div class="button__min is-play" href="#">
                                <div class="button-outer-circle has-scale-animation"></div>
                                <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                <div class="button-icon is-play">
                                    <img class="about_contint_in__video__img__play" alt="All" src="{{ asset('front/foto/pley.svg') }}">
                                </div>
                            </div>

                            <!-- play end -->
                        </a>

                        <section class="videoGallery__item__cart">
                            <h3 class="videoGallery__list__title">
                                {{ $videos[0]->{'title_' . app()->getLocale()} }}
                            </h3>
                            <h4 class="videoGallery__list__data">
                                {{  date('d.m.Y', strtotime($videos[0]->created_at)) }}
                            </h4>
                        </section>
                        {{-- @endforeach --}}

                    </div>

                    <div class="videoGallery__menu__video">
                        @foreach ($videos as $video)

                        <div class="videoGallery__item__video active">
                            <a href="{{ $video->frame }}"></a>
                            <div class="videoGallery__img__video">
                                <img class="videoImg" src="{{ asset($video->image) }}" alt="videoGallery">

                                <!-- play start -->

                                <div class="button__min is-play" href="#">
                                    <div class="button-outer-circle has-scale-animation"></div>
                                    <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                    <div class="button-icon is-play">
                                        <img class="about_contint_in__video__img__play" alt="All" src="{{ asset('front/foto/pley.svg') }}">
                                    </div>
                                </div>

                                <!-- play end -->

                            </div>

                            <h4 class="videoGallery__data">
                                {{  date('d.m.Y', strtotime($video->created_at)) }}
                            </h4>

                            <h3 class="videoGallery__title__h3">
                                {{ $video->{'title_' . app()->getLocale()} }}
                            </h3>
                        </div>

                        @endforeach
                    </div>

                    <ul class="news__pagination">
                        <li>
                            <a href="#!" class="news__pagination__next"><i class="fas fa-angle-double-left"></i></a>
                        </li>

                        <li>
                            <a href="#!" class="news__pagination__next"><i class="fas fa-chevron-left"></i></a>
                        </li>

                        <li>
                            <a href="#!" class="news__pagination__link active">
                                1
                            </a>
                        </li>

                        <li>
                            <a href="#!" class="news__pagination__link">
                                2
                            </a>
                        </li>

                        <li>
                            <a href="#!" class="news__pagination__link">
                                3
                            </a>
                        </li>

                        <li>
                            <a href="#!" class="news__pagination__next"><i class="fas fa-chevron-right"></i></a>
                        </li>

                        <li>
                            <a href="#!" class="news__pagination__next"><i class="fas fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </section>
    </div>

    <!-- videoGallery end -->

@endsection
