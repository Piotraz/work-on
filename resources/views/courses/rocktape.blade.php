@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark mb-2">RockTape - kurs tapingu</h1>
                        <span class="sub-title text-dark"><strong>Ścieżka FIZJO</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>Ścieżka FIZJO</li>
                            <li class="active">RockTape - kurs tapingu</li>
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
                                <img src="{{ asset('img/kurs-rocktape.jpg') }}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row pt-4 mt-2">
                <div class="col-md-8 mb-4">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">O <strong class="font-weight-extra-bold">metodzie</strong></h2>
                    <p>RockTape Functional Movement Training Taping (FMT) – to najbardziej zaawansowana metoda tapingu, której punktem odniesienia jest ruch.</p>
                    <p>FMT opiera się na koncepcji mięśni działających jako łańcuch. </p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Zapomnij o szukaniu źródła bólu.</li>
                        <li><i class="fas fa-check"></i> Zapomnij o szukaniu przyczepów mięśni.</li>
                        <li><i class="fas fa-check"></i> Zapomnij o prawidłowym kierunku klejenia taśm.</li>
                    </ul>
                    <p>Poznaj praktyczną metodę klejenia wg. filozofii “taping movement, not muscles“.</p>


                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Korzyści dla <strong class="font-weight-extra-bold">Ciebie</strong></h2>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> Poznasz anatomię i fizjologię linii mięśniowo-powięziowych.</li>
                        <li><i class="fas fa-check"></i> Zastosujesz nowe podejście do tapingu aplikowanego na ból, dynamikę płynów, postawę, uwięzienie nerwu i blizny.</li>
                        <li><i class="fas fa-check"></i> Nauczysz się stosować i wzmacniać ruch taśmowy, a nie mięśniowy.</li>
                        <li><i class="fas fa-check"></i> Praktycznie nauczysz się aplikacji taśmy w sposób, który poprawia ruch i funkcjonowanie.</li>
                        <li><i class="fas fa-check"></i> Efektywnie zastosujesz RockTape w praktycznie każdym problemie w obrębie układu mięśniowo-szkieletowego.</li>
                    </ul>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Program</strong> kursu</h2>
                    <p>Jest to kurs kinezjologii, który na nowo definiuje rozumienie wpływu elastycznego terapeutycznego tapingu na łagodzenie bólu, krążenie i propriocepcję. Został podzielony na 2 części:</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i>RockTape – FMT Basic – część podstawowa</li>
                    </ul>
                    <p>Ta część szkolenia stanowi idealny wstęp do poznania koncepcji i podstaw teoretycznych związanych z tapingiem. Kurs podstawowy FMT ma na celu przedstawienie wielu technik tapingu oraz samej koncepcji na której się opierają.</p>

                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i>RockTape – FMT Advanced – część zaawansowana</li>
                    </ul>
                    <p>Po tej części szkolenia Twój sposób tapowania wejdzie zdecydowanie na wyższy poziom. Dzień drugi rozjaśni i poszerzy wiedzę z zakresu Tapingu redukującego objawy oraz Tapingu związanego z kontrolą posturalną omawianego podczas pierwszego dnia oraz przedstawi ekscytujące nowe techniki takie jak "Tweak Taping" dla poszerzenia i wydłużenia efektów terapii manualnej. Dodatkowo zostanie omówiony unikalny screening ruchu oraz aplikacje "Power Taping".</p>

                    <p>Zajęcia odbywać się będą w grupach 24-osobowych. Szkolenia prowadzone będą na salach wyposażonych w kozetki do masażu. Specyfika szkoleń fizjoterapeutycznych polega na pracy w parach, gdzie na zmianę jedna osoba wykonuje ćwiczenia, a druga pełni rolę pacjenta.</p>
                    <p>Szkolenia będą prowadzone przez doświadczonych trenerów, specjalistów w swojej branży.</p>
                    <p><strong>Kurs dodatkowo kończy się uzyskaniem międzynarodowego certyfikatu RockTape uznawanego na całym świecie.</strong></p>

                </div>

                <div class="col-md-4">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">W <strong class="font-weight-extra-bold">skrócie</strong></h2>
                    <ul class="list list-icons list-primary list-borders text-2">
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Godzin:</strong> 16</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> Zaświadczenie ukończenia szkolenia zawierające efekty uczenia się odnoszące się do nabytych kompetencji.</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> Międzynarodowy Certyfikat RockTape</li>

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
