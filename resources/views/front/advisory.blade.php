@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.supervisory_board')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.supervisory_board')</a>
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
                @foreach ($advisoryboards as $advisoryboard)
                 <div class="academy_contint__text clearfix">
                    <p>
                        {!! $advisoryboard->{'description_' . app()->getLocale()} !!}
                    </p>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- Advisory board end -->


  @endsection
