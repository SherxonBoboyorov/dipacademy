@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url(foto/academy_fon.png)">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Departments & Staff</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">Main</a>
                    </li>
                    <li>
                        <a href="DepartmentsStaff.html" class="academy__menu__link">Departments & Staff</a>
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

                    <div class="departmentsStaff__item">
                        <a href="departmentsStaff_In.html">
                            <h2 class="departmentsStaff__title__h2">1</h2>
                            <h4 class="departmentsStaff__title__h4">
                                Общий отдел
                            </h4>
                        </a>
                    </div>

                    <div class="departmentsStaff__item">
                        <a href="departmentsStaff_In.html">
                            <h2 class="departmentsStaff__title__h2">2</h2>
                            <h4 class="departmentsStaff__title__h4">
                                Финансово-экономический отдел
                            </h4>
                        </a>
                    </div>

                    <div class="departmentsStaff__item">
                        <a href="departmentsStaff_In.html">
                            <h2 class="departmentsStaff__title__h2">3</h2>
                            <h4 class="departmentsStaff__title__h4">
                                Отдел информационных технологий
                            </h4>
                        </a>
                    </div>

                    <div class="departmentsStaff__item">
                        <a href="departmentsStaff_In.html">
                            <h2 class="departmentsStaff__title__h2">4</h2>
                            <h4 class="departmentsStaff__title__h4">
                                Информационно-ресурсный центр
                            </h4>
                        </a>
                    </div>

                    <div class="departmentsStaff__item">
                        <a href="departmentsStaff_In.html">
                            <h2 class="departmentsStaff__title__h2">5</h2>
                            <h4 class="departmentsStaff__title__h4">
                                Хозяйственный отдел
                            </h4>
                        </a>
                    </div>

                    <div class="departmentsStaff__item">
                        <a href="departmentsStaff_In.html">
                            <h2 class="departmentsStaff__title__h2">6</h2>
                            <h4 class="departmentsStaff__title__h4">
                                Юрисконсульт
                            </h4>
                        </a>
                    </div>

                    <div class="departmentsStaff__item">
                        <a href="departmentsStaff_In.html">
                            <h2 class="departmentsStaff__title__h2">7</h2>
                            <h4 class="departmentsStaff__title__h4">
                                Отдел международных связей
                            </h4>
                        </a>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <!-- Departments & Staff end -->






@endsection
