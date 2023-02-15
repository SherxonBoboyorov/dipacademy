@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Факультет практической дипломатии</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">Main</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">Факультет практической дипломатии</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- departmentsStaff_In start -->

    <div class="departmentsStaff_In">
        <section class="container">
            <div class="departmentsStaff_In__cart">

                <div class="departmentsStaff_In__list">
                    <aside>
                        <h2 class="departmentsStaff_In__title__h2">Кафедры</h2>
                        @foreach ($faculties as $faculty)

                        <ul class="departmentsStaff_In__menu">

                            <li class="active">
                                <a href="{{ route('faculty', $faculty->id) }}" class="departmentsStaff_In__menu__link">
                                    {{ $faculty->{'title_' . app()->getLocale()} }}
                                </a>
                            </li>

                        </ul>
                      @endforeach

                    </aside>

                    <section class="departmentsStaff_In__cart__item">
                        <div class="academy_contint__text clearfix">
                            <p>
                                {!! $faculty->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <h2 class="about__title__h2">Команда</h2>

                        <div class="departmentsStaff_In__cart__list">
                            @foreach ($teams as $team)

                            <div class="departmentsStaff_In__item__list">
                                <a href="{{ route('team', $team->{'slug_' . app()->getLocale()}) }}">
                                    <div class="departmentsStaff_In__img">
                                        <img src="{{ asset($team->image) }}" alt="departmentsStaff">
                                    </div>

                                    <h3 class="departmentsStaff_In__title__h3">
                                        {{ $team->{'name_' . app()->getLocale()} }}
                                    </h3>

                                    <h4 class="departmentsStaff_In__title__h4">
                                        {{ $team->{'job_title_' . app()->getLocale()} }}
                                    </h4>

                                    <div class="departmentsStaff_In__text">
                                        <p>
                                            {!! $team->{'description_' . app()->getLocale()} !!}
                                         </p>
                                    </div>
                                </a>
                            </div>
                          @endforeach
                        </div>
                    </section>

                </div>

            </div>
        </section>
    </div>


    <!-- departmentsStaff_In end -->

@endsection
