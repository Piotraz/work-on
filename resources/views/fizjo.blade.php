@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Ścieżka FIZJO</h1>
                        <span class="sub-title text-dark"><strong>Rekrutacja do 30 listopada 2024</strong></span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>O projekcie</li>
                            <li class="active">Ścieżka FIZJO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Włącz się do pracy w branży --}}
        <div class="container">

            <div class="row text-center pb-5">
                <div class="col-md-9 mx-md-auto">
                    <div class="overflow-hidden mb-3">
                        <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                            <span>Wejdź na </span>
                            <span class="word-rotator-words bg-primary">
                                <b class="is-visible"> wyższy </b>
                            </span>
                            <span> poziom</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-md-3 appear-animation mb-3" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <h3 class="font-weight-bold text-4 mb-2">Co możesz osiągnąć ?</h3>
                    <p>Przystępując do projektu WORK-ON 7 <mark class="text-white bg-color-primary">zwiększasz swoje szanse na lepsze zatrudnienie</mark> lub otwarcie własnej praktyki zawodowej.</p>
                    <p>Otrzymasz od nas kompleksowe wsparcie w zdobywaniu nowych kompenecji oraz możliwość zdobycia doświadczenia zawodowego.</p>
                    <p><mark class="text-white bg-color-primary">Poznasz najnowsze techniki pracy fizjoterapeuty</mark>, aby skuteczniej pomagać swoim pacjentom.</p>
                    <a href="#zapewniamy" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1">Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-md-6 appear-animation mb-3" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                    <h3 class="font-weight-bold text-4 mb-2">Kto może uczestniczyć ?</h3>
                    <p><mark class="text-white bg-color-primary">Fizjoterapeuci i masażyści</mark>, którzy posiadają już kwalifikacje do wykonywania zawodu lub nabędą je w najbliższym czasie, ale brakuje im dodatkowych kompetencji, znajomości nowoczesnych technik i umiejętności ich wykorzystania w pracy z pacjentem na najwyższym poziomie.</p>
                    <p>Osoby, które na co dzień pracują z pacjentem lub takie, które jeszcze nie pracują w zawodzie albo są w trakcie studiów lub bezpośrednio po ich zakończeniu.</p>
                    <p>Wystarczy, że posiadasz podstawową wiedzę z anatomii i fizjologii człowieka - reszty nauczymy Ciebie na szkoleniach "krok po kroku".</p>
                    <p>Formalnie, grupę docelową stanowią osoby dorosłe, mieszkające lub pracujące na terenie woj. kujawsko-pomorskiego. <mark class="text-white bg-color-primary">NIE ma górnej granicy wieku!</mark> Wsparciem możemy objąć tylko <mark class="text-white bg-color-primary">osoby pracujące</mark> w trudnej sytuacji na rynku pracy.</p>
                    <a href="#dlakogo" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1">Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-md-3 appear-animation mb-3" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                    <h3 class="font-weight-bold text-4 mb-2">Jak się zapisać ?</h3>
                    <p>Wystarczy dokładnie zapoznać się z wymaganiami dot. grupy docelowej.</p>
                    <p>Następnie należy <mark class="text-white bg-color-primary">uzupełnić formularz zgłoszeniowy</mark> i wysłać w wymaganym terminie.</p>
                    <p>Kolejne etapy rekrutacji to ocena merytoryczna oraz rozmowa kwalifikacyjna, która jest zwieńczeniem procesu rekrutacyjnego.</p>
                    <a href="{{ route('rekrutacja') }}" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1">Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

        </div>

        {{-- Uczestnikom zapewniamy --}}
        <section class="section bg-color-grey section-height-2 border-0 m-0 mb-5" id="zapewniamy">
            <div class="container">

                <h2 class="font-weight-normal text-7">Uczestnikom <strong class="font-weight-extra-bold">zapewniamy</strong></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fa-solid fa-handshake-simple"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Doradztwo zawodowe</h4>
                                <p class="mb-4">Spotkanie z doradcą zawodowym, dzięki któremu zbadamy Twój potencjał i określimy Plan Działania w projekcie zgodny z Twoimi predyspozycjami.</p>
                            </div>
                        </div>

                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fas fa-clinic-medical fa-xl"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Akademia kompetencji FIZJO</h4>
                                <p class="mb-0">Pakiet 3 profesjonalnych szkoleń zawodowych ukierunkowanych na kompetencje niezbędne dla nowoczesnego fizjoterapeuty.</p>
                                <p class="mb-4"><mark class="text-white bg-color-primary">Weźmiesz udział w 3 szkoleniach</mark> <a href="{{ route('course.mtg') }}">Masaż Tkanek Głębokich</a>, <a href="{{ route('course.iastm') }}">IASTM - kurs terapii narzędziowej</a>, <a href="{{ route('course.rocktape') }}">RockTape - kurs tapingu</a>. Łącznie w wymiarze 96 godzin.</p>
                            </div>
                        </div>

                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fa-solid fa-person-chalkboard "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Akademia kompetencji miękkich</h4>
                                <p class="mb-0">Szkolenie ukierunkowane na rozwój kluczowych kompetencji związanych z rozwojem zawodowym.</p>
                                <p class="mb-4">Zadbamy o Twoje kompetencje miękkie, które pomogą Ci w znalezieniu lepszego zatrudnienia. Przygotujemy Ciebie do procesu rekrutacji, awansu czy zmiany stanowiska pracy.</p>
                            </div>
                        </div>

                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fa-solid fa-sack-dollar "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Stydendium i inne benefity</h4>
                                <p class="mb-0">Za udział w zajęciach otrzymasz od nas <mark class="text-white bg-color-primary">stypendium szkoleniowe - około 100 zł</mark> za każdy dzień szkolenia. Warunkiem otrzymania stypendium jest jednak regularna frekwencja.</p>
                                <p class="mb-4">Wszystkie zajęcia odbywać się będą stacjonarnie i aby uczyło się przyjemnie i efektywnie, zapewniamy smaczny catering oraz pyszną kawę.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fa-solid fa-person-digging "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Płatne staże zawodowe</h4>
                                <p class="mb-0"><mark class="text-white bg-color-primary">Staż w wymiarze 3 miesięcy</mark> na stanowisku zgodnym z Twoim profilem zawodowym, to szansa na zdobycie lub uzupełnienie niezbędnego doświadczenia zawodowego. Dobrze wykorzystany czas na stażu to gwarancja nabycia praktycznych umiejętności w zakresie wykonywania danego zawodu.</p>
                                <p class="mb-0">Za udział w stażu możemy zapłacić Tobie około 2000 zł miesięcznie.</p>
                                <p class="mb-4"><strong>Staż nie jest obowiązkowy</strong>, jeśli Twoja obecna praca nie pozwala na zaangażowanie się w staż w wymiarze pełnego etatu lub po prostu nie jest on Tobie potrzebny do poprawy aktualnych warunków zatrudnienia.</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fa-solid fa-handshake-simple "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Pośrednictwo pracy</h4>
                                <p class="mb-0">Indywidualne spotkania z pośrednikiem pracy na koniec Twojego udziału w projekcie.</p>
                                <p class="mb-4"><mark class="text-white bg-color-primary">Nasz pośrednik pomoże Tobie znaleźć lepszą pracę</mark>. Jeśli jednak planujesz pozostać u aktualnego pracodawcy, to podpowie Tobie jak zawalczyć o awans lub podwyżkę wynagrodzenia.</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Uwaga</h4>
                                <p class="mb-0">Szkolenia zawodowe są tylko jednym z elementów projektu. Pozostałe wymienione formy wsparcia są obowiązkowe. Jedynie staż nie jest obowiązkowy, ale pod pewnymi warunkami.</p>
                                <p class="mb-4">Zapisując się do projektu musisz wziąć udział we wszystkich 3 szkoleniach FIZJO.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- Powiązane szkolenia --}}
        @include("includes.courses_fizjo")

        {{-- Ścieżka FIZJO w liczbach --}}
        <div class="container">
            <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Ścieżka FIZJO</strong> w liczbach</h2>
        </div>
        <section class="section section-primary border-top-0 mb-5">
            <div class="container">
                <div class="row counters counters-sm counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="48" data-from="40">48</strong>
                            <label class="opacity-5 text-4 mt-1">Uczestników i Uczestniczek</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="96" data-from="64" data-append="h">96</strong>
                            <label class="opacity-5 text-4 mt-1">szkoleń</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong data-to="100" data-from="50" data-append="zł">100 </strong>
                            <label class="opacity-5 text-4 mt-1">stypendium szkoleniowe<br>za dzień</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="3" data-from="1" data-append="-mies.">3 </strong>
                            <label class="opacity-5 text-4 mt-1">staż zawodowy</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Kto może wziąć udzał --}}
        @include("includes.grupa_docelowa")

        {{-- Call to action --}}
        @include("includes.zapisz_sie")

    </div>

@endsection

@push('scripts')

@endpush
