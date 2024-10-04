@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        {{-- Header --}}
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Ścieżka IT</h1>
                        {{-- <span class="sub-title text-dark"><strong>Rekrutacja do 17 października 2024</strong></span> --}}
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>O projekcie</li>
                            <li class="active">Ścieżka IT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Włącz się do pracy w branży --}}
        <div class="container">

            {{-- Rekrutacja baner--}}
            @include("includes.rekrutacja_it")

            <div class="row text-center pb-5">
                <div class="col-md-9 mx-md-auto">
                    <div class="overflow-hidden mb-3">
                        <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                            <span>Włącz się do pracy w branży</span>
                            <span class="word-rotator-words bg-primary">
                                <b class="is-visible">IT</b>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-md-3 appear-animation mb-3" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <h3 class="font-weight-bold text-4 mb-2">Co możesz osiągnąć ?</h3>
                    <p>Przystępując do projektu WORK-ON 7 <mark class="text-white bg-color-primary">zwiększasz swoje szanse na lepsze zatrudnienie</mark>.</p>
                    <p>Otrzymasz od nas kompleksowe wsparcie w zdobywaniu nowych kwalifikacji i kompenecji oraz szansę na zdobycie nowego doświadczenia zawodowego. Z nami wejdziesz do najszybciej rozwijającej się branży na świecie - do branży IT.</p>
                    <a href="#zapewniamy" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1">Dowiedz się więcej <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-md-6 appear-animation mb-3" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                    <h3 class="font-weight-bold text-4 mb-2">Kto może uczestniczyć ?</h3>
                    <p><mark class="text-white bg-color-primary">Osoby planujące przekwalifikować się do pracy w branży IT</mark>, które nie posiadają kwalifikacji informatycznych, ale dzięki udziałowi w projekcie, nabędą je i wraz z uzyskaniem doświadczenia zawodowego, zmienią branżę na IT.</p>
                    <p>Osoby, które aktualnie wykonują prace nie wymagające specjalistycznych kwalifikacji (no skill jobs), często jeszcze w trakcie nauki/studiów lub bezpośrednio po jej zakończeniu. Osoby, które posiadają już pewne predyspozycje i kompetencje z IT, ale nie posiadają potwierdzonych kwalifikacji, ani doświadczenia zawodowego.</p>
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
                                <i class="fas fa-laptop-code fa-xl "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Akademia kwalifikacji w IT</h4>
                                <p class="mb-0">Profesjonalne szkolenie zawodowe ukierunkowane na kwalifikacje i kompetencje wynikających z potrzeb rynku pracy w branży IT.</p>
                                <p class="mb-4"><mark class="text-white bg-color-primary">Weźmiesz udział w 1 z 3 szkoleń:</mark> <a href="{{ route('course.cisco') }}">Administrator sieci Cisco (CCNA)</a>, <a href="{{ route('course.frontend') }}">Front-end developer</a>, <a href="{{ route('course.marketing') }}">Marketing internetowy</a>. Każde w wymiarze 150 godzin.</p>
                            </div>
                        </div>

                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon text-color-primary">
                                <i class="fa-regular fa-message fa-xl "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Business English</h4>
                                <p class="mb-0"><a href="{{ route('course.english') }}">Business English</a> to intensywny kurs znajomości języka angielskiego w środowisku pracy, w wymiarze 90 godzin.</p>
                                <p class="mb-4">Po zakończonym szkoleniu przystąpisz do egzaminu na <mark class="text-white bg-color-primary">certyfikat TOEIC® Listening and Reading</mark>.</p>
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
                                <i class="fa-solid fa-globe "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4-5 mb-1">Targi pracy</h4>
                                <p class="mb-0">Po zakończeniu części szkoleniowej <mark class="text-white bg-color-primary">organizujemy konferencję z udziałem pracodawców</mark> z branży IT, w formie targów pracy.</p>
                                <p class="mb-0">To doskonała szansa dla Ciebie na zaprezentowanie swoich kompetencji i umiejętności, poznanie rynku pracy, czy przeprowadzenie pierwszych rozmów kwalifikacyjnych.</p>
                                <p class="mb-4">Dobrze przepracowany udział w konferencji to gwarancja stażu w wymarzonej firmie. A może od razu nowej pracy?</p>
                            </div>
                        </div>

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
                                <h4 class="font-weight-bold text-4-5 mb-1">Uwaga!</h4>
                                <p class="mb-0">Szkolenie IT jest tylko jednym z elementów projektu. Pozostałe wymienione formy wsparcia są obowiązkowe. Jedynie staż nie jest obowiązkowy, ale pod pewnymi warunkami.</p>
                                <p class="mb-4">Można wziąć udział tylko w jednym szkoleniu IT.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- Szkolenia na ścieżce --}}
        <section class="section section-height-1 bg-color-white m-0 border-0">
            <div class="container py-4">
                <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Szkolenia na ścieżce</strong> IT</h2>

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

                </div>
            </div>
        </section>

        {{-- Ścieżka IT w liczbach --}}
        <div class="container">
            <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Ścieżka IT</strong> w liczbach</h2>
        </div>
        <section class="section section-primary border-top-0 mb-5">
            <div class="container">
                <div class="row counters counters-sm counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="60" data-from="40">60</strong>
                            <label class="opacity-5 text-4 mt-1">Uczestników i Uczestniczek</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="260" data-from="200" data-append="h">260</strong>
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

        {{-- Cytaty --}}
        <div class="container mb-0">
            <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">

                <div class="col-md-6">
                    <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Co o nas</strong> mówią</h2>
                    <div class="row">
                        <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">

                            <div class="col">
                                <div class="testimonial testimonial-primary">
                                    <blockquote>
                                        <p class="mb-0">Nie byłem daleko od webdeveloperki, ale brakowało mi doświadczania. Dzięki projektowi mogłem pokazać swoje umiejętności na stażu w uznanej agencji interaktywnej, co zaowocowało dobrze płatnym zatrudnieniem.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="{{ asset('img/mateusz.webp') }}" class="rounded-circle" alt="Zdjęcie profilowe" />
                                        </div>
                                        <p><strong>Mateusz</strong><span>Absolwent</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="testimonial testimonial-primary">
                                    <blockquote>
                                        <p class="mb-0">Wyłączyłam nudę! Włączyłam się na pracę w e-marketingu. Mój udział w projekcie WORK-ON to zupełny przypadek, o naborze dowiedziałam się przeglądając oferty pracy w internecie. Ukończyłam szkolenie, zdobyłam nowy zawód i otworzyło się przede mną więcej możliwości rozwoju kariery zawodowej.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="{{ asset('img/monika.webp') }}" class="rounded-circle" alt="Zdjęcie profilowe" />
                                        </div>
                                        <p><strong>Monika</strong><span>Absolwentka</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="testimonial testimonial-primary">
                                    <blockquote>
                                        <p class="mb-0">Nie miałem sprecyzowanych planów na karierę zawodową, myślałem o projektowaniu gier... ułożyło się inaczej i nie żaluję. Na stażu byłem w firmie programistycznej i teraz pracuję jako programista. Wszystkim niezdecydowanym polecam udział w projekcie.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="{{ asset('img/erwin.webp') }}" class="rounded-circle" alt="Zdjęcie profilowe" />
                                        </div>
                                        <p><strong>Erwin</strong><span>Absolwent</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="testimonial testimonial-primary">
                                    <blockquote>
                                        <p class="mb-0">Bez ryzyka nie ma zabawy! Dlatego porzuciłem pracę na etacie, aby wziąć udział w projekcie WORK-ON. Opłaciło się, ponieważ zdobyłem nowy zawód i poznałem ciekawych ludzi. Po stażu zacząłem pracę jako Creative Graphic Designer. To była dobra decyzja!</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="{{ asset('img/mikolaj.webp') }}" class="rounded-circle" alt="Zdjęcie profilowe" />
                                        </div>
                                        <p><strong>Mikołaj</strong><span>Absolwent</span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Okiem</strong> kamery</h2>

                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/NjRMq4KT5XQ?si=E9XDznRunTEeDvp2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <p>Wystąpili uczestnicy i trenerzy projektu WORK-ON 6.<br><strong>Dziękujemy za współpracę.</strong></p>

                </div>

            </div>
        </div>


        {{-- Call to action --}}
        @include("includes.zapisz_sie")

    </div>

@endsection

@push('scripts')

@endpush
