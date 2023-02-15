@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Departments & Staff</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">Main</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">Departments & Staff</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- Departments & Staff start -->

    <div class="departmentsStaff">
        <section class="container">
            <div class="departmentsStaff__cart">
                <div class="departmentsStaff__list">
                    @foreach ($departments as $department)

                    <div class="departmentsStaff__item">
                        <a href="{{ route('departmentsStaff', $department->{'slug_' . app()->getLocale()}) }}">
                            <h2 class="departmentsStaff__title__h2">1</h2>
                            <h4 class="departmentsStaff__title__h4">
                                {{ $department->{'title_' . app()->getLocale()} }}
                            </h4>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Departments & Staff end -->






@endsection
