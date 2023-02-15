<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/foto/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/foto/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/foto/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/foto/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/foto/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('front/css/fancybox-main.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom1.css') }}">

    <title>Dip-Academy</title>
</head>
<body>

    <!-- header start -->

    <header>
        <div class="header">
            <div class="header__top">
                <section class="container">
                    <div class="header__top__list">
                        <ul class="header__top__menu">
                            <li>
                                <div class="header__accessibility">
                                    <span class="header__accessibility__icon" id="haAccessibilityIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5Z"></path></svg>
                                        Special functions
                                    </span>

                                    <div class="header__accessibility__dropdown ha__dropdown">
                                        <div class="ha__dropdown__content">
                                            <h4 class="ha__title">View:</h4>
                                            <div class="custom-form-group">
                                                <div class="custom-form-check">
                                                    <input
                                                        id="normalDesign"
                                                        name="designPatterns"
                                                        class="custom-form-check-input"
                                                        type="radio"
                                                        value="normalDesign"
                                                    />
                                                    <label class="custom-form-check-label" for="normalDesign">
                                                        Normal design
                                                    </label>
                                                </div>

                                                <div class="custom-form-check">
                                                    <input
                                                        id="blackAndWhiteDesign"
                                                        name="designPatterns"
                                                        class="custom-form-check-input"
                                                        type="radio"
                                                        value="blackAndWhiteDesign"
                                                    />
                                                    <label class="custom-form-check-label" for="blackAndWhiteDesign">
                                                        Black and white design
                                                    </label>
                                                </div>
                                            </div>

                                            <h4 class="ha__title">Font size:</h4>
                                            <div class="ha__btn-group">
                                                <button id="fontSizeMin" class="ha_btn">A-</button>
                                                <button id="fontSizeDefault" class="ha_btn">A</button>
                                                <button id="fontSizeMax" class="ha_btn">A+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div id="mobileVersion" class="mobile-version">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M16 18H7V4h9m-4.5 18a1.5 1.5 0 0 1-1.5-1.5a1.5 1.5 0 0 1 1.5-1.5a1.5 1.5 0 0 1 1.5 1.5a1.5 1.5 0 0 1-1.5 1.5m4-21h-8A2.5 2.5 0 0 0 5 3.5v17A2.5 2.5 0 0 0 7.5 23h8a2.5 2.5 0 0 0 2.5-2.5v-17A2.5 2.5 0 0 0 15.5 1z" fill="currentColor"></path></svg>
                                    mobile version
                                </div>
                            </li>

                            <li>
                                <a href="#!" class="header__top__menu__link">
                                    <span><i class="fas fa-sitemap"></i></span>
                                    Site map
                                </a>
                            </li>
                        </ul>

                        <a href="#modal1" class="header__top__search modal-trigger">
                            <span><i class="fas fa-search"></i></span>
                            TYPE SEARCH TERM HERE
                        </a>
                    </div>
                </section>
            </div>

            <div class="header__bottom">
                <section class="container">
                    <div class="header__bottom__list">
                        <div class="header__bottom__logo">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('front/foto/logo.svg') }}" alt="logo">
                            </a>
                        </div>

                        <section class="header__bottom__burger__menu sidenav" id="slide-out">
                            <ul class="header__bottom__menu">
                                <li>
                                    <h4 class="header__bottom__links">
                                        The Academy
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="{{ route('about') }}" class="header__bottom__link">
                                                    АКАДЕМИЯ
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('advisory') }}" class="header__bottom__link">
                                                    Наблюдательный совет
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('leadership') }}" class="header__bottom__link">
                                                    Руководство
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('normsStatements') }}" class="header__bottom__link">
                                                    Нормативы, акты
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('departmentsStaffs') }}" class="header__bottom__link">
                                                    Отделы и Сотрудники
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#!" class="header__bottom__link">
                                                    Научный совет
                                                </a>
                                            </li>


                                        </ul>

                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="{{ route('faculty') }}" class="header__bottom__link">
                                                    Факультет переподготовки
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('faculty') }}" class="header__bottom__link">
                                                    Факультет практической дипломатии
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="{{ route('photogallerys') }}" class="header__bottom__link">
                                                    Фотогалерея
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('videoGallery') }}" class="header__bottom__link">
                                                    Видеогалерея
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="{{ route('jobVacancy') }}" class="header__bottom__link">
                                                    Вакансии
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('E_reception') }}" class="header__bottom__link">
                                                    Электронная приемная
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        Programmes
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="{{ route('programmes') }}" class="header__bottom__link">
                                                    Programmes
                                                </a>
                                            </li>

                                            <li>
                                                <a href="Programmes.html" class="header__bottom__link">
                                                    Master
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        admission
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="Programmes.html" class="header__bottom__link">
                                                    Programmes
                                                </a>
                                            </li>

                                            <li>
                                                <a href="Programmes.html" class="header__bottom__link">
                                                    Master
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <a href="{{ route('research') }}" class="header__bottom__link">research</a>
                                </li>

                                <li>
                                    <a href="International.html" class="header__bottom__link">international</a>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        news
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="News.html" class="header__bottom__link">
                                                    news
                                                </a>
                                            </li>

                                            <li>
                                                <a href="tenders.html" class="header__bottom__link">
                                                    Tenders
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <a href="Contacts.html" class="header__bottom__link">contacts</a>
                                </li>
                            </ul>
                        </section>

                        <section class="header__ru__list__caer">
                             <!-- language start -->

                            <div class="header__ru">
                                <ul>

                                <div class="header__ru_cart dropdown-trigger"data-target='dropdown1'>
                                    <a data-target='dropdown1' class="header__en__link">{{ strtoupper(app()->getLocale()) }}</a>
                                    <span><i class="fas fa-angle-down"></i></span>
                                </div>

                                <div class="header__ru_none dropdown-content" id='dropdown1'>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if($localeCode != app()->getLocale())
                                        <div class="header__ru_list @if($localeCode == app()->getLocale()) active @endif">
                                            <a rel="alternate" class="header__en__link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ strtoupper($localeCode) }}
                                            </a>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </ul>
                            </div>

                            <!-- language start -->

                            <button class="header__burger__none sidenav-trigger" data-target="slide-out"><i class="fas fa-bars"></i></button>
                        </section>

                    </div>
                </section>
            </div>
        </div>

        <div class="header__form__cart modal" id="modal1">
            <form action="#!" class="header__form">
                <input class="header__form__input" placeholder="Поиск" type="search">
                <button class="header__form__button" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </header>

    <!-- header end -->

    @yield('content')

    <!-- footer start -->

    <footer>
        <div class="footer">
            <section class="container">
                <div class="footer__cart">
                    <div class="footer__list">
                        <div class="footer__item__list">
                            <div class="footer__logo">
                                <a href="{{ route('/') }}">
                                    <img src="{{ asset('front/foto/logo_footer.svg') }}" alt="footer">
                                </a>
                            </div>

                            <ul class="footer__icons__menu">
                                <li>
                                    <a href="#!" class="footer__icons__link">
                                        <span><i class="fab fa-instagram"></i></span>
                                        Instagram
                                    </a>
                                </li>

                                <li>
                                    <a href="#!" class="footer__icons__link">
                                        <span><i class="fab fa-facebook-f"></i></span>
                                        Facebook
                                    </a>
                                </li>

                                <li>
                                    <a href="#!" class="footer__icons__link">
                                        <span><i class="fab fa-telegram-plane"></i></span>
                                        Telegram
                                    </a>
                                </li>
                            </ul>

                            <ul class="footer__address">
                                <li>
                                    <a class="footer__address__link">
                                        <span>address:</span>
                                        54 Mustakillik Ave., Tashkent 100007, Uzbekistan
                                    </a>
                                </li>

                                <li>
                                    <a href="tel:(+998 71) 267-39-50" class="footer__address__link">
                                        <span>Phone:</span>
                                        (+998 71) 267-39-50
                                    </a>
                                </li>

                                <li>
                                    <a href="tel:(+998 71) 267-09-00:" class="footer__address__link">
                                        <span>Fax:</span>
                                        (+998 71) 267-09-00:
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__item__list">
                            <ul class="footer__menu">
                                <li>
                                    <a href="TheAcademy.html" class="footer__menu__link">The Academy</a>
                                </li>

                                <li>
                                    <a href="Programmes.html" class="footer__menu__link">Programmes</a>
                                </li>

                                <li>
                                    <a href="Programmes.html" class="footer__menu__link">admission</a>
                                </li>
                            </ul>

                            <ul class="footer__menu">
                                <li>
                                    <a href="News.html" class="footer__menu__link">news</a>
                                </li>

                                <li>
                                    <a href="Contacts.html" class="footer__menu__link">contacts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="footer__bottom">
                <section class="container">
                    <div class="footer__bottom__list">
                        <h4 class="footer__bottom__title__h4">«Diplomatic Academy» Все права защищены</h4>
                        <h4 class="footer__bottom__title__h4">© Copyright 2022 - Web developed by <a href="http://sos.uz" target="_blank">SOS Group</a></h4>
                    </div>
                </section>
            </div>
        </div>
    </footer>

    <!-- footer end -->


    <!-- --------------------------------------- -->

    <div id="highlightMenu" class="highlight-menu">
		<!-- <span id="highlight_share" class="highlight-menu__item disabled">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z"></path></svg>
		</span> -->
		<span id="highlight_textToSpeech" class="highlight-menu__item">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.84-5 6.7v2.07c4-.91 7-4.49 7-8.77c0-4.28-3-7.86-7-8.77M16.5 12c0-1.77-1-3.29-2.5-4.03V16c1.5-.71 2.5-2.24 2.5-4M3 9v6h4l5 5V4L7 9H3Z"></path></svg>
		</span>
		<span id="highlight_resetTextToSpeech" class="highlight-menu__item">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4L9.91 6.09L12 8.18M4.27 3L3 4.27L7.73 9H3v6h4l5 5v-6.73l4.25 4.26c-.67.51-1.42.93-2.25 1.17v2.07c1.38-.32 2.63-.95 3.68-1.81L19.73 21L21 19.73l-9-9M19 12c0 .94-.2 1.82-.54 2.64l1.51 1.51A8.916 8.916 0 0 0 21 12c0-4.28-3-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71m-2.5 0c0-1.77-1-3.29-2.5-4.03v2.21l2.45 2.45c.05-.2.05-.42.05-.63Z"></path></svg>
		</span>
	</div>

    <!-- --------------------------------------- -->
    <script src="{{ asset('front/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('front/js/materialize.min.js') }}"></script>
    <script src="{{ asset('front/js/fancyapps-ui.js') }}"></script>
    <script src="{{ asset('front/js/fancybox_main.js') }}"></script>
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/slic.js') }}"></script>
    <script src="{{ asset('front/js/mar_ru.js') }}"></script>
    <script src="{{ asset('front/js/visuallyImpaired.js') }}"></script>
    <script src="{{ asset('front/js/index.js') }}"></script>
</body>
</html>
