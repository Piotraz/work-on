@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark mb-2">Business English (TOEIC)</h1>
                        <span class="sub-title text-dark"><strong>Ścieżka IT</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>Ścieżka IT</li>
                            <li class="active">Business English (TOEIC)</li>
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
                                <img src="{{ asset('img/kurs-english.jpg') }}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row pt-4 mt-2">
                <div class="col-md-8 mb-4">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">O <strong class="font-weight-extra-bold">szkoleniu</strong></h2>
                    <p>Business English to intensywny kurs znajomości języka angielskiego w środowisku pracy. Znajomość języka angielskiego jest bardzo przydatna, a w wielu przypadkach wręcz niezbędna w branży IT.</p>
                    <p>Po zakończonym szkoleniu przystąpisz do egzaminu na certyfikat TOEIC® Listening and Reading, który jest powszechnie uznawany przez firmy i instytucje na całym świecie.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Dla <strong class="font-weight-extra-bold">kogo</strong></h2>
                    <p>Kandydaci ubiegający się o pracę w międzynarodowych firmach, w tym korporacjach, mogą potrzebować wyników TOEIC jako dowodu swoich kompetencji językowych. Znajomość języka angielskiego w branży IT jest ogromnym atutem, który znacząco zwiększa możliwości zawodowe, ułatwia dostęp do zasobów wiedzy oraz umożliwia pracę w międzynarodowym środowisku.</p>
                    <p>Kurs stanowi uzupełnienie szkoleń zawodowych realizowanych w projekcie na ścieżce IT.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Program</strong> kursu</h2>
                    <p>Program kursu jest zbieżny z zakresem wiedzy potrzebnej na egzaminie TOEIC® Listening and Reading i obejmuje:</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Listening (Słuchanie)</li>
                    </ul>
                    <p>W części słuchania sprawdzane są umiejętności rozumienia ze słuchu w kontekście sytuacji zawodowych i codziennych. Pytania w tej części dotyczą różnych formatów nagrań, takich jak rozmowy telefoniczne, ogłoszenia czy prezentacje.</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Reading (Czytanie)</li>
                    </ul>
                    <p>Część czytania sprawdza umiejętności rozumienia tekstu pisanego, również w kontekście biznesowym i codziennym. Pytania są podzielone na różne formaty tekstów, takie jak e-maile, ogłoszenia, raporty czy artykuły.</p>
                    <p>Egzamin TOEIC® Listening and Reading sprawdza nie tylko znajomość gramatyki i słownictwa, ale także umiejętność rozumienia języka w różnych kontekstach zawodowych. Główne elementy to: słownictwo zawodowe, codzienne sytuacje biznesowe, gramatyka angielska, funkcje językowe, rozumienie intencji i kontekstu.</p>

                </div>

                <div class="col-md-4">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">W <strong class="font-weight-extra-bold">skrócie</strong></h2>
                    <ul class="list list-icons list-primary list-borders text-2">
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Godzin:</strong> 90</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> TOEIC Listening and Reading</li>
                        {{-- <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">DESIGN</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">BRAND</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">WEBSITES</a></li> --}}

                    </ul>
                </div>
            </div>


        </div>

        {{-- Powiązane szkolenia --}}
        <section class="section section-height-3 bg-color-grey m-0 border-0">
            <div class="container py-4">
                <h4 class="mb-3 text-4 text-uppercase">Powiązane <strong class="font-weight-extra-bold">szkolenia</strong></h4>
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
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="portfolio-item">
                            <a href="{{ route('course.frontend') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-frontend-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Front-end developer</span>
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
                    {{-- <div class="col-12 col-sm-6 col-lg-4 mb-4">
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
                    </div> --}}
                </div>
            </div>
        </section>

        {{-- Call to action --}}
        @include("includes.zapisz_sie")

    </div>

@endsection

@push('scripts')

@endpush
