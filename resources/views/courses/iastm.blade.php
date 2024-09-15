@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark mb-2">IASTM - kurs terapii narzędziowej</h1>
                        <span class="sub-title text-dark"><strong>Ścieżka FIZJO</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>Ścieżka FIZJO</li>
                            <li class="active">IASTM - kurs terapii narzędziowej</li>
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
                                <img src="{{ asset('img/kurs-iastm.jpg') }}" class="img-fluid border-radius-0" alt="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row pt-4 mt-2">
                <div class="col-md-8 mb-4">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">O <strong class="font-weight-extra-bold">metodzie</strong></h2>
                    <p>IASTM Technique to oparta na dowodach terapia narzędziowa tkanek miękkich. Sam skrót IASTM (ang. Instrument Assisted Soft Tissue Mobilization) to terapia narzędziowa, która jako metoda posiada mocne ugruntowanie w badaniach i doniesieniach naukowych omawiających temat manipulacji tkanki miękkiej ludzkiego ciała. </p>
                    <p>Techniki ERGON są wykonywane na specyficznych punktach sklejeń tkanki miękkiej, po których uwolnieniu poprawia się funkcjonalność danego obszaru ciała na przestrzeni zaledwie kilku sesji. Jest to oparte na dowodach podejście terapeutyczne łączące statyczne i dynamiczne manipulacje tkanki miękkiej ciała z użyciem specjalnych narzędzi klinicznych w celu leczenia patologii układu nerwowo-mięśniowo-szkieletowego.</p>
                    <p>Efekt terapeutyczny Technik ERGON® utrzymuje się przez wiele kolejnych dni, a kiedy zostaną one połączone z innymi technikami terapeutycznymi (rozciąganie i techniki ćwiczeń kontroli nerwowo-mięśniowej) może stać się trwały.</p>
                    <p>Ta technika wywodzi swoją nazwę od starożytnego greckiego słowa „ergon”, co oznacza: „produkt ludzkiej pracy, manualnej lub umysłowej, naukowej lub artystycznej”.</p>
                    <p>Jest to technika oparta na teorii meridianów mięśniowo-powięziowych opisanej po raz pierwszy przez Thomasa Myersa. Stworzono ją poprzez badania stosowane i długoterminową ocenę w Laboratorium Oceny i Rehabilitacji Człowieka Wydziału Fizjoterapii Technologicznego Instytutu Edukacyjnego zachodniej Grecji. Technika jest innowacyjnym rozwinięciem starszych podejść IASTM (GUA SHA, technika GRASTON, technika SMART TOOLS, technika masażu wspomaganego narzędziami itp.)</p>

                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">Korzyści dla <strong class="font-weight-extra-bold">Ciebie</strong></h2>
                    <p>Technika ERGON naucza innego podejścia terapeutycznego oraz pozwala na:</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> precyzyjną ocenę obszarów mięśniowo-powięziowych o wygórowanej wrażliwości,</li>
                        <li><i class="fas fa-check"></i> przywrócenie biomechanicznej funkcji stawów poprzez “rozpuszczanie” sklejeń, odzyskiwanie prawidłowej przesuwalności powięzi oraz redukcję skurczu mięśniowego i bólu.</li>
                    </ul>
                    <p>ERGON IASTM to terapia narzędziowa, więc opiera się na stosowaniu unikalnego sprzętu klinicznego o nazwie “ERGON Tools”. Narzędzia stosowane z pomocą specjalnych technik mogą:</p>
                    <ul class="list list-icons list-icons-style-2 mb-3">
                        <li><i class="fas fa-check"></i> wykrywać i uwalniać blizny, zrosty i sztywność powięzi,</li>
                        <li><i class="fas fa-check"></i> zwiększyć lokalną perfuzję,</li>
                        <li><i class="fas fa-check"></i> zmniejszyć napięcie mięśni i ból mięśniowo-powięziowy,</li>
                        <li><i class="fas fa-check"></i> poprawić wytrzymałość funkcjonalną u sportowców,</li>
                        <li><i class="fas fa-check"></i> poprawić funkcjonalność w ciągu kilku sesji terapeutycznych.</li>
                    </ul>
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Program</strong> kursu</h2>
                    <p>Szkolenie realizowane będzie przez okres 2 dni w wymiarze 16 godzin zgodnie z programem ERGON Basic IASTM – FM1.</p>
                    <p>Zajęcia odbywać się będą w grupach 24-osobowych. Szkolenia prowadzone będą na salach wyposażonych w kozetki do masażu. Specyfika szkoleń fizjoterapeutycznych polega na pracy w parach, gdzie na zmianę jedna osoba wykonuje ćwiczenia, a druga pełni rolę pacjenta.</p>
                    <p>Szkolenia będą prowadzone przez doświadczonych trenerów, specjalistów w swojej branży.</p>
                    <p><strong>Kurs dodatkowo kończy się uzyskaniem międzynarodowego certyfikatu ERGON IASTM uznawanego na całym świecie.</strong></p>

                </div>

                <div class="col-md-4">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2">W <strong class="font-weight-extra-bold">skrócie</strong></h2>
                    <ul class="list list-icons list-primary list-borders text-2">
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Godzin:</strong> 16</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> Zaświadczenie ukończenia szkolenia zawierające efekty uczenia się odnoszące się do nabytych kompetencji.</li>
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Certyfikat:</strong> Międzynarodowy certyfikat ERGON IASTM.</li>

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
