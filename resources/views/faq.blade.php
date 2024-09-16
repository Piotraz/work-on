@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">FAQ</h1>
                        <span class="sub-title text-dark"> Kandydaci najczęściej pytają o...</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li>O projekcie</li>
                            <li class="active">Faq</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col">

                    {{-- Wymagania formalne --}}
                    <h2 class="font-weight-normal text-7 my-3">Wymagania formalne</h2>
                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                        <section class="toggle">
                            <a class="toggle-title">Czy każdy może wziąć udział w projekcie?</a>
                            <div class="toggle-content">
                                <p>W projekcie mogą brać udział osoby spełniające wymagania formalne nałożone przez Unię Europejską, która finansuje całość projektu.</p>
                                <p>Do projektu możemy przyjąć:</p>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> Osoby zamieszkujące na terenie woj. kujawsko-pomorskiego w rozumieniu przepisów Kodeksu Cywilnego lub</li>
                                    <li><i class="fas fa-check"></i> pracujące na terenie woj. kujawsko-pomorskiego.</li>
                                    <li><i class="fas fa-check"></i> Osoby zatrudnione na umowę o pracę na kwotę nie przekraczającą minimalnego wynagrodzenia -  aktualnie 4300 zł brutto (bez względu na wymiar czasu pracy) lub</li>
                                    <li><i class="fas fa-check"></i> zatrudnione na umowę o pracę na czas określony nie dłuższy niż 6 miesięcy (bez względu na wysokość wynagrodzenia) lub</li>
                                    <li><i class="fas fa-check"></i> zatrudnione na umowę o pracę na czas określony, która skończy się w trakcie realizacji projektu (bez względu na wysokość wynagrodzenia) lub</li>
                                    <li><i class="fas fa-check"></i> pracujące na podstawie umowy cywilnoprawnej, np. umowy zlecenia (bez względu na wysokość wynagrodzenia).</li>
                                </ul>
                                <p>Wszystkie wymagania formalne należy spełniać w dniu podpisania umowy udziału w projekcie, więc składając Formularz zgłoszeniowy i przystępując do rekrutacji można jeszcze nie spełniać wszystkich wymagań. Warto jednak poinformować nas, że warunki zostaną spełnione w późniejszym terminie.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Pracuję i mam umowę. Czy to wystarczy, aby wziąć udział w projekcie?</a>
                            <div class="toggle-content">
                                <p>Wsparciem możemy objąć tylko osoby pracujące w trudnej sytuacji na rynku pracy.</p>
                                <p>Co to oznacza w praktyce? Spełniasz wymagania formalne jeśli posiadasz:</p>
                                <ul class="list list-icons list-icons-style-2 mb-3">
                                    <li><i class="fas fa-check"></i> umowę o pracę (może być cały etat, pół etatu) na kwotę nie przekraczającą minimalnego wynagrodzenia - aktualnie 4300 zł brutto lub</li>
                                    <li><i class="fas fa-check"></i> umowę o pracę na czas określony nie dłuższy niż 6 miesięcy (bez względu na wysokość wynagrodzenia) lub</li>
                                    <li><i class="fas fa-check"></i> umowę o pracę na czas określony, która skończy się w trakcie realizacji projektu (bez względu na wysokość wynagrodzenia) lub</li>
                                    <li><i class="fas fa-check"></i> umowę zlecenia lub umowę o dzieło (bez względu na wysokość wynagrodzenia).</li>
                                </ul>
                                <p>Wszystkie wymagania formalne należy spełniać w dniu podpisania umowy udziału w projekcie, więc składając Formularz zgłoszeniowy i przystępując do rekrutacji można jeszcze nie spełniać wszystkich wymagań. Warto jednak poinformować nas, że warunki zostaną spełnione w późniejszym terminie.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Aktualnie nie pracuję, czy mogę rekrutować?</a>
                            <div class="toggle-content">
                                <p>W projekcie WORK-ON 7, w odróżnieniu od poprzednich projektów, wsparciem możemy objąć tylko osoby pracujące w trudnej sytuacji na rynku pracy.</p>
                                <p>Jeśli jesteś osobą bezrobotną lub poszukującą pracy, to niestety nie spełniasz wymagań formalnych nałożonych przez Unię Europejską dla tego projektu.</p>
                                <p>Wymagania formalne należy jednak spełniać w dniu rozpoczęcia udziału w projekcie, więc możesz przystąpić do Rekrutacji, nawet jeśli aktualnie nie masz pracy. Może do dnia podpisania umowy udziału w projekcie znajdziesz pracę dorywczą, np. na umowę zlecenie?</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Jak udowodnić, że jestem osobą pracującą?</a>
                            <div class="toggle-content">
                                <p>Wystarczy, że dostarczysz nam ksero umowy o pracę, z której wprost wynikać będzie spełnienie warunków projektu (okres, kwota wynagrodzenia, itp.) lub ksero umowy zlecenia.</p>
                                <p>Nie wymagamy dodatkowych zaświadczeń od pracodawcy czy innych instytucji takich, jak ZUS czy Urząd Skarbowy.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Jak udowodnić, że mieszkam lub pracuję w woj. kujawsko-pomorskim?</a>
                            <div class="toggle-content">
                                <p>Wystarczy, że pokażesz nam dokument wraz z ujętym na nim adresem zamieszkania, np. umowa o pracę/zlecenie, rachunek za prąd czy internet.</p>
                                <p>Jeśli na umowie o pracę/zlecenie Twój adres zamieszkania będzie spoza kujawsko-pomorskiego, ale adres pracodawcy lub miejsce wykonywania pracy będzie mieścić się na terenie naszego województwa, wówczas też spełniasz wymiagania formalne.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Czy mogę jednocześnie studiować?</a>
                            <div class="toggle-content">
                                <p>Tak, możesz studiować dziennie lub zaocznie. Ważne jest jednak, aby móc pogodzić pracę ze studiami i z udziałem w naszym projekcie.</p>
                                <p>Oczywiście musisz spełniać wymiagania formalne dot. zamieszkania i zatrudnienia.</p>
                            </div>
                        </section>
                    </div>

                    {{-- Rekrutacja --}}
                    <h2 class="font-weight-normal text-7 my-3">Rekrutacja</h2>
                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                        <section class="toggle">
                            <a class="toggle-title">Po co ta cała rekrutacja?</a>
                            <div class="toggle-content">
                                <p>Głównym celem projektu jest poprawa sytuacji na rynku pracy Uczestników i Uczestniczek projektu, dzięki dostosowaniu ich kwalifikacji i kompetencji do potrzeb lokalnego rynku pracy oraz zdobyciu przez nich doświadczenia zawodowego.</p>
                                <p>Chcielibyśmy przede wszystkich przyjąć do projektu osoby najbardziej zmotywowane do zmiany swojej aktualnej sytuacji zawodowej, które poświęcą swój cenny czas na ciężką naukę podczas szkoleń, jak i po godzinach kursu. Szukamy osób, które zaangażują się w 100% na stażu tak, aby otrzymać ciekawą ofertę pracy.</p>
                                <p>W poprzednich latach do udziału w naszych projektach zgłaszało się dużo więcej osób, niż mogliśmy przyjąć. Aby wszyscy kandydaci mieli równe szanse, wprowadziliśmy rekrutację: testy wstępne i rozmowy kwalifikacyjne. Zauważ, że nie decyduje tutaj kolejność zgłoszeń.</p>
                                <p>Udział w projekcie trwać będzie od kilku miesięcy do ponad pół roku (w zależności od wybranej ścieżki). W tym czasie otrzymasz z funduszy unijnych wsparcie w wysokości kilkunastu tysięcy złotych. Decyzja o udziale w projekcie musi być przez Ciebie przemyślana, a my musimy sprawdzić, że stawiamy na właściwą osobę.</p>
                                <p>Ponadto mamy nadzieję, że rekrutacja pozwoli nam wykluczyć osoby, które trafią do nas jedynie po stypendium, zjeść smaczny obiad, itp.</p>
                                <p>Dostając się do projektu możesz liczyć, że znajdziesz się w grupie osób zmotywowanych, które chcą się wiele nauczyć i są skłonne do współpracy</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Czy mam obawiać się rekrutacji?</a>
                            <div class="toggle-content">
                                <p>Absolutnie nie. „Kto nie ryzykuje ten nie pije szampana”. A tak na poważnie, to warto spróbować. Warto ocenić samego siebie. Dowiedzieć się jakie ma się szanse. Nic Ciebie to nie kosztuje.</p>
                                <p>Poziom testów nie jest wysoki, bo nie chcemy oceniać wiedzy „wejściowej” kandydatów. Bardziej interesują nas predyspozycje i kompetencje. Wyjątkiem może być język angielski. Nie będziemy w stanie nauczyć Ciebie języka w 3 miesiące, a certyfikat TOEIC trzeba zdać.</p>

                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Jakie testy trzeba napisać i jak się do nich przygotować?</a>
                            <div class="toggle-content">
                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Test kompetencji społecznych i zawodowych (dla wszystkich):</li>
                                </ul>
                                <p>To jest de facto ankieta, zawierająca pytania otwarte. Chcemy Ciebie lepiej poznać i nasz doradca zawodowy po zapoznaniu się z odpowiedziami będzie miał doskonały punkt wyjścia do dalszej dyskusji, która nastąpi na Rozmowie kwalifikacyjnej.</p>
                                <p>Z pewnością warto sobie odświeżyć pamięć nt. ukończonych szkół czy kursów, zastanowić się co dzięki projektowi chce się osiągnąć. Będziemy ciekawi dlaczego interesuje Ciebie rozwój zawodowy w tym, a nie innym kierunku.</p>

                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Test wiedzy matematyczno-informatycznej (ścieżka IT):</li>
                                </ul>
                                <p>Pytania zamknięte. Test nie jest trudny i dotyczy jedynie ogólnej wiedzy informatycznej. Nie pytamy o zasady działania sieci czy znajomość języków programowania. Dodatkowo mogą pojawić się proste zadania matematyczne – wiedza na poziomie szkoły podstawowej powinna wystarczyć :) Ciekawostką na pewno mogą być jakieś łamigłówki czy zadania z logicznego myślenia. Tutaj raczej nie da się przygotować.</p>

                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Test znajomości języka angielskiego (ścieżka IT):</li>
                                </ul>
                                <p>Pytania zamknięte. Test na poziomie A2. Trochę gramatyki trzeba pamiętać, albo sobie powtórzyć.</p>

                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Test wiedzy z anatomii i fizjologii człowieka (ścieżka FIZJO):</li>
                                </ul>
                                <p>Pytania zamknięte. Test z podstawowej wiedzy z zakresu anatomii i fizjologii człowieka. Trochę teorii z anatomii warto sobie powtórzyć.</p>

                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Jak wygląda rozmowa kwalifikacyjna i jak się do niej przygotować?</a>
                            <div class="toggle-content">
                                <p>Rozmowa kwalifikacyjna to 15-to minutowe indywidualne spotkanie z koordynatorem projektu i doradcą zawodowym. Na spotkaniu poznasz wyniki swoich testów, które wspólnie omówimy.</p>
                                <p>Przygotuj i przynieś nam swoje CV, które ułatwi nam poznanie się. Podczas rozmowy musisz nas przekonać, że powinniśmy postawić właśnie na Ciebie. Przedstaw nam pomysł na siebie i na wykorzystanie szansy, którą możesz dostać przystępując do naszego projektu.</p>
                                <p>W przypadku ścieżki IT, na spotkaniu zapadnie ostateczna decyzja, do której grupy szkoleniowej zostaniesz przypisany.</p>
                                <p>Nie dowiesz się natomiast czy przyjmujemy Ciebie do projektu. Z taką informacją zadzwonimy po przeprowadzeniu rozmów z wszystkimi kandydatami i podliczeniu listy rankingowej.</p>
                            </div>
                        </section>

                    </div>

                    {{-- Szkolenia --}}
                    <h2 class="font-weight-normal text-7 my-3">Szkolenia</h2>
                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                        <section class="toggle">
                            <a class="toggle-title">Jakie szkolenie wybrać i kiedy?</a>
                            <div class="toggle-content">
                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Ścieżka IT:</li>
                                </ul>
                                <p>Weźmiesz udział w 1 z 3 szkoleń.</p>
                                <p>Z pewnością masz już swoje typy co to tematu szkolenia. Jeśli jeszcze się zastanawiasz co wybrać to my pomożemy Tobie podjąć właściwą decyzję. Zastanów się, gdzie widzisz siebie w przyszłości, na jakim stanowisku, co będziesz robić na co dzień w pracy. Nie patrz na poziom trudności kursu, ani na to co już potrafisz. Może warto wybrać szkolenie, które będzie dla Ciebie trudniejsze, ale za to później Twoja praca będzie ciekawsza?</p>
                                <p>Podczas rozmowy kwalifikacyjnej powinna zapaść ostateczna decyzja, do której grupy szkoleniowej zostaniesz przypisany. Nie będzie później możliwości zmiany.</p>

                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Ścieżka FIZJO:</li>
                                </ul>
                                <p>Weźmiesz udział we wszystkich 3 zaplanowanych szkoleniach. Nic nie wybierasz.</p>

                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Czy kurs angielskiego jest obowiązkowy?</a>
                            <div class="toggle-content">
                                <p>Tak. Każda grupa na ścieżce IT będzie miała zapewniony kurs Business English. Jest on obowiązkowy, bez względu na poziom angielskiego danego uczestnika. Kurs przygotowuje do zdania egzaminu na certyfikat TOEIC LISTENING and READING.</p>
                                <p>Na ścieżce FIZJO nie planujemy kursu Business English.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Gdzie, kiedy i w jakich godzinach odbywają się zajęcia?</a>
                            <div class="toggle-content">
                                <p>Zajęcia odbywać się będą stacjonarnie w Bydgoszczy. Dokładny adres zostanie podany bliżej daty rozpoczecia kursu.</p>
                                <p>Planujemy realizować zajęcia w tygodniu. Mamy świadomość, że udział w szkleniach trzeba pogodzić z pracą, więc zajęcia nie będa codziennie.</p>
                                <p>W przypadku IT cały blok szkoleniowy może potrwać 3 miesiące.</p>

                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Jak będą wyglądały zajęcia i kto będzie nas szkolić?</a>
                            <div class="toggle-content">
                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Ścieżka IT:</li>
                                </ul>
                                <p>Zajęcia odbywać się będą w małych grupach, średnio 10-cio osobowych. Będą to głównie warsztaty praktyczne. Każdy z uczestników będzie posiadał własne stanowisko komputerowe, aby na bieżąco wykonywać zadania omawiane przez trenerów.</p>
                                <p>Szkolenia będą prowadzone przez doświadczonych trenerów, specjalistów w swojej branży. Będą to praktycy, którzy na co dzień pracują i wykorzystują przekazywaną wiedzę w swojej pracy. Takie rozwiązanie najlepiej przygotuje naszych uczestników do późniejszej pracy na stanowiskach pokrewnych z tematem realizowanego kursu.</p>

                                <ul class="list list-icons list-icons-style-2 my-3">
                                    <li><i class="fas fa-check"></i> Ścieżka FIZJO:</li>
                                </ul>
                                <p>Zajęcia odbywać się będą w grupach 24-osobowych. Szkolenia prowadzone będą na salach wyposażonych w kozetki do masażu. Specyfika szkoleń fizjoterapeutycznych polega na pracy w parach, gdzie na zmianę jedna osoba wykonuje ćwiczenia, a druga pełni rolę pacjenta.</p>
                                <p>Szkolenia będą prowadzone przez doświadczonych trenerów, specjalistów w swojej branży.</p>

                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Czy otrzymamy stypendium szkoleniowe i ile ono wynosi?</a>
                            <div class="toggle-content">
                                <p>Stypendium szkoleniowe wypłacane jest w systemie miesięcznym na podstawie list obecności i dzienników zajęć, wyłącznie za godziny obecności na szkoleniach.</p>
                                <p>Stawka stypendium to około 100 zł za 8-godzinny dzień szkolenia. Stypendium wypłacane jest na koniec miesiąca kalendarzowego przelewem na konto bankowe.</p>
                                <p>Nie zwracamy kosztów dojazdu na szkolenia, ale otrzymane stypendium powinno umożliwić udział w szkoleniach także osobom, które muszą dojeżdżać na miejsce wsparcia z innych miejscowości. </p>

                            </div>
                        </section>
                    </div>

                    {{-- Staże --}}
                    <h2 class="font-weight-normal text-7 my-3">Staże</h2>
                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                        <section class="toggle">
                            <a class="toggle-title">Czy muszę iść na staż?</a>
                            <div class="toggle-content">
                                <p>Staż nie jest obowiązkowy. Jeśli Twoja obecna praca nie pozwala na zaangażowanie się w staż w wymiarze pełenego etatu lub po prostu nie jest on Tobie potrzebny do poprawy aktualnych warunków zatrudnienia nie musisz iść na staż.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">W jakiej formie odbywają się staże?</a>
                            <div class="toggle-content">
                                <p>Staże odbywać się będą bezpośrednio u pracodawcy w wymiarze 40 godzin tygodniowo i 8 godzin dziennie (a w przypadku stażysty będącego osobą niepełnosprawną zaliczoną do znacznego lub umiarkowanego stopnia niepełnosprawności – 7 godzin na dobę i 35 godzin tygodniowo). Tak samo jak praca na pełen etat.</p>
                                <p>Zadania w ramach stażu są wykonywane wg programu, który opracujemy wspólnie z pracodawcą. Otrzymasz również swojego opiekuna stażu, który pomoże Tobie wdrożyć się w firmie i będzie Twoim bezpośrednim przełożonym.</p>
                                <p>Staż to szansa na zdobycie lub uzupełnienie niezbędnego doświadczenia zawodowego. Dobrze wykorzystany czas na stażu to gwarancja nabycia praktycznych umiejętności w zakresie wykonywania danego zawodu.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Ile wynosi stypendium stażowe?</a>
                            <div class="toggle-content">
                                <p>Stypendium stażowe wypłacane jest na koniec miesiąca kalendarzowego na podstawie list obecności. Tak, jak na etacie, na stażu przysługują Tobie dni wolne czy L4.</p>
                                <p>Wysokość stypendium to 120% kwoty zasiłku, o którym mowa w ustawie o promocji zatrudnienia i instytucjach rynku pracy. Miesięczna stawka stypendium stażowego wynosi aktualnie około 2000,00 zł na rękę.</p>
                                <p>Nie zwracamy kosztów dojazdu na staż.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Gdzie pójdę na staż?</a>
                            <div class="toggle-content">
                                <p>Samemu musisz poszukać pracodawcy i zadecydować, gdzie chcesz odbywać staż. Naszym zadaniem jest jedynie pomoc w znalezieniu dla Ciebie odpowiedniego miejsca stażu, załatwić wszystkie formalności. Nie będziemy wysyłać Ciebie na staż „w ciemno”, do firmy z naszej bazy danych.</p>
                                <p>Dla grupy IT będziemy organizować specjalną konferencję z udziałem pracodawców, w formie targów pracy. To będzie doskonała szansa dla Ciebie na zaprezentowanie swoich kompetencji i umiejętności, poznanie rynku pracy, czy przeprowadzenie pierwszych rozmów kwalifikacyjnych. Dobrze przepracowany udział w konferencji to gwarancja stażu w wymarzonej firmie. </p>
                            </div>
                        </section>

                    </div>

                    {{-- Inne pytania --}}
                    <h2 class="font-weight-normal text-7 my-3">Inne pytania</h2>
                    <div class="toggle toggle-primary m-0" data-plugin-toggle>
                        <section class="toggle">
                            <a class="toggle-title">Jak długo trwa udział w projekcie?</a>
                            <div class="toggle-content">
                                <p>To zależy od wielu czynników.</p>
                                <p>Jeśli nie pójdziesz na staż, to może być to około 3 miesiące. Ale jeśli do tego dodamy 3-miesięczny staż i okres na znalezienie odpowiedniego miejsca stażu, ten okres wydłuży się do około 7 miesięcy.</p>
                                <p>Wiążemy się na długi okres, więc decyzja musi być przemyślana.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Ile kosztuje wzięcie udziału w projekcie?</a>
                            <div class="toggle-content">
                                <p>Tylko Twój czas poświęcony na naukę, staż i inne formy wsparcia. Nie pobieramy żadnych opłat za udział w projekcie. Wszystko finansuje Unia Europejska.</p>
                                <p>Dodatkowo za udział w szkoleniach i stażu wypłacamy stypendium.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Co z ubezpieczeniem zdrowotnym w trakcie projektu?</a>
                            <div class="toggle-content">
                                <p>Trafiając do projektu jako osoba pracująca, na pewno posiadasz ubezpieczenie zdrowotne od aktualnego pracodawcy.</p>
                                <p>Jeśli jednak Twoja umowa o pracę czy zlecenie zakończy się w trakcie trwania projektu, koniecznie nas o tym poinformuj. Wówczas my zgłosimy Ciebie do ZUS do składki zdrowotnej.</p>
                            </div>
                        </section>

                        <section class="toggle">
                            <a class="toggle-title">Czy muszę być osobą pracującą przez cały okres trwania projektu?</a>
                            <div class="toggle-content">
                                <p>Nie musisz. Wszystkie wymagania formalne, w tym dotyczące zatrudnienia, należy spełniać w dniu podpisania umowy udziału w projekcie. Później Twoja sytuacja zawodowa może się zmienić.</p>
                                <p>Wynika to również ze specyfiki grupy docelowej projektu, gdzie wsparciem możemy objąć tylko osoby pracujące w trudnej sytuacji na rynku pracy, czyli m.in. zagrożone utratą zatrudnienia (umowy na czas określony, umowy zlecenia, itp.)</p>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>

        {{-- Call to action --}}
        @include("includes.zapisz_sie")

    </div>

@endsection

@push('scripts')

@endpush
