@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark mb-2">Front-end developer</h1>
                        <span class="sub-title text-dark"><strong>Ścieżka IT</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>Ścieżka IT</li>
                            <li class="active">Front-end developer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            {{-- Rekrutacja baner--}}
            @include("includes.rekrutacja_it")

            {{-- Zdjęcie główne karuzela --}}
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

                    <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}" style="height: 510px;">
                        <div>
                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                <img src="{{ asset('img/kurs-frontend.jpg') }}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row pt-4 mt-2">
                <div class="col-md-8 mb-4">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">O <strong class="font-weight-extra-bold">szkoleniu</strong></h2>
                    <p>Kurs Front-end developer zakłada naukę tworzenia profesjonalnych stron i aplikacji internetowych z wykorzystaniem aktualnych narzędzi, takich jak: HTML/CSS, Javascript (JS), Raect.js, Wordpress. Dodatkowo w programie szkolenia znalazły się zagadnienia związane z wykorzystaniem narzędzi developerskich i obsługa systemu kontroli wersji Git. Całość uzupełnia nauka pracy w grupie w metodyce Scrum.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Dla <strong class="font-weight-extra-bold">kogo</strong></h2>
                    <p>Programiści front-end dbają, aby strona była czytelna i intuicyjna dla użytkowników na wszystkich dostępnych urządzeniach (komputer, tablet, telefon). Jeśli masz zmysł estetyczny, dbasz o szczegóły, cechuje Cię kreatywność i lubisz tworzyć przyjemne dla oka rzeczy, to frontend jest dla Ciebie. Nie ma znaczenia jakie masz wykształcenie, liczą się predyspozycje i motywacja. Przy odpowiednim zaangażowaniu w kurs możesz zmienić swoją drogę zawodową i wejść do IT.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Program</strong> kursu</h2>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> HTML i CSS</li>
                        <li><i class="fas fa-check"></i> Javascript (JS) i React.js</li>
                        <li><i class="fas fa-check"></i> Wordpress i WooCommerce</li>
                        <li><i class="fas fa-check"></i> Narzędzia developerskie i Git</li>
                        <li><i class="fas fa-check"></i> Metodyka Scrum</li>
                        <li><i class="fas fa-check"></i> Tworzenie projektu własnej strony/aplikacji internetowej</li>
                    </ul>
                    <p>Tworzenie stron internetowych to dziedzina bardzo praktyczna i wymagająca ciągłej nauki, dlatego zajęcia prowadzić będą praktycy, którzy pokażą Tobie jak radzić sobie w świecie webdevelopera.</p>
                    <p>Bardzo ważnym elementem programu szkolenia jest blok poświęcony na stworzenie projektu strony bądź aplikacji internetowej w metodyce Scrum. W grupach 3-4 osobowych, pod opieką trenera, będziesz tworzyć realny produkt, którym będzie można pochwalić się przed przyszłym pracodawcą.</p>
                    <p>Już podczas Konferencji dla pracodawców, zaplanowanej jako podsumowanie części szkoleniowej projektu, zespoły będą miały szansę zaprezentować efekty swojej pracy przed przedstawicielami firm z branży IT.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Miejsca <strong class="font-weight-extra-bold">pracy</strong></h2>
                    <p>Dbamy o uniwersalność naszych absolwentów tak, aby odnaleźli się w firmie programistycznej, agencji kreatywnej, sklepie internetowym czy w korporacji.</p>
                    <p>W zależności od tego jakie masz wykształcenie i dotychczasowe doświadczenie zawodowe, możesz szukać pracy jako:</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Webdeveloper</li>
                        <li><i class="fas fa-check"></i> Front-end developer</li>
                        <li><i class="fas fa-check"></i> E-commerce specialist </li>
                        <li><i class="fas fa-check"></i> Menadżer projektu</li>

                    </ul>
                    <p>Kompetencje dostarczone w trakcie kursu są szerokie i dają możliwość znalezienia ciekawej pracy.</p>

                </div>

                <div class="col-md-4">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">W <strong class="font-weight-extra-bold">skrócie</strong></h2>
                    <ul class="list list-icons list-primary list-borders text-2">
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Godzin:</strong> 150</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> Zaświadczenie ukończenia szkolenia zawierające efekty uczenia się odnoszące się do nabytych kompetencji.</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">HTML</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">CSS</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">JS</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">React</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">WordPress</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">WooCommerce</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Git</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Scrum</span>
                        </li>

                    </ul>
                </div>
            </div>


        </div>

        {{-- Powiązane szkolenia --}}
        <section class="section section-height-1 bg-color-grey m-0 border-0">
            <div class="container py-4">
                <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Powiązane</strong> szkolenia</h2>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="portfolio-item">
                            <a href="{{ route('course.cisco') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-cisco-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Administrator sieci Cisco (CCNA)</span>
                                            <span class="thumb-info-type">Ścieżka IT</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="portfolio-item">
                            <a href="{{ route('course.frontend') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-frontend-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Frontend developer</span>
                                            <span class="thumb-info-type">Ścieżka IT</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div> --}}
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="portfolio-item">
                            <a href="{{ route('course.marketing') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-marketing-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Marketing internetowy</span>
                                            <span class="thumb-info-type">Ścieżka IT</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="portfolio-item">
                            <a href="{{ route('course.english') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-english-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Business English (TOEIC)</span>
                                            <span class="thumb-info-type">Ścieżka IT</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Call to action --}}
        @include("includes.zapisz_sie")

    </div>

@endsection

@push('scripts')

@endpush
