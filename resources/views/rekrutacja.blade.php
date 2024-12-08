@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Rekrutacja</h1>
                        <span class="sub-title text-dark"> Zapisz się do udziału w projekcie</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li class="active">Rekrutacja</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col">

                    {{-- <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                    <span>Etapy</span>
                                    <span class="word-rotator-words bg-primary">
                                        <b class="is-visible">rekrutacyjne</b>
                                    </span>
                                </h1>
                            </div>
                        </div>
                    </div> --}}

                    <div class="process process-vertical">
                        {{-- 1 --}}
                        <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">1</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-3 text-4-5 font-weight-bold">Kryteria formalne</h4>
                                <p>Dokładnie zapoznaj się z <a href="documents/regulamin_workon7.pdf" target="_blank">Regulaminem projektu</a>, w którym szczegółowo opisane są warunki rekrutacji oraz możliwości, jakie daje udział w projekcie WORK-ON. Dokładnie opisano też grupę docelową osób, które mogą wziąć udział w projekcie, a także punktację przy rekrutacji.</p>
                                <h4 class="font-weight-bold text-4"> Kto może wziąć udział w projekcie:</h4>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> Osoby mieszkające w <strong>woj. kujawsko-pomorskim</strong> w rozumieniu przepisów Kodeksu Cywilnego lub</li>
                                    <li><i class="fas fa-check"></i> pracujące na terenie woj. kujawsko-pomorskiego.</li>
                                    <li><i class="fas fa-check"></i> <strong>Osoby zatrudnione</strong> na umowę o pracę na kwotę nie przekraczającą minimalnego wynagrodzenia - aktualnie 4300 zł brutto (bez względu na wymiar czasu pracy) lub</li>
                                    <li><i class="fas fa-check"></i> zatrudnione na umowę o pracę na czas określony nie dłuższy niż 6 miesięcy (bez względu na wysokość wynagrodzenia) lub</li>
                                    <li><i class="fas fa-check"></i> zatrudnione na umowę o pracę na czas określony, która skończy się w trakcie realizacji projektu (bez względu na wysokość wynagrodzenia) lub</li>
                                    <li><i class="fas fa-check"></i> pracujące na podstawie umowy cywilnoprawnej, np. umowy zlecenia (bez względu na wysokość wynagrodzenia).</li>
                                </ul>
                                <p class="mb-4"><strong>Wszystkie kryteria będą weryfikowane na dzień rozpoczęcia udziału w projekcie na podstawie przedtawionych dokumentów.</strong></p>
                                <a href="documents/regulamin_workon7.pdf" target="_blank" class="btn btn-modern btn-primary btn-outline">Regulamin projektu  <i class="fa-solid fa-cloud-arrow-down"></i></a>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">2</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-3 text-4-5 font-weight-bold">Formularz zgłoszeniowy</h4>

                                <p>Możesz pobrać <a href="#" target="_blank">Formularz w postaci pliku PDF</a>, a następnie uzupełnić go ręcznie. Dostarczysz go do nas:</h4>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> osobiście do Biura projektu (chętnie pomożemy w uzupełnieniu)</li>
                                    <li><i class="fas fa-check"></i> pocztą lub kurierem na adres Biura projektu (decyduje data wpływu)</li>
                                    <li><i class="fas fa-check"></i> mailem na adres: <a href="mailto:projekt@work-on.pl">projekt@work-on.pl</a></li>
                                </ul>

                                <p><strong>Możesz też wypełnić <a href="#" target="_blank">Elektroniczny formularz zgłoszeniowy online</a>.</strong></p>

                                <h4 class="font-weight-bold text-4">Terminy przyjmowania zgłoszeń:</h4>
                                <ul class="list list-icons list-icons-style-2 mb-4">
                                    <li><i class="fas fa-check"></i> Ścieżka IT edycja 1 (30 osób) - <strong><del>do 17 października 2024 roku</del></strong></li>
                                    <li><i class="fas fa-check"></i> Ścieżka FIZJO edycja 1 (24 osoby)- <strong>do 31 grudnia 2024 roku</strong></li>
                                    <li><i class="fas fa-check"></i> Ścieżka IT edycja 2 (30 osób) - <strong>rok 2025 (szczegóły wkrótce)</strong></li>
                                    <li><i class="fas fa-check"></i> Ścieżka FIZJO edycja 2 (24 osoby)- <strong>rok 2025 (szczegóły wkrótce)</strong></li>

                                </ul>
                                <a href="documents/formularz_zgloszeniowy_workon7.pdf" target="_blank" class="btn btn-modern btn-primary btn-outline mb-3">Formularz zgłoszeniowy PDF  <i class="fa-solid fa-cloud-arrow-down ms-1"></i></a>
                                <a href="https://forms.gle/fHNVESxRsPtXLZuBA" target="_blank" class="btn btn-modern btn-primary btn-outline mb-3">Formularz zgłoszeniowy ONLINE <i class="fas fa-external-link-alt ms-1"></i></a>

                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">3</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-3 text-4-5 font-weight-bold">Testy wstępne</h4>
                                <p>Aby efektywnie uczestniczyć w projekcie należy posiadać na wstępie określoną wiedzę. Dla osób kandydujących do grupy IT istotna jest podstawowa wiedza techniczna (matematyka, informatyka) oraz znajomość j. angielskiego (min. A2), a dla grupy FIZJO wiedza z zakresu anatomii i fizjologii człowieka.</p>
                                <h4 class="font-weight-bold text-4">Ścieżka IT</h4>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> test kompetencji społecznych i zawodowych</li>
                                    <li><i class="fas fa-check"></i> test wiedzy matematyczno-informatycznej (ścieżka IT)</li>
                                    <li><i class="fas fa-check"></i> test znajomości języka angielskiego (ścieżka IT)</li>
                                </ul>

                                <h4 class="font-weight-bold text-4">Ścieżka FIZJO</h4>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> test kompetencji społecznych i zawodowych</li>
                                    <li><i class="fas fa-check"></i> test wiedzy z anatomii i fizjologii człowieka (ścieżka FIZJO)</li>
                                </ul>
                                {{-- <p class="mb-4">Testy zostaną przeprowadzone on-line. Na podany adres e-mail wyślemy Tobie dokładną datę, godzinę oraz link do spotkania.</p> --}}
                            </div>
                        </div>
                        {{-- 4 --}}
                        <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">4</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-3 text-4-5 font-weight-bold">Rozmowa kwalifikacyjna</h4>
                                <p>Zaprosimy Ciebie na krótką Rozmowę kwalifikacyjną, aby lepiej się poznać. Chcemy dowiedzieć się jaka jest Twoja motywacja do udziału w projekcie, jakie masz predyspozycje zawodowe.</p>
                                <h4 class="font-weight-bold text-4"> Na rozmowie kwalifikacyjnej:</h4>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> Poznasz wyniki swoich Testów wstępnych.</li>
                                    <li><i class="fas fa-check"></i> Przekonasz nas, że jesteś osobą, której możemy faktycznie pomóc.</li>
                                    <li><i class="fas fa-check"></i> Podejmiemy wspólnie decyzję o wyborze odpowiedniego szkolenia zawodowego dla Ciebie (ścieżka IT)</li>

                                </ul>
                                {{-- <p class="mb-4">Preferujemy kontakt osobisty, ale w uzasadnionych przypadkach, rozmowa kwalifikacyjna będzie mogła odbyć się zdalnie.</p> --}}
                            </div>
                        </div>
                         {{-- 5 --}}
                         <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">5</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-3 text-4-5 font-weight-bold">Podpisanie umowy</h4>
                                <p>Osoby spełniające wszystkie wymagania formalne z najwyższą liczbą punktów z rekrutacji zostaną przyjęte do udziału w projekcie.</p>

                                <h4 class="font-weight-bold text-4"> Do podpisania umowy potrzebować będziemy:</h4>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> Dowód osobisty lub inny dokument potwierdzający dane osobowe (do wglądu)</li>
                                    <li><i class="fas fa-check"></i> Dokument wraz z ujętym na nim adresem zamieszkania, np. umowa o pracę/zlecenie, rachunek za prąd czy internet (do wglądu)</li>
                                    <li><i class="fas fa-check"></i> Ksero umowy o pracę, z której wprost wynikać będzie spełnienie warunków projektu lub ksero umowy zlecenia.</li>

                                </ul>
                                <p class="mb-4"><strong>Udział w projekcie trwać będzie od kilku miesięcy do ponad pół roku (w zależności od wybranej ścieżki). W tym czasie otrzymasz z funduszy unijnych wsparcie w wysokości kilkunastu tysięcy złotych. Decyzja o udziale w projekcie musi być przez Ciebie przemyślana, a dla nas zabezpieczona w formie umowy.</strong></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Call to action FAQ --}}
        @include("includes.call_to_faq")

    </div>

@endsection

@push('scripts')

@endpush
