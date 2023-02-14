@extends('layouts.front')

@section('content')


    <!-- academy start -->

    <div class="academy" style="background-image:url(foto/academy_fon.png)">
        <section class="container">
            <div class="academy__cart">
                <h2 class="academy__title__h2">Programmes</h2>
                <ul class="academy__menu">
                    <li>
                        <a href="Programmes.html" class="academy__menu__link">Programmes</a>
                    </li>
                    <li>
                        <a href="programmes_in.html" class="academy__menu__link">Programmes</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- academy end -->


    <!-- programmes_in start -->

    <div class="programmes_in">
        <section class="container">
            <div class="programmes_in__cart">

                <div class="programmes_in__list">
                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">Course type:</h4>
                        <h3 class="programmes_in__title__h3">Single honours</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">Delivery mode:</h4>
                        <h3 class="programmes_in__title__h3">Classroom</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">Study mode:</h4>
                        <h3 class="programmes_in__title__h3">Full time</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">Duration:</h4>
                        <h3 class="programmes_in__title__h3">One years</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">Start date:</h4>
                        <h3 class="programmes_in__title__h3">September 2022</h3>
                    </div>

                    <div class="programmes_in__list__item">
                        <h4 class="programmes_in__title__h4">Application deadline:</h4>
                        <h3 class="programmes_in__title__h3">26 January 2022</h3>
                    </div>
                </div>

                <div class="programmes_in__item">
                    <h2 class="about__title__h2">Описание курса</h2>
                    <div class="academy_contint__text clearfix">
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        </p>
                    </div>
                </div>

                <div class="programmes_in__item">
                    <h2 class="about__title__h2">Lorem ipsum dolor sit amet</h2>
                    <div class="academy_contint__text clearfix">
                        <p>
                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem <a href="#!">ullam corporis suscipit</a> laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                            <br><br>
                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        </p>
                    </div>
                </div>

                <div class="programmes_in__video">
                    <p class="text-center">
                        <a data-fancybox href="video/video_2022-12-23_16-09-42.mp4">
                            <section>
                                <img class="inline" width="500" alt="" src="foto/programmes_video.png"/>
                                <!-- play start -->

                                <div class="button__min is-play" href="#">
                                    <div class="button-outer-circle has-scale-animation"></div>
                                    <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                    <div class="button-icon is-play">
                                        <img class="about__item__img__play" alt="All" src="foto/pley.svg">
                                    </div>
                                </div>

                                <div class="programmes_in__video__item">
                                    <h3 class="programmes_in__video__title">
                                        Quis nostrud exercitation ullamco laboris nisi
                                    </h3>

                                    <h4 class="programmes_in__video__data">
                                        10.04.2022
                                    </h4>
                                </div>

                                <!-- play end -->
                            </section>
                        </a>
                    </p>
                </div>

                <div class="programmes_in__item clearfix">

                    <div class="programmes_in__img">
                        <img src="foto/programmes_Img.png" alt="programmes">
                    </div>

                    <div class="academy_contint__text">
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        </p>
                    </div>
                </div>

                <div class="programmes_in__item">
                    <h2 class="about__title__h2">Отзывы выпускников</h2>

                    <div class="programmes_in__reviews__list">

                        <div class="programmes_in__reviews__item">
                            <div class="programmes_in__reviews__img">
                                <img src="foto/programmes_in_1.png" alt="">
                            </div>

                            <h3 class="programmes_in__reviews__name">John Doe</h3>
                            <h4 class="programmes_in__reviews__graduate">Выпускник 2017 года</h4>
                            <div class="programmes_in__reviews__text">
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                            </div>
                        </div>

                        <div class="programmes_in__reviews__item">
                            <div class="programmes_in__reviews__img">
                                <img src="foto/programmes_in_2.png" alt="">
                            </div>

                            <h3 class="programmes_in__reviews__name">Alice Chains</h3>
                            <h4 class="programmes_in__reviews__graduate">Выпускник 2020 года</h4>
                            <div class="programmes_in__reviews__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                </p>
                            </div>
                        </div>

                        <div class="programmes_in__reviews__item">
                            <div class="programmes_in__reviews__img">
                                <img src="foto/programmes_in_3.png" alt="">
                            </div>

                            <h3 class="programmes_in__reviews__name">Ben Dyer</h3>
                            <h4 class="programmes_in__reviews__graduate">Выпускник 2018 года</h4>
                            <div class="programmes_in__reviews__text">
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="programmes_in__reviews__button">
                        <a href="#!" class="programmes_in__reviews__link">Подать заявку</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- programmes_in end -->



@endsection
