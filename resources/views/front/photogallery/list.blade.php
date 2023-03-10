@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.photo_gallery')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.photo_gallery')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- Photo gallery start -->

    <div class="photoGallery">
        <section class="container">
            <div class="photoGallery__cart">
                <div class="photoGallery__list">
                    @foreach ($photogallerys as $photogallery)

                    <div class="photoGallery__item">
                        <a href="{{ route('photogallery', $photogallery->id) }}">
                            <div class="photoGallery__img">
                                <img src="{{ asset($photogallery->image) }}" alt="photoGallery">
                                <span><i class="fas fa-eye"></i></span>
                                <h4 class="photoGallery__data">{{  date('d.m.Y', strtotime($photogallery->created_at)) }}</h4>
                            </div>

                            <h3 class="photoGallery__title__h3">{{ $photogallery->{'title_' . app()->getLocale()} }}</h3>
                        </a>
                    </div>

                    @endforeach
                </div>


                {{ $photogallerys->links("vendor.pagination.pagination")}}

            </div>
        </section>
    </div>

    <!-- Photo gallery end -->

    @endsection



