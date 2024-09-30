@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark mb-2">Marketing internetowy</h1>
                        <span class="sub-title text-dark"><strong>Ścieżka IT</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>Ścieżka IT</li>
                            <li class="active">Marketing internetowy</li>
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
                                <img src="{{ asset('img/kurs-marketing.jpg') }}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row pt-4 mt-2">
                <div class="col-md-8 mb-4">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">O <strong class="font-weight-extra-bold">szkoleniu</strong></h2>
                    <p>Na kursie Marketingu internetowego poznasz nowoczesne narzędzia marketingowe wykorzystywane przez agencje kreatywne oraz działy marketingu w celu promocji w internecie.</p>
                    <p>Nauczysz się jak profesjonalnie tworzyć i prowadzić kampanie promocyjne z wykorzystaniem socialmediów i wyszukiwarek internetowych.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Dla <strong class="font-weight-extra-bold">kogo</strong></h2>
                    <p>Kurs marketingu internetowego może być przydatny dla różnych grup osób, w zależności od ich celów zawodowych.</p>
                    <p>Jeśli chcesz nauczyć się promować produkty lub usługi w internecie, to dzięki szkoleniu nauczysz się prowadzić kampanie w social mediach, poznasz tajniki optymalizacji SEO i budowania strategii marketingowej. Kurs pozwala zrozumieć, jak korzystać z narzędzi internetowych, takich jak Google Ads, Facebook Ads, e-mail marketing czy analityka webowa.</p>
                    <p>A może planujesz pracować w sklepie internetowy lub założyć własny ecommerce? Na kursie nauczysz się efektywnie promować produkty, optymalizować strony pod kątem konwersji i korzystać z narzędzi do automatyzacji marketingu.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Program</strong> kursu</h2>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Socialmedia</li>
                        <li><i class="fas fa-check"></i> Copywriting i content marketing</li>
                        <li><i class="fas fa-check"></i> Canva</li>
                        <li><i class="fas fa-check"></i> Google Ads</li>
                        <li><i class="fas fa-check"></i> WordPress</li>
                        <li><i class="fas fa-check"></i> SEO</li>
                        <li><i class="fas fa-check"></i> Google Analytics</li>
                        <li><i class="fas fa-check"></i> Metodyka Scrum</li>
                        <li><i class="fas fa-check"></i> Tworzenie projektu własnej kampanii marketingowej</li>

                    </ul>

                    <p>Bardzo ważnym elementem programu szkolenia jest blok poświęcony na stworzenie projektu kampanii marketingowej w metodyce Scrum. W grupach 3-4 osobowych, pod opieką trenera, będziesz tworzyć realną kampanię, a jej założeniami i efektami będzie można pochwalić się przed przyszłym pracodawcą.</p>
                    <p>Już podczas Konferencji dla pracodawców, zaplanowanej jako podsumowanie części szkoleniowej projektu, zespoły będą miały szansę zaprezentować efekty swojej pracy przed przedstawicielami firm z branży IT.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Miejsca <strong class="font-weight-extra-bold">pracy</strong></h2>
                    <p>Specjalista ds. marketingu internetowego ma szerokie możliwości zatrudnienia, ponieważ umiejętności z zakresu marketingu cyfrowego są coraz bardziej pożądane w różnych branżach. Oto przykłady miejsc, gdzie może znaleźć zatrudnienie:</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Agencje marketingowe</li>
                        <li><i class="fas fa-check"></i> Firmy e-commerce</li>
                        <li><i class="fas fa-check"></i> Media i branża rozrywkowa </li>
                        <li><i class="fas fa-check"></i> Korporacje i duże firmy</li>
                    </ul>
                    <p>A może planujesz spróbować swoich sił jako freelancer?</p>

                </div>

                <div class="col-md-4">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">W <strong class="font-weight-extra-bold">skrócie</strong></h2>
                    <ul class="list list-icons list-primary list-borders text-2">
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Godzin:</strong> 150</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> Zaświadczenie ukończenia szkolenia zawierające efekty uczenia się odnoszące się do nabytych kompetencji.</li><li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Socialmedia</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Copywriting</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Canva</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Google Analytics</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Google Ads</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">SEO</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">WordPress</span>
                            <span class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Scrum</span>
                        </li>

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
                    {{-- <div class="col-12 col-sm-6 col-lg-4 mb-4">
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
                    </div> --}}
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
