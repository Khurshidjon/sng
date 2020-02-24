<!doctype html>
<!--
COPYRIGHT by HighHay/Mivfx
Before using this theme, you should accept themeforest licenses terms.
http://themeforest.net/licenses
-->

<html class="no-js" lang="en">


<!-- Mirrored from demo.highhay.com/firetime/index-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 09:52:37 GMT -->
<style>
    .helpful-link-item{
        font-size: 25px;
        color: #ffffff;
        line-height: 26px;
    }
    .anim-wrapper p{
        margin-bottom: 40px;
    }
    .helpful-link-item:hover{
        color: rgb(219,147,29);
        text-decoration: underline;
    }
    .about-forum{
        line-height: 22px;
    }
    .light-logo{
        height: 86px !important;
    }
    .logo-text{
        margin-top: 7px !important;
    }
</style>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Page Title Here -->
    <title>Форум регинов СНГ ' 20</title>

    <!-- Page Description Here -->
    <meta name="description" content="Создавая диалог и кооперацию регионов СНГ">

    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

    <!-- Web fonts and Web Icons -->
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/opensans/stylesheet.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/roboto/stylesheet.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/ionicons.min.css">

    <!-- Vendor CSS style -->
    <link rel="stylesheet" href="{{ asset('landing') }}/css/pageloader.css">

    <!-- Uncomment below to load individualy vendor CSS -->
    <link rel="stylesheet" href="{{ asset('landing') }}/css/foundation.min.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/js/vendor/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/js/vendor/jquery.fullpage.min.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/js/vegas/vegas.min.css">

    <!-- Main CSS files -->
    <link rel="stylesheet" href="{{ asset('landing') }}/css/main.css">
    <!-- alt layout -->
    <!--	<link rel="stylesheet" href="./css/style-color1.css">-->
    @toastr_css
    <script src="{{ asset('landing') }}/js/vendor/modernizr-2.7.1.min.js"></script>
    @jquery
    @toastr_js
    @toastr_render
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('dynamicClock').innerHTML =
                h + ":" + m + ":" + s + " " + "(GMT +5)";
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>

    @php
        $lang = App::getLocale();
        if ($lang == 'uz'){
            $week = ['Yakshanba', 'Dushanba', 'Seshanba', 'Chorshanba', 'Payshanba', 'Juma', 'Shanba'];
            $years = ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'Iyun', 'Iyul', 'Avgust', 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr'];
        }elseif ($lang == 'en'){
            $week = [ 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
            $years = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
        }elseif($lang == 'ru'){
            $week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            $years = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        }elseif($lang == 'ar'){
            $week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            $years = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        }elseif($lang == 'tr'){
            $week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            $years = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        }
    @endphp
</head>

<body id="menu" class="hh-body alt-bg left-light" onload="startTime()">
<!--[if lt IE 8]>
<p class="browsehappy">Создавая диалог и кооперацию регионов СНГ</p>
<![endif]-->

<!-- Page Loader -->
<div class="page-loader" id="page-loader">
    <div>
        <div class="icon ion-spin"></div>
        <p>загрузка ...</p>
    </div>
</div>

<!-- BEGIN OF site header Menu -->
<header class="hh-header header-top">
    <!-- Begin of logo -->
    <div class="logo-wrapper">
        <a href="{{ route('frontend.index') }}">
            <h2 class="logo">
                    <span class="logo-img">
                        <img class="light-logo" src="{{ asset('landing') }}/img/logo1.png" alt="Logo">
                    </span>
                <span class="logo-text">
                        <span class="title">Форум регионов СНГ ' 20</span>
                        <span class="desc">Ташкент, Республика Узбекистан<br> Сентябрь, 2020</span>
                    </span>
            </h2>
        </a>
    </div>
    <!-- End of logo -->

    <!-- Begin of menu icon -->
    <a class="menu-icon">
        <div class="bars">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </a>
    <!-- End of menu icon -->

    <!-- Begin of menu -->
    <nav class="menu-links">
        <ul class="links">
            <li><a href="#home">Главная</a></li>
            <li><a href="#about-forum">О форуме</a></li>
            <li><a href="#partner">Стать партнером</a></li>
            <li><a href="#documents">Документы</a></li>
            <li><a href="#helpful-links">Полезные ссылки</a></li>
            <li><a href="#partner">Контакты</a></li>
            <li class="cta"><a target="_blank"  href="{{ route('frontend.application') }}">Заявка на участие</a></li>
        </ul>
    </nav>
    <!-- End of menu -->
</header>
<!-- END OF site header Menu-->
<!-- BEGIN OF page cover -->
<div class="hh-cover page-cover">
    <!-- Cover Background -->
    <div class="cover-bg pos-abs full-size bg-img  bg-blur-0" data-image-src="{{ asset('landing') }}/img/bg-default.jpg"></div>


    <!--BEGIN OF Static video bg  - uncomment below to use Video as Background-->
    <div id="container" class="video-container show-for-medium-up">
        <video autoplay="autoplay" loop="loop"  muted="muted"
               width="640" height="360">
            <source src="{{ asset('landing') }}/vid/loop-bg.mp4" type="video/mp4">
        </video>
    </div>
    <!--END OF Static video bg-->

    <!--BEGIN OF Youtube video bg  - uncomment/comment below to use/or not Youtube Video as Background-->
    <!--<div class='youtube-container video-container show-for-medium-up'>
            <iframe frameborder="0"
            src="https://youtube.com/embed/wqeuYB7KMhY?autoplay=1&controls=0&showinfo=0&autohide=1">
            </iframe>
        </div>-->
    <!--END OF Youtube video bg-->


    <!-- Particles as background - uncomment below to use particles/snow -->
    <!--<div  id="particles-js" class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgba(37, 38, 42, 0.81)"></div>-->

    <!-- Transluscent mask as filter -->
    <div class="cover-bg-mask pos-abs full-size bg-color" data-bgcolor="rgba(29, 29, 29, 0.2)"></div>

</div>
<!--END OF page cover -->

<!-- BEGIN OF page main content -->
<main class="page-main fullpg" id="mainpage">

    <!-- Begin of home section -->
    <div class="section section-home fp-auto-height-responsive" data-section="home">
        <div class="content">
            <!-- Begin of Left Content -->
            <section class="c-left anim">
                <div class="wrapper fit">

                    <!-- Logo Instead of clock -->
                    <!--<div class="home-logo ">
                        <img class="" src="img/logo.png" alt="Logo">
                    </div>-->

                    <!-- Coutdown Clock -->
                    <div class="clock clock-countdown">
                        <div class="site-config"
                             data-date="01/01/2020 00:00:00"
                             data-date-timezone="+0"
                        ></div>
                        <div class="clock-wrapper">
                            <div class="tile tile-days">
                                <span class="days">2020</span>
                                <span class="txt">сентябрь</span>
                            </div>
                          {{--  <div class="clock-hms">
                                <div class="tile tile-minutes">
                                    <span class="minutes">10</span>
                                    <span class="txt">сентябрь</span>
                                </div>
                                <div class="tile tile-seconds">
                                    <span class="seconds">11</span>
                                    <span class="txt">сентябрь</span>
                                </div>
                            </div>--}}
                        </div>
                    </div>

                </div>
            </section>
            <!-- End of Left Content -->

            <!-- Begin of Right Content -->
            <section class="c-right anim">
                <div class="wrapper">

                    <!-- Title and description -->
                    <div class="title-desc">
                        <div class="t-wrapper">
                            <!-- Logo -->
                            <!--<div class="logo home-logo ">
                                <img class="" src="img/logo.png" alt="Logo">
                            </div>-->
                            <!-- Title -->
                            <header class="title">
                                <h2><strong>Форум регионов</strong> <br> СНГ ' 20</h2>
                                <h3>Создавая диалог и кооперацию регионов СНГ</h3>
                            </header>
                            <!-- desc -->
                        </div>
                    </div>

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn arrow-circ-btn"  href="#about-forum">
                            <span class="txt">О форуме</span>
                            <span class="arrow-icon"></span>
                        </a>

                        <a class="btn arrow-circ-btn" target="_blank"  href="{{ route('frontend.application') }}">
                            <span class="txt">Заявка на участие</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>

                </div>
            </section>
            <!-- End of Right Content -->
        </div>
    </div>
    <!-- End of home section -->

    <!-- Begin of about us section -->
    <div class="section section-about section-cent fp-auto-height-responsive" data-section="about-forum">

        <section class="content clearfix">
            <!-- content title -->
            <!--<div class="c-title">
                <h2>Our company</h2>
            </div>-->

            <!-- left elements -->
            <div class="c-left anim">
                <div class="wrapper">
                    <!-- title and description -->
                    <header class="title-desc">
                        <h3 class="title">О форуме</h3>
                        <h2>Экономика</h2>
                        <p>Скачайте документ, чтобы узнать больше</p>
                    </header>

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn arrow-circ-btn"  href="{{ asset('landing/files/about-forum.docx') }}" download>
                            <span class="txt">Скачать</span>
                            <span class="arrow-icon"></span>
                        </a>
                        <a class="btn arrow-circ-btn"  href="#helpful-links">
                            <span class="txt">Полезные ссылки</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of left elements -->

            <!-- right elements -->
            <div class="c-right anim">
                <!-- title and texts wrapper-->
                <div class="wrapper">
                    <!-- title and description -->
                    <div class="title-desc">
                        <h4>О Форуме</h4>
                        <p class="about-forum">
                            В ходе заседания Совета глав государств СНГ 10-11 октября 2019 года в г. Ашхабаде (Туркменистан) обсужден комплекс вопросов, направленных на развитие и укрепление многостороннего сотрудничества в рамках Содружества, состоялся обмен мнениями по международным проблемам, представляющим взаимный интерес.
                        </p>
                        <p class="about-forum">
                            По итогам саммита были приняты ряд документов, в том числе Решение
                            о переходе председательства в СНГ к Республике Узбекистан в 2020 году
                            и Декларация о стратегическом экономическом сотрудничестве государств-участников СНГ.
                            В рамках Ашхабадского саммита государств-участников СНГ Президентом Республики Узбекистана Ш.М. Мирзиёевым было отмечено, что в период председательства Узбекистана в Содружестве Независимых Государств, планируется проведение более 60 мероприятий, в том числе Форума регионов СНГ.
                        </p>
                        <p class="about-forum">
                            Форум регионов СНГ послужит площадкой для координации взаимодействия регионов по разработке и реализации проектов, направленных на достижение результатов в торгово-экономической, инвестиционной, транспортно-коммуникационной, сельскохозяйственной, туристской, образовательной сферах, а также поддержке культурных связей между регионами государств - участников СНГ.
                        </p>
                        <!--<div class="illustr">
                            <img src="/img/bg-default4.jpg" alt="Illustration">
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- end of right elements -->
        </section>
    </div>
    <!-- End of about us section -->

    <!-- Begin of about us section -->
    <div class="section section-about section-cent fp-auto-height-responsive" data-section="documents">

        <section class="content clearfix">
            <!-- content title -->
            <!--<div class="c-title">
                <h2>Our company</h2>
            </div>-->

            <!-- left elements -->
            <div class="c-left anim">
                <div class="wrapper">
                    <!-- title and description -->
                    <header class="title-desc">
                        <h3 class="title">Документы</h3>
                        <h2>Форума регионов <br> СНГ ' 20</h2>
                        <p> Ташкент, Узбекистан <span style="font-size: 40px" class="ion-location"></span></p>
                    </header>
                </div>
            </div>
            <!-- end of left elements -->

            <!-- right elements -->
            <div class="c-right anim">
                <!-- title and texts wrapper-->
                <div class="wrapper">
                    <!-- title and description -->
                    <div class="title-desc">
                        <!-- Action button -->
                        <div class="cta-btns">
                            <h5>КОНЦЕПЦИЯ Форума регионов СНГ</h5>
                            <a class="btn arrow-circ-btn"  href="{{ asset('landing/files/konsepsiya.doc') }}" download>
                                <span class="txt">Скачать</span>
                                <span class="arrow-icon"></span>
                            </a>
                            <hr>
                            <h5>ПРОГРАММА мероприятий Форума регионов СНГ</h5>
                            <a class="btn arrow-circ-btn"  href="{{ asset('landing/files/programma.doc') }}" download>
                                <span class="txt">Скачать</span>
                                <span class="arrow-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of right elements -->
        </section>
    </div>
    <!-- End of about us section -->


    <!-- Begin of services section -->
    <div class="section section-services fp-auto-height-responsive" data-section="helpful-links">

        <section class="content clearfix">

            <!-- right elements -->
            <div class="c-right anim">
                <div class="wrapper">
                    <!-- Begin of features/services/offers -->
                    <ul class="item-list row small-up-1 medium-up-2 large-up-2">
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <div class="desc">
                                    <p><a class="helpful-link-item" target="_blank" href="http://invest.gov.uz/ru/investor-taxonomy/potential/">Инвестиционный потенциал Узбекистана</a></p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <div class="desc">
                                    <p><a class="helpful-link-item" target="_blank" href="https://data.gov.uz/ru">Портал открытых данных Республики Узбекистан</a></p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <div class="desc">
                                    <p><a class="helpful-link-item" target="_blank" href="https://drive.google.com/drive/folders/1ant5NY2wkIiJwSCfAJZHK4VaG2fYAirR">Регионы Узбекистана</a></p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <div class="desc">
                                    <p><a  class="helpful-link-item" target="_blank" href="https://mift.uz/ru/menu/ob-uzbekistane">Об Узбекистане</a></p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <div class="desc">
                                    <p><a  class="helpful-link-item" target="_blank" href="http://cis.minsk.by/map">Государства – участники СНГ</a></p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <div class="desc">
                                    <p><a  class="helpful-link-item" target="_blank" href="https://www.uzexpocentre.uz/">АО НВК "Узэкспоцентр"</a></p>
                                </div>
                            </div>
                        </li>


                    </ul>
                    <!-- End of features/services/offers -->
                </div>
            </div>
            <!-- end of right elements -->

            <!-- left elements -->
            <div class="c-left anim">
                <div class="wrapper">
                    <!-- title -->
                    <header class="title-desc">
                        <h2>Полезные ссылки</h2>
                    </header>

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn arrow-circ-btn"  href="#partner">
                            <span class="txt">Контакты</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of left elements -->

        </section>

    </div>
    <!-- End of services section -->

    <!-- Begin of contact section -->
    <div class="section section-contact fp-auto-height-responsive" data-section="partner">

        <section class="content clearfix">

            <!-- Begin of  left elements -->
            <div class="c-left anim">
                <div class="wrapper contact-wrapper">
                    <!-- title -->
                    <header class="title-desc">
                        <h2 class="page-title">Контакты</h2>
                    </header>

                    <!-- Begin of contact list -->
                    <ul class="contact-list c-features row small-up-1 medium-up-1 large-up-2">
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <h3 class="title">Адрес</h3>
                                <div class="desc">
                                    <p>
                                        ул. Ислама Каримова, 45а, Ташкент, Узбекистан, 100003
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column anim">
                            <div class="item-desc">
                                <h3 class="title">Контакт</h3>
                                <div class="desc">
                                    <p>
                                        Тел : <a href="tel: +998 (71) 232 65-90">+998 (71) 232 65-90</a>
                                        <br>
                                        Email : <a href="mailto: info@mineconomy.uz">info@mineconomy.uz</a>
                                        <br>
                                        Email : <a href="mailto: nkhusanov@mineconomy.uz">nkhusanov@mineconomy.uz</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End of contact list -->

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn arrow-circ-btn"  href="#home">
                            <span class="txt">Верх</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of left elements -->


            <!-- Begin of right elements -->
            <div class="c-right">
                <div class="wrapper c-form">
                    <!-- begin of contact form content -->
                    <div class="c-content card-wrapper">
                        <form class="message form send_message_form" method="post" action="{{ route('frontend.become-partners-submit') }}" id="message_form">
                            @csrf
                            <div class="form-header clearfix">
                                <h3>
                                    Стать партнером
                                </h3>
                                <div class="btns ">
                                    <button id="submit-message" type="submit" class="btn arrow-circ-btn email_b" name="submit_message">
                                        <span class="txt">Отправить</span>
                                        <span class="arrow-icon"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="fields clearfix">
                                <div class="input name">
                                    <label for="mes-imya">Имя :</label>
                                    <input id="mes-imya" name="name" type="text" placeholder="" class="form-success-clean" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="fields clearfix">
                                <div class="input bottom">
                                    <label for="mes-tel">Тел :</label>
                                    <input id="mes-tel" type="tel" placeholder="" name="phone" class="form-success-clean" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="fields clearfix">
                                <div class="input bottom">
                                    <label for="mes-e-mail">Email :</label>
                                    <input id="mes-e-mail" type="email" placeholder="" name="email" class="form-success-clean" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="fields clearfix">
                                <div class="input bottom">
                                    <label for="mes-company">Компания</label>
                                    <textarea id="mes-company" placeholder="..." name="company" class="form-success-clean"></textarea>

                                    <div>
                                        <p class="message-ok invisible form-text-feedback form-success-visible">Your message has been sent, thank you.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="fields clearfix no-border">
                                <label style="left: unset; top: unset; width: 127px; cursor: pointer" for="captcha" id="refresh-captcha"><span>{!! captcha_img('flat') !!}</span></label>
{{--                                <span id="captcha-img" class="form-success-clean">{!! captcha_img('flat') !!}</span> <span class="ion-android-refresh"  style="cursor: pointer" ></span>--}}
                                <input style="padding-left: 137px;" type="text" id="captcha" name="captcha"  class="form-success-clean" autocomplete="off" required>
                            </div>
                        </form>

                    </div>
                    <!-- end of contact form content -->
                </div>
            </div>
            <!-- End of right elements -->
        </section>

    </div>
    <!-- End of contact section -->

</main>

<!-- BEGIN OF page footer -->
<footer id="site-footer" class="site-footer">
    <!-- social networks -->
    <div class="contact">
        <ul class="socials">
            <li><a class="circ-btn" href="https://www.facebook.com/mineconomy.uz"><i class="icon ion-social-facebook"></i></a></li>
        </ul>
    </div>

    <!-- Notes -->
    <div class="note">
        <p>&copy; Авторское право <a href="http://mineconomy.gov.uz/" target="_blank"><span class="marked">Министерство экономики и промышленности Республики Узбекистан</span></a>, {{ date("Y") }}</p>
        <p style="font-size: 20px">
            <span>{{ date('d') .' '. $years[date('n')-1] .' '. date('Y') .' '. $week[date('w')] . ' '}} </span>
            <span id="dynamicClock"></span>
        </p>
    </div>

    <!-- Arrows Scroll down arrow -->
    <!-- Move it next to fp nav using javascript -->
    <div class="s-footer scrolldown">
        <a class="down btn">
            <span class="text"></span>
        </a>
    </div>
    <!-- End of Scroll down arrow -->
</footer>
<!-- END OF site footer -->


<!-- scripts -->
<!-- All Javascript plugins goes here -->
<script src="{{ asset('landing') }}/js/vendor/jquery-1.12.4.min.js"></script>
<!-- All vendor scripts -->
<script src="{{ asset('landing') }}/js/vendor/all.js"></script>
<script src="{{ asset('landing') }}/js/particlejs/particles.min.js"></script>


<!-- Countdown script -->
<script src="{{ asset('landing') }}/js/jquery.downCount.js"></script>

<!-- Form script -->
<script src="{{ asset('landing') }}/js/form_script.js"></script>

<!-- Javascript main files -->
<script src="{{ asset('landing') }}/js/main.js"></script>
<script>
    $(document).on('click', '#refresh-captcha', function (e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route('captcha-refresh') }}',
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function (data) {
                $('#refresh-captcha').html(data);
                // console.log(data);
            }
        })
    })
</script>
</body>
</html>


