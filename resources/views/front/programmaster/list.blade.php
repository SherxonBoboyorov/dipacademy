@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Master</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">Master</a>
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
                    @foreach ($programmesmasters as $programmesmaster)
                    <p>
                        {!! $programmesmaster->{'content_' . app()->getLocale()} !!}
                    </p>
                  @endforeach
                </div>

                <div class="programmes_for__list">
                   @foreach ($programmesmasterins as $programmesmasterin)
                    <div class="programmes_for__item">
                        <div class="programmes_for__img">
                            <img src="{{ asset($programmesmasterin->image) }}" alt="programmes">
                        </div>

                        <div class="programmes_for__text">
                            <p>
                                {{ $programmesmasterin->{'title_' . app()->getLocale()} }}
                            </p>
                        </div>

                        <a href=" {{ route('programmesmasterin', $programmesmasterin->id) }}" class="programmes_for__link">More <span><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- programmes end -->





@endsection
