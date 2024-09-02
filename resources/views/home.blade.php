@extends('layouts.app')

@section('content')

    <div role="main" class="main">
        <i class="fas fa-arrow-square-down"></i> asdf
        <div class="container py-0">
            <img src="{{ asset('img/logo_ue_poziom_kolor.jpg') }}" class="img-fluid" alt="Logo UE FEKP">
        </div>

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
                                                <img src="img/lazy.png" data-src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                            </span>
                                           Projekt aktywizacji zawodowej
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="img/lazy.png" data-src="{{ asset('img/slides/slide-title-border.png') }}" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 500, 'minWindowWidth': 0, 'animationSpeed': 100, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">WORK-ON 7</h2>
                                        <p class="text-4 text-color-light font-weight-light text-center mb-5 px-5" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Włącz się na lepszą pracę !</p>

                                        <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500" data-plugin-options="{'minWindowWidth': 0}">SPRAWDŹ!</a>

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

                                <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" data-plugin-options="{'minWindowWidth': 0}">SPRAWDŹ!</a>
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
                                <h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Ścieżka FIZJO</h1>
                                <p class="text-4 text-color-light font-weight-light opacity-7 mb-5 text-center px-5"  data-appear-animation="fadeInLeftShorter" data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Poznaj najnowsze techniki pracy z pacjentem i rozpocznij własną praktykę zawodową.</p>

                                <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" data-plugin-options="{'minWindowWidth': 0}">SPRAWDŹ!</a>
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
                        <p>
                            Chcesz wejść na wyższy <span class="highlighted-word">poziom ?</span>
                            <span>Sprawdź czy kwalifikujesz się do udziału w projekcie.</span>
                        </p>

                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Zapisz się teraz</a>
                            <div class="learn-more"><a href="#">dowiedz się więcej</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

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
                    <p>Dzięki funduszam unijnym możemy zaoferować Tobie doradztwo zawodowe, specjalistyczne szkolenia, warsztaty kompetencji miękkich, staż zawodowy i pośrednictwo w znalezieniu lepszej pracy. <span class="text-primary font-weight-bold alternative-font-2">Zainwestuj w siebie i dołącz do naszego projektu</span>.</p>
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

        <div class="container mb-0 pb-4">

            <div class="row">
                <div class="col mb-3">
                    <hr class="my-5">
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-lg-8">
                    <h2 class="font-weight-normal text-7">Naszym uczestnikom <strong class="font-weight-extra-bold">zapewniamy</strong></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Customer Support</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-doc text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">HTML5 / CSS3 / JS</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-social-google text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">500+ Google Fonts</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-pencil text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Colors</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-layers text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Sliders</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-user text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Icons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-menu text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Buttons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-screen-desktop text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4-5 mb-1">Lightbox</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
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
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
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
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <hr class="solid my-5"> --}}


        </div>


        <div class="container">
            <hr class="solid my-3">
            <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Ścieżka IT</strong> w liczbach</h2>
        </div>
        <section class="section section-primary border-top-0 mb-0">
            <div class="container">
                <div class="row counters counters-sm counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="60" data-from="0">60</strong>
                            <label class="opacity-5 text-4 mt-1">Uczestników i Uczestniczek</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="260" data-from="200" data-append="h">200</strong>
                            <label class="opacity-5 text-4 mt-1">Szkoleń</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong data-to="3400" data-from="3000" data-append="zł">3.400 </strong>
                            <label class="opacity-5 text-4 mt-1">stypendium szkoleniowe</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="2000" data-from="1000" data-append="zł/mies.">2.000 </strong>
                            <label class="opacity-5 text-4 mt-1">stypendium stażowe</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <hr class="solid my-3">
            <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Ścieżka FIZJO</strong> w liczbach</h2>
        </div>
        <section class="section section-primary border-top-0 mb-0">
            <div class="container">
                <div class="row counters counters-sm counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="48" data-from="0">48</strong>
                            <label class="opacity-5 text-4 mt-1">Uczestników i Uczestniczek</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="116" data-from="100" data-append="h">100</strong>
                            <label class="opacity-5 text-4 mt-1">Szkoleń</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong data-to="1500" data-from="1000" data-append="zł">1.500 </strong>
                            <label class="opacity-5 text-4 mt-1">stypendium szkoleniowe</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="2000" data-from="1000" data-append="zł/mies.">2.000 </strong>
                            <label class="opacity-5 text-4 mt-1">stypendium stażowe</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mb-0 pb-4">
            <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-6">
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
                <div class="col-lg-6">
                    <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong> Client’s Say</h2>
                    <div class="row">
                        <div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-primary">
                                        <blockquote>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down"></div>
                                        <div class="testimonial-author">
                                            <div class="testimonial-author-thumbnail">
                                                <img src="img/clients/client-1.jpg" class="rounded-circle" alt="" />
                                            </div>
                                            <p><strong>John Doe</strong><span>Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-primary">
                                        <blockquote>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down"></div>
                                        <div class="testimonial-author">
                                            <div class="testimonial-author-thumbnail">
                                                <img src="img/clients/client-1.jpg" class="rounded-circle" alt="" />
                                            </div>
                                            <p><strong>John Doe</strong><span>Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-normal text-6 mb-0">Kwalifikujesz się do udziału w <strong class="font-weight-extra-bold">projekcie</strong> ?</h2>
                            <p class="mb-0">Zapisz się już teraz, rekrutacja ograniczona czasowo.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Zapisz się teraz</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('scripts')

@endpush
