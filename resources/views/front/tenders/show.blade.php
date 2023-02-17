@extends('layouts.front')

@section('content')



    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2"> {{ $tender->{'title_' . app()->getLocale()} }}</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('tenders') }}" class="academy__menu__link">@lang('main.tenders')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link"> {{ $tender->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- Advisory board start -->

    <div class="advisory_board">
        <section class="container">
            <div class="advisory_board__cart">

                <section class="tenders__cart__item__in">
                    <h4 class="tenders__data">
                        {{  date('d.m.Y', strtotime($tender->created_at)) }}
                    </h4>

                    <h2 class="about__title__h2">
                        {{ $tender->{'title_' . app()->getLocale()} }}
                    </h2>
                </section>

                <div class="academy_contint__text clearfix">
                    <p>
                        {!! $tender->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>

            </div>
        </section>
    </div>

    <!-- Advisory board end -->


  @endsection
