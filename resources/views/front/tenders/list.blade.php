@extends('layouts.front')

@section('content')



    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.tenders')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.tenders')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- Tenders start -->

    <div class="tenders">
        <section class="container">
            <div class="tenders__cart">
                <div class="tenders__list">
                  @foreach ($tenders as $tender)
                    <div class="tenders__item">
                        <a href="{{ route('tender', $tender->{'slug_' . app()->getLocale()}) }}">
                            <h4 class="tenders__data">
                                {{  date('d.m.Y', strtotime($tender->created_at)) }}
                            </h4>

                            <h2 class="tenders__title__h2">
                                {{ $tender->{'title_' . app()->getLocale()} }}
                            </h2>

                            <div class="tenders__text">
                                <p>
                                    {!! $tender->{'content_' . app()->getLocale()} !!}
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                {{ $tenders->links("vendor.pagination.pagination")}}
            </div>
        </section>
    </div>

    <!-- Tenders end -->


    @endsection

