@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url(foto/academy_fon.png)">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Contacts</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">Main</a>
                    </li>
                    <li>
                        <a href="Contacts.html" class="academy__menu__link">Contacts</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- Contacts start -->

    <div class="contacts">
        <section class="container">
            <div class="contacts__cart">
                <ul class="contacts__menu">
                    <li>
                        <a class="contacts__menu__link">
                            <span>
                                address:
                            </span>
                            54 Mustakillik Ave., Tashkent 100007, Uzbekistan
                        </a>
                    </li>

                    <li>
                        <a href="tel:+998 71 267-39-50" class="contacts__menu__link">
                            <span>
                                Phone:
                            </span>
                            (+998 71) 267-39-50
                        </a>
                    </li>

                    <li>
                        <a href="tel:+998 71 267-09-00" class="contacts__menu__link">
                            <span>
                                Fax:
                            </span>
                            Fax: (+998 71) 267-09-00
                        </a>
                    </li>

                    <li>
                        <a href="mailto:academy@uwed.uz" class="contacts__menu__link">
                            <span>
                                Электронная почта:
                            </span>
                            academy@uwed.uz
                        </a>
                    </li>
                </ul>

                <h2 class="about__title__h2">Обратная связь</h2>

                <form action="#!" class="contacts__from">
                    <input type="text" class="contacts__input" placeholder="ФИО">
                    <section class="contacts__from__list">
                        <input type="email" class="contacts__input" placeholder="Электронная почта">
                        <input type="tel" class="contacts__input" placeholder="Телефон">
                    </section>
                    <textarea class="contacts__textarea" placeholder="Сообщение"></textarea>
                    <button class="contacts__button" type="submit">Отправить</button>
                </form>
            </div>
        </section>

        <div class="contacts__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d11988.24025383657!2d69.27758556559074!3d41.30755694816422!3m2!1i1024!2i768!4f13.1!2m1!1z0J3QsNC80LDQvdCz0LDQvdGB0LrQuNC5INC-0LHQu9GB0YLRjCwg0LMu0J3QsNC80LDQvdCz0LDQvSwg0YPQuy4g0KHQvtC5INCx0YPQudC4LCA1Mw!5e0!3m2!1sru!2s!4v1674473267887!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Contacts end -->


 @endsection
