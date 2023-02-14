@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url(foto/academy_fon.png)">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">E-reception</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="index.html" class="academy__menu__link">Main</a>
                    </li>
                    <li>
                        <a href="e_reception.html" class="academy__menu__link">E-reception</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- E-reception start -->

    <div class="e_reception">
        <section class="container">
            <div class="e_reception__cart">
                <form action="#!" class="e_reception__form">
                    <input type="text" placeholder="ФИО" class="e_reception__input">
                    <input type="date" placeholder="Дата рождения" class="e_reception__input">
                    <input type="text" placeholder="Паспортные данные" class="e_reception__input">
                    <input type="text" placeholder="Адрес" class="e_reception__input">
                    <input type="text" placeholder="Индекс" class="e_reception__input">
                    <input type="email" placeholder="Электронная почта" class="e_reception__input">
                    <input type="tel" placeholder="Телефон" class="e_reception__input">
                    <textarea class="e_reception__textarea" placeholder="Текст вопроса"></textarea>
                    <label class="input-wrap">
                        <input type="checkbox" class="checkboxNone">
                        <span class="checkmark"></span>
                        <h3 class="e_reception__title__h3">Мои персональные данные предоставлены мной самостоятельно, я даю согласие на их обработку</h3>
                    </label>
                    <button type="submit" class="e_reception__button buttonDisabled">Отправить</button>
                </form>
            </div>
        </section>
    </div>

    <!-- E-reception end -->

@endsection
