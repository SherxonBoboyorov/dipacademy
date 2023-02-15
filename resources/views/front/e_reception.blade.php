@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">E-reception</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">Main</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">E-reception</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- E-reception start -->
    @include('alert')

    <div class="e_reception">
        <section class="container">
            <div class="e_reception__cart">
                <form action="{{ route('quotecallbackSave') }}" method="POST" class="e_reception__form">
                    @csrf
                    <input type="text" name="fullname" placeholder="ФИО" class="e_reception__input" required>
                    <input type="date" name="date_of_birth" placeholder="Дата рождения" class="e_reception__input" required>
                    <input type="text" name="passport_data" placeholder="Паспортные данные" class="e_reception__input" required>
                    <input type="text" name="address" placeholder="Адрес" class="e_reception__input" required>
                    <input type="text" name="index" placeholder="Индекс" class="e_reception__input" required>
                    <input type="email" name="email" placeholder="Электронная почта" class="e_reception__input" required>
                    <input type="tel" name="phone_number" placeholder="Телефон" class="e_reception__input" required>
                    <textarea class="e_reception__textarea" name="question_text" placeholder="Текст вопроса" required></textarea>
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
