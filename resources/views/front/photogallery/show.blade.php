@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                @foreach ($photogallery as $photogallery)

                <h2 class="academy__title__h2">{{ $photogallery->{'title_' . app()->getLocale()} }}</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('photogallerys') }}" class="academy__menu__link">@lang('main.photo_gallery')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">{{ $photogallery->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
                @endforeach
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- photoGallery_in start -->

    <div class="photoGallery_in">
        <section class="container">
            <div class="photoGallery_in__cart">

                <div class="fotogalereya_in__list1">
                    @foreach ($photogallerys as $photogallery)

                    <div class="fotogalereya_in__item1">
                        <img src="{{ asset($photogallery->image) }}" alt="fotogalereya_in">
                    </div>
                    @endforeach

                </div>

                <div class="fotogalereya_in__list2">
                    @foreach ($photogallerys as $photogallery)
                    <div class="fotogalereya_in__item2">
                        <img src="{{ asset($photogallery->image) }}" alt="fotogalereya_in">
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>

    <!-- photoGallery_in end -->

@endsection
