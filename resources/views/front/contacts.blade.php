@extends('layouts.front')

@section('content')

    <!-- academy start -->

    <div class="academy" style="background-image:url({{ asset('front/foto/academy_fon.png') }})">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">@lang('main.contacts')</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="{{ route('/') }}" class="academy__menu__link">@lang('main.main')</a>
                    </li>
                    <li>
                        <a class="academy__menu__link">@lang('main.contacts')</a>
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
                                @lang('main.address'):
                            </span>
                            {{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}
                        </a>
                    </li>

                    <li>
                        <a href="tel:{{ $options->where('key', 'phone')->first()->value }}" class="contacts__menu__link">
                            <span>
                                @lang('main.phone'):
                            </span>
                            {{ $options->where('key', 'phone')->first()->value }}
                        </a>
                    </li>


                    <li>
                        <a href="tel:{{ $options->where('key', 'fax')->first()->value }}" class="contacts__menu__link">
                            <span>
                                @lang('main.fax'):
                            </span>
                            {{ $options->where('key', 'fax')->first()->value }}
                        </a>
                    </li>

                    <li>
                        <a href="mailto:{{ $options->where('key', 'email')->first()->value }}" class="contacts__menu__link">
                            <span>
                                @lang('main.email'):
                            </span>
                            {{ $options->where('key', 'email')->first()->value }}
                        </a>
                    </li>
                </ul>

                <h2 class="about__title__h2">@lang('main.feedback')</h2>

                <form action="{{ route('saveCallback') }}" class="contacts__from" method="POST">
                    @csrf
                    <input type="text" name="name" class="contacts__input" placeholder="@lang('main.full_name')" required>
                    <section class="contacts__from__list">
                        <input type="email" name="email" class="contacts__input" placeholder="@lang('main.email')" required>
                        <input type="tel" name="phone" class="contacts__input" placeholder="@lang('main.phone')" required>
                    </section>
                    <textarea class="contacts__textarea" name="comment" placeholder="@lang('main.message')" required></textarea>
                    <button class="contacts__button" type="submit">@lang('main.send')</button>
                </form>
            </div>
        </section>

        <div class="contacts__map">
            {!! $options->where('key', 'map')->first()->value !!}
        </div>
    </div>

    <!-- Contacts end -->


 @endsection
