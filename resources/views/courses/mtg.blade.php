@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark mb-2">Masaż Tkanek Głębokich</h1>
                        <span class="sub-title text-dark"><strong>Ścieżka FIZJO</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>Ścieżka FIZJO</li>
                            <li class="active">Masaż Tkanek Głębokich</li>
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
                                <img src="{{ asset('img/kurs-mtg.jpg') }}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row pt-4 mt-2">
                <div class="col-md-8 mb-4">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">O <strong class="font-weight-extra-bold">metodzie</strong></h2>
                    <p>Masaż Tkanek Głębokich to koncepcja manualnej pracy mięśniowo-powięziowej. Zawiera zarówno dokładną diagnostykę funkcjonalną i analityczną, jak i terapeutyczne działanie mające na celu poprawę zdrowia, funkcji oraz uwolnienia od bólu. Jest sposobem zrozumienia warstwowego, trójwymiarowego ułożenia tkanek w organizmie. Jest to jedna z najbardziej skutecznych form masażu leczniczego.</p>
                    <p>Znajomość anatomii oraz umiejętność posługiwania się wszystkimi składowymi koncepcji MTG sprawia, że jest się wyjątkowo skutecznym w terapii dolegliwości pochodzenia mięśniowo-powięziowego. Ten rodzaj pracy jest podejściem typowo terapeutycznym nastawionym na redukcję dolegliwości bólowych. Wykorzystuje też specjalne pozycje ułożeniowe, które w połączeniu z pracą tkankową, mają ogromną zdolność zwiększania zakresów ruchu stawów i tkanek.</p>
                    <p>To wszystko sprawia, że jest to jedna z bardziej efektywnych form terapii w przypadkach dolegliwości chronicznych i przeciążeniach statycznych. Jest idealną formą pracy dla osób cierpiących na dolegliwości bólowe z powodu swojej pracy, lub nieprawidłowych nawyków ruchowych. Sprawdza się również u sportowców wymagających ekstremalnej elastyczności tkanek, aby nie dochodziło u nich do urazów przeciążeniowych.</p>
                    <p>Masaż Tkanek Głębokich może być stosowany jako zabieg prewencyjny u osób aktywnych fizycznie. Ma też dużą skuteczność w przypadku wad postawy.</p>
                    <p>Na szkoleniu dowiesz się więcej o samej metodzie, technikach oraz narzędziach pracy.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Korzyści dla <strong class="font-weight-extra-bold">Ciebie</strong></h2>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Nauczysz się holistycznego myślenia oraz strukturalnego podejścia do ciała twojego pacjenta.</li>
                        <li><i class="fas fa-check"></i> Poznasz techniki pracy z każdą częścią ciała.</li>
                        <li><i class="fas fa-check"></i> Wspólnie z Tobą stworzymy plan terapii dla twojego pacjenta.</li>
                        <li><i class="fas fa-check"></i> Nauczysz się wyciągania wniosków na podstawie wywiadu, analizy posturalnej i palpacji.</li>
                        <li><i class="fas fa-check"></i> Praktycznie zrealizujesz terapie w najczęściej występujących przypadkach klinicznych.</li>
                    </ul>
                    <p>I co najważniejsze, zdobędziesz najbardziej aktualną wiedzę i umiejętności, które zastosujesz od razu na swoich pacjentach.</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Program</strong> kursu</h2>
                    <p>Szkolenie realizowane będzie przez okres 8 dni w wymiarze 64 godzin. Gdy już zapoznamy Ciebie z podstawami teoretyczno-praktycznymi, to każdego następnego dnia skupimy się na pracy z konkretną partią ciała pacjenta.</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Podstawy teoretyczno-praktyczne</li>
                        <li><i class="fas fa-check"></i> Grzbiet</li>
                        <li><i class="fas fa-check"></i> Tułów</li>
                        <li><i class="fas fa-check"></i> Obręcz barkowa i kończyna górna</li>
                        <li><i class="fas fa-check"></i> Podudzie i staw skokowy</li>
                        <li><i class="fas fa-check"></i> Udo i miednica</li>
                        <li><i class="fas fa-check"></i> Górny kwadrant</li>
                        <li><i class="fas fa-check"></i> Szyja, twarz i głowa</li>
                    </ul>
                    <p>Zajęcia odbywać się będą w grupach 24-osobowych. Szkolenia prowadzone będą na salach wyposażonych w kozetki do masażu. Specyfika szkoleń fizjoterapeutycznych polega na pracy w parach, gdzie na zmianę jedna osoba wykonuje ćwiczenia, a druga pełni rolę pacjenta.</p>
                    <p>Szkolenia będą prowadzone przez doświadczonych trenerów, specjalistów w swojej branży.</p>

                </div>

                <div class="col-md-4">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">W <strong class="font-weight-extra-bold">skrócie</strong></h2>
                    <ul class="list list-icons list-primary list-borders text-2">
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Godzin:</strong> 64</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> Zaświadczenie ukończenia szkolenia zawierające efekty uczenia się odnoszące się do nabytych kompetencji.</li>

                    </ul>
                </div>
            </div>


        </div>

        {{-- Powiązane szkolenia --}}
        <section class="section section-height-3 bg-color-grey m-0 border-0">
            <div class="container py-4">
                <h4 class="mb-3 text-4 text-uppercase">Szkolenia na ścieżce <strong class="font-weight-extra-bold">FIZJO</strong></h4>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="portfolio-item">
                            <a href="{{ route('course.mtg') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-mtg-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Masaż Tkanek Głębokich</span>
                                            <span class="thumb-info-type">Ścieżka FIZJO</span>
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
                            <a href="{{ route('course.iastm') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-iastm-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">IASTM - kurs terapii narzędziowej</span>
                                            <span class="thumb-info-type">Ścieżka FIZJO</span>
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
                            <a href="{{ route('course.rocktape') }}" aria-label="">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('img/kurs-rocktape-rect.jpg') }}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">RockTape - kurs tapingu</span>
                                            <span class="thumb-info-type">Ścieżka FIZJO</span>
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
