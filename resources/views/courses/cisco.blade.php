@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark mb-2">Administrator sieci Cisco (CCNA)</h1>
                        <span class="sub-title text-dark"><strong>Ścieżka IT</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>Ścieżka IT</li>
                            <li class="active">Administrator sieci Cisco (CCNA)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            {{-- Zdjęcie główne karuzela --}}
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

                    <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}" style="height: 510px;">
                        <div>
                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                <img src="{{ asset('img/kurs-cisco.jpg') }}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row pt-4 mt-2">
                <div class="col-md-8 mb-4">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">O <strong class="font-weight-extra-bold">szkoleniu</strong></h2>
                    <p>Kurs CCNA (Cisco Certified Network Associate) jest podstawowym i jednocześnie najbardziej rozpoznawalnym kursem sieciowym na runku IT.</p>
                    <p>Udział w szkoleniu pozwala zrozumieć sieci komputerowe od podstaw jak i zaawansowane techniki przełączania, routingu, bezpieczeństwa i automatyzacji sieci. Uczestnicy mogą uzyskać nie tylko wiedzę teoretyczną, ale przede wszystkim praktyczne umiejętności z zakresu projektowania, budowy i utrzymania sieci komputerowych w małych i średnich przedsiębiorstwach oraz ISP.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Dla <strong class="font-weight-extra-bold">kogo</strong></h2>
                    <p>CCNA jest przeznaczony dla osób, które zamierzają rozpocząć pracę w branży IT związanej z administracją sieciami teleinformatycznymi, usystematyzować podstawową wiedzę sieciową celem dalszego rozwoju, poznać mechanizmy i protokoły wykorzystywane do komunikacji przez sieć Internet.</p>
                    <p>Kurs nie wymaga wiedzy technicznej i został zaprojektowany tak, aby uczestnicy stopniowo poznawali protokoły budując sieć Internet na przykładzie ćwiczeń praktycznych wykonywanych na ruterach oraz przełącznikach Cisco. Nie jest wymagana wiedza początkowa z zakresu sieci komputerowych, a jedynie podstawowa znajomość obsługi komputera.</p>
                    <p>To doskonała okazją do zdobycie wiedzy i umiejętności niezbędnych do zmiany ścieżki kariery lub przebranżowienia się.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Program</strong> kursu</h2>
                    <p>Szkolenie prowadzone będzie zgodnie z programem Cisco CCNA 7.0 składającym się z 3 semestrów: 1) Introduction to Networks, 2) Switching, Routing and Wireless Essentials, 3) Enterprise Networking, Security and Automation.</p>
                    <p>Uczestnicy otrzymają dostęp do certyfikowanych materiałów szkoleniowych w języku polskim. Wykłady, zadania laboratoryjne oraz egzaminy pośrednie i końcowe również realizowane będą po polsku.</p>
                    <p>Zajęcia odbywać się będą w laboratorium sieciowym w wymiarze 150 godzin lekcyjnych. Każdy z uczestników posiadać będzie dostęp do własnego komputera PC, przełącznika Cisco i routera Cisco.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Miejsca <strong class="font-weight-extra-bold">pracy</strong></h2>
                    <p>Absolwenci mogą znaleźć pracę na stanowisku:</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Network Administrator</li>
                        <li><i class="fas fa-check"></i> Network Analyst</li>
                        <li><i class="fas fa-check"></i> Network Engineer</li>
                        <li><i class="fas fa-check"></i> IT Support Specialist</li>
                        <li><i class="fas fa-check"></i> Help Desk Technician</li>
                    </ul>
                    <p>Kompetencje dostarczone w trakcie kursu są bardzo poszukiwane na runku pracy, zatem solidna realizacja kursu oraz dobra znajomość języka angielskiego dają gwarancję zatrudnienia. </p>

                </div>

                <div class="col-md-4">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">W <strong class="font-weight-extra-bold">skrócie</strong></h2>
                    <ul class="list list-icons list-primary list-borders text-2">
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Godzin:</strong> 150</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> CCNA</li>
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
                    {{-- <div class="col-12 col-sm-6 col-lg-4 mb-4">
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
                    </div> --}}
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
