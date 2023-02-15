@extends('layouts.front')

@section('content')



    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Tenders</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">Main</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">Tenders</a>
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
        </section>
    </div>

    <!-- Tenders end -->


    @endsection

