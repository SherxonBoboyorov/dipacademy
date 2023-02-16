@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Contacts</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">Contacts</a>
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
                            {{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}
                        </a>
                    </li>

                    <li>
                        <a href="tel:{{ $options->where('key', 'phone')->first()->value }}" class="contacts__menu__link">
                            <span>
                                Phone:
                            </span>
                            {{ $options->where('key', 'phone')->first()->value }}
                        </a>
                    </li>


                    <li>
                        <a href="tel:{{ $options->where('key', 'fax')->first()->value }}" class="contacts__menu__link">
                            <span>
                                Fax:
                            </span>
                            {{ $options->where('key', 'fax')->first()->value }}
                        </a>
                    </li>

                    <li>
                        <a href="mailto:{{ $options->where('key', 'email')->first()->value }}" class="contacts__menu__link">
                            <span>
                                Электронная почта:
                            </span>
                            {{ $options->where('key', 'email')->first()->value }}
                        </a>
                    </li>
                </ul>

                <h2 class="about__title__h2">Обратная связь</h2>

                <form action="{{ route('saveCallback') }}" class="contacts__from" method="POST">
                    @csrf
                    <input type="text" name="name" class="contacts__input" placeholder="ФИО" required>
                    <section class="contacts__from__list">
                        <input type="email" name="email" class="contacts__input" placeholder="Электронная почта" required>
                        <input type="tel" name="phone" class="contacts__input" placeholder="Телефон" required>
                    </section>
                    <textarea class="contacts__textarea" name="comment" placeholder="Сообщение" required></textarea>
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
