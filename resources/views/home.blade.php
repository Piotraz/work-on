@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        <div class="container py-0">
            <img src="{{ asset('img/logo_ue_poziom_kolor.jpg') }}" class="img-fluid" alt="Logo UE FEKP">
        </div>

        {{-- Slider --}}
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="{{ asset('img/lazy.png') }}" data-src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                            </span>
                                           Projekt aktywizacji zawodowej
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="{{ asset('img/lazy.png') }}" data-src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 500, 'minWindowWidth': 0, 'animationSpeed': 100, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">WORK-ON 7</h2>
                                        <p class="text-4 text-color-light font-weight-light text-center mb-5 px-5" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Włącz się na lepszą pracę !</p>

                                        <a href="#home-start" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500" data-plugin-options="{'minWindowWidth': 0}">SPRAWDŹ!</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative" style="background-image: url({{ asset('img/slider-it.jpg') }}); background-color: #2E3136; background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-1 h-100">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Włącz się do pracy w branży <span class="position-relative">IT <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="{{ asset('img/slides/slide-blue-line.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Ścieżka IT</h1>

                                <p class="text-4 text-color-light font-weight-light opacity-7 mb-5 text-center px-5"  data-appear-animation="fadeInLeftShorter" data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Udział w projekcie to szansa na zmianę profilu zawodowego na bardziej opłacalny.</p>

                                <a href="{{ route('project.it') }}" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" data-plugin-options="{'minWindowWidth': 0}">SPRAWDŹ!</a>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 3 -->
                    <div class="owl-item position-relative" style="background-image: url({{ asset('img/slider-fizjo.jpg') }}); background-color: #2E3136; background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-1 h-100">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Wejdź na wyższy <span class="position-relative">poziom <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="{{ asset('img/slides/slide-blue-line.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Ścieżka FIZJO </h1>
                                <p class="text-4 text-color-light font-weight-light opacity-7 mb-5 text-center px-5"  data-appear-animation="fadeInLeftShorter" data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Poznaj najnowsze techniki, aby skuteczniej pomagać swoim pacjentom.</p>

                                <a href="{{ route('project.fizjo') }}" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" data-plugin-options="{'minWindowWidth': 0}">SPRAWDŹ!</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev" aria-label="Poprzedni"></button>
                <button type="button" role="presentation" class="owl-next" aria-label="Następny"></button>
            </div>
            <div class="owl-dots mb-5">
                <button role="button" class="owl-dot active"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>

        <div class="home-intro bg-primary" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>Chcesz wejść na wyższy <span class="highlighted-word">poziom ?</span>
                            <span>Sprawdź czy kwalifikujesz się do udziału w projekcie.</span>
                        </p>

                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="{{ route('rekrutacja') }}" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Zapisz się teraz</a>
                            <div class="learn-more"><a href="#home-start" data-hash data-hash-offset="0" data-hash-offset-lg="100" >dowiedz się więcej</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Z nami zdobędziesz --}}
        <a id="home-start"></a>
        <div class="container">

            <div class="row text-center pt-3">
                <div class="col-md-10 mx-md-auto">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>Z nami zdobędziesz </span>
                        <span class="word-rotator-words bg-dark">
                            <b class="is-visible">kwalifikacje </b>
                            <b>kompetencje </b>
                            <b>doświadczenie </b>
                            <b>lepszą pracę </b>
                        </span>
                    </h1>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        Projekt <span class="text-primary font-weight-bold alternative-font-2">WORK-ON 7</span> to kompleksowe wsparcie w zdobyciu nowego, lepszego zatrudnienia.
                    </p>
                    <p>Dzięki funduszom unijnym możemy zaoferować Tobie doradztwo zawodowe, specjalistyczne szkolenia, warsztaty kompetencji miękkich, staż zawodowy i pośrednictwo w znalezieniu lepszej pracy. <span class="text-primary font-weight-bold alternative-font-2">Zainwestuj w siebie i dołącz do naszego projektu</span>.</p>
                </div>
            </div>

        </div>

        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="home-concept mt-5">
                <div class="container">

                    <div class="row text-center">
                        <span class="sun"></span>
                        <span class="cloud"></span>
                        <div class="col-lg-2 ms-lg-auto">
                            <div class="process-image">
                                <img src="{{ asset('img/project-home-1.jpg') }}" alt="Doradztwo" />
                                <strong>Doradztwo</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image process-image-on-middle">
                                <img src="{{ asset('img/project-home-2.jpg') }}" alt="Szkolenia" />
                                <strong>Szkolenia</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image">
                                <img src="{{ asset('img/project-home-3.jpg') }}" alt="Staż" />
                                <strong>Staż</strong>
                            </div>
                        </div>
                        <div class="col-lg-4 ms-lg-auto">
                            <div class="project-image">
                                <div id="fcSlideshow" class="fc-slideshow">
                                    <ul class="fc-slides">
                                        <li><img class="img-fluid" src="{{ asset('img/project-home-4-1.jpg') }}" alt="Lepsza praca IT" /></li>
                                        <li><img class="img-fluid" src="{{ asset('img/project-home-4-2.jpg') }}" alt="Lepsza praca FIZJO" /></li>
                                    </ul>
                                </div>
                                <strong class="our-work">Lepsza praca</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Oficjalnie --}}
        <section class="section bg-color-grey section-height-2 border-0 m-0 mb-4">
            <div class="container">
                <h2 class="font-weight-normal text-7">Oficjalnie <strong class="font-weight-extra-bold">o projekcie</strong></h2>
                <div>
                    <p><strong>Ośrodek Szkoleniowo-Wdrożeniowy Marek Szarata Sp. z o.o.</strong> uzyskał dotację z Unii Europejskiej na realizację projektu <span class="text-primary font-weight-bold alternative-font-2">"WORK-ON7 - Włącz się na lepszą pracę"</span> w ramach programu Fundusze Europejskie dla Kujaw i Pomorza 2021-2027.</p>
                    <p>Celem projektu jest poprawa sytuacji na rynku pracy 108 osób dorosłych, w tym 54 kobiet, zamieszkałych w woj. kujawsko-pomorskie, zatrudnionych na umowach krótkoterminowych lub pracujących w ramach umów cywilno-prawnych lub ubogich pracujących.</p>
                    <p>Cel projektu zostanie osiągnięty dzięki dostosowaniu kwalifikacji i kompetencji uczestników do potrzeb lokalnego rynku pracy oraz zdobyciu przez nich doświadczenia zawodowego. </p>
                    <p>Rezultatem będzie zmiana z niepewnego do stabilnego zatrudnienia lub z niepełnego do pełnego zatrudnienia, a także do zmiana stanowiska lub awansu wiążącego się z podwyższeniem wynagrodzenia uczestników projektu.</p>
                    <p class="text-primary font-weight-bold alternative-font-2">#FunduszeUE #FunduszeEuropejskie</p>
                    <p>Okres realizacji projektu: <strong> 01.09.2024 – 31.12.2025</strong></p>
                    <p>Wartość projektu: <strong> 2 048 133,08 zł</strong></p>
                    <p>Wysokość wkładu z Funduszy Europejskich: <strong> 1 841 733,08 zł</strong></p>
                </div>
            </div>
        </section>

        {{-- Zapewniamy --}}
        <div class="container mb-0 pb-4">

            {{-- <hr class="my-5"> --}}
            <div class="row pb-3">
                <div class="col-lg-8">
                    <h2 class="font-weight-normal text-7">Naszym uczestnikom <strong class="font-weight-extra-bold">zapewniamy</strong></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-handshake-simple text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Doradztwo zawodowe</h4>
                                    <p class="mb-4">Spotkanie z doradcą zawodowym, dzięki któremu zbadamy Twój potencjał i określimy Plan Działania w projekcie zgodny z Twoimi predyspozycjami.</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-person-chalkboard text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Szkolenia</h4>
                                    <p class="mb-4">Profesjonalne szkolenia zawodowe ukierunkowanych na kwalifikacje i kompetencje wynikających z potrzeb rynku pracy.</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-sack-dollar text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Stydendium i inne benefity</h4>
                                    <p class="mb-4">Za udział w zajęciach otrzymasz od nas stypendium szkoleniowe. Aby uczyło się przyjemnie i efektywnie, zapewniamy każdego dnia smaczny catering oraz pyszną kawę.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-person-chalkboard text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Akademia kompetencji miękkich</h4>
                                    <p class="mb-4">Szkolenie ukierunkowane na rozwój kluczowych kompetencji miękkich związanych z rozwojem zawodowym i przygotowaniem do procesu rekrutacji, awansu czy zmiany stanowiska pracy.</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-person-digging text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Płatne staże zawodowe</h4>
                                    <p class="mb-4">Szansa na zdobycie lub uzupełnienie doświadczenia zawodowego oraz nabycie praktycznych umiejętności w zakresie wykonywania danego zawodu.</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-handshake-simple text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Pośrednictwo pracy</h4>
                                    <p class="mb-4">Indywidualne spotkania z pośrednikiem pracy w celu uzyskania lepszego zatrudnienia.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="font-weight-normal text-6">Różne ścieżki kariery</h2>

                    <div class="accordion" id="accordion12">
                        <div class="card card-default">
                            <div class="card-header" id="collapse12HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#collapse12One" aria-expanded="false" aria-controls="collapse12One">
                                        <i class="fas fa-laptop-code fa-xl text-color-primary"></i>
                                        Ścieżka IT
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse12One" class="collapse show" aria-labelledby="collapse12HeadingOne" data-bs-parent="#accordion12" style="">
                                <div class="card-body">
                                    <p>Dla osób planujących przekwalifikować się do pracy w branży IT, które nie posiadają kwalifikacji informatycznych, ale dzięki udziałowi w projekcie, nabędą je i wraz z uzyskaniem doświadczenia zawodowego, zmienią branżę na IT.</p>
                                    <a href="{{ route('project.it') }}" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1">Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse12HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#collapse12Two" aria-expanded="false" aria-controls="collapse12Two">
                                        <i class="fas fa-clinic-medical fa-xl text-color-primary"></i>
                                        Scieżka FIZJO <span class="tip tip-primary">new</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse12Two" class="collapse" aria-labelledby="collapse12HeadingTwo" data-bs-parent="#accordion12" style="">
                                <div class="card-body">
                                    <p>Dla fizjoterapeutów i masażystów, którzy posiadają już kwalifikacje do wykonywania zawodu lub nabędą je w najbliższym czasie, ale brakuje im dodatkowych kompetencji, znajomości nowoczesnych technik i umiejętności ich wykorzystania w pracy z pacjentem na najwyższym poziomie.</p>
                                    <a href="{{ route('project.fizjo') }}" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1">Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        {{-- Counter --}}
        <div class="container">
            <hr class="solid my-3">
            <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Poprzednie projekty WORK-ON</strong> w liczbach</h2>
        </div>
        <section class="section section-primary border-top-0 mb-0">
            <div class="container">
                <div class="row counters counters-sm counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="6" data-from="0">6</strong>
                            <label class="opacity-5 text-4 mt-1">Projektów</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="320" data-from="200" data-append="+">320</strong>
                            <label class="opacity-5 text-4 mt-1">Uczestników i Uczestniczek</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong data-to="100" data-from="50" data-append="+">100 </strong>
                            <label class="opacity-5 text-4 mt-1">współpracujących firm</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="75" data-from="25" data-append="%">75 </strong>
                            <label class="opacity-5 text-4 mt-1">wskaźnik zatrudnienia</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Cytaty --}}
        <div class="container mb-0">
            <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col">
                    <h2 class="font-weight-normal text-6 mb-4">Doświadczenie i <strong class="font-weight-extra-bold">skuteczność</strong></h2>
                    <div class="testimonial testimonial-primary">
                        <blockquote>
                            <p class="mb-0">Ośrodek Szkoleniowo-Wdrożeniowy od ponad 25 lat czerpie doświadczenie w organizacji wszelkich form edukacji nastawionej na aktywizację zawodową. Ostatnie projekty unijne z cyklu "WORK-ON" okazały się na tyle skuteczne, że postanowiliśmy uruchomić kolejną, już 7 edycję. Tym razem wspieramy w ramach 2 ścieżek rozwoju: IT i fizjoterapia. W ubiegłych latach spełniliśmy z nawiązką wszystkie wymagane od nas wskaźniki (75%+). </p>
                        </blockquote>
                        <div class="testimonial-arrow-down"></div>
                        <div class="testimonial-author">
                            <div class="testimonial-author-thumbnail">
                                <img src="{{ asset('img/avatar_piotr.webp') }}" class="rounded-circle" alt="Piotr Szarata / Koordynator projektu" />
                            </div>
                            <p><strong>Piotr Szarata</strong><span>Koordynator projektu</span></p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Co o nas</strong> mówią</h2>
                    <div class="row">
                        <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">

                            <div class="col">
                                <div class="testimonial testimonial-primary">
                                    <blockquote>
                                        <p class="mb-0">Jestem absolwentem projektu WORK-ON 6 z grupy Frontend Developer. Udział w projekcie umożliwił mi zdobycie cennego doświadczenia w branży IT. Swój staż odbyłem w firmie Wise People, przyjazne warunki umowy przyczyniły się do zatrudnienia mnie w roli młodszego programisty. W pracy zajmuję się tworzeniem aplikacji webowych w technologii React / Wordpress, a codzienne wyzwania sprawiają, że wciąż uczę się czegoś nowego. Polecam ten projekt młodym ludziom, którzy chcą stawiać swoje pierwsze kroki jako przyszli developerzy.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/clients/client-1.jpg" class="rounded-circle" alt="" />
                                        </div>
                                        <p><strong>Sebastian</strong><span>Absolwent WORK-ON 6</span></p>
                                    </div>
                                </div>
                            </div>

                                <div class="col">
                                    <div class="testimonial testimonial-primary">
                                        <blockquote>
                                            <p class="mb-0">Jestem absolwentem projektu WORK-ON 6 z grupy Frontend Developer. Udział w projekcie umożliwił mi zdobycie cennego doświadczenia w branży IT. Swój staż odbyłem w firmie Wise People, przyjazne warunki umowy przyczyniły się do zatrudnienia mnie w roli młodszego programisty. W pracy zajmuję się tworzeniem aplikacji webowych w technologii React / Wordpress, a codzienne wyzwania sprawiają, że wciąż uczę się czegoś nowego. Polecam ten projekt młodym ludziom, którzy chcą stawiać swoje pierwsze kroki jako przyszli developerzy.</p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down"></div>
                                        <div class="testimonial-author">
                                            <div class="testimonial-author-thumbnail">
                                                <img src="img/clients/client-1.jpg" class="rounded-circle" alt="" />
                                            </div>
                                            <p><strong>Sebastian</strong><span>Absolwent WORK-ON 6</span></p>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- Call to action --}}
        @include("includes.zapisz_sie")

    </div>

@endsection

@push('scripts')

@endpush
