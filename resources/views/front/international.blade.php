@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.international')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.international')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- programmes_in start -->

    <div class="programmes_in">
        <section class="container">
            <div class="programmes_in__cart">
                <div class="programmes_in__item">
                   @foreach ($internationals as $international)
                    <div class="academy_contint__text clearfix">
                        <p>
                            {!! $international->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- programmes_in end -->


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
