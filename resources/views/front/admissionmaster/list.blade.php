@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Admissions Master</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">Admissions Master</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- programmes start -->

    <div class="programmes_in">
        <section class="container">
            <div class="programmes_in__cart">

                <div class="academy_contint__text clearfix">
                    @foreach ($admissionmasters as $admissionmaster)
                    <p>
                        {!! $admissionmaster->{'content_' . app()->getLocale()} !!}
                    </p>
                  @endforeach
                </div>

                <div class="programmes_for__list">
                   @foreach ($admissionmasterins as $admissionmasterin)
                    <div class="programmes_for__item">
                        <div class="programmes_for__img">
                            <img src="{{ asset($admissionmasterin->image) }}" alt="programmes">
                        </div>

                        <div class="programmes_for__text">
                            <p>
                                {{ $admissionmasterin->{'title_' . app()->getLocale()} }}
                            </p>
                        </div>

                        <a href="{{ route('admissionmasterin', $admissionmasterin->id) }}" class="programmes_for__link">More <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- programmes end -->





@endsection
