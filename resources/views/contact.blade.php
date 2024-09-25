@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Skontaktuj się z nami</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1 mb-3">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('home') }}">Strona główna</a></li>
                            <li class="active">Kontakt</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="mb-5">

                <div class="feature-box feature-box-style-3">
                    <div class="feature-box-icon">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-2">Zapraszamy do kontaktu</h4>
                        <p>Chętnie odpowiemy na wszelkie pytania dotyczące udziału w projekcie oraz wsparcia realizowanego z Funduszy Europejskich. Pomagamy również uzupełnić niezbędne dokumenty.</p>
                        <p class="mb-4">Jeżeli chcesz się zapisać do projektu, możesz wysłać formularz zgłoszeniowy na nasz adres mailowy lub wypełnić formularz online. Można również składać dokumenty w biurze projektu. Szczegóły w zakładce <a href="{{ route('rekrutacja') }}">Rekrutacja</a>.</p>
                    </div>
                </div>

                <div class="feature-box feature-box-style-3">
                    <div class="feature-box-icon">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-2">Osoby mające problemy z poruszaniem się</h4>
                        <p>Biuro projektu znajduje się na 3 piętrze budynku (bez windy). Zachęcamy osoby mające problemy z poruszaniem się do kontaktu z nami telefonicznie lub mailowo. Po wcześniejszym zgłoszeniu będziemy mogli umówić się na spotkanie w pomieszczeniach na parterze budynku lub w innej, dogodnej lokalizacji (np. pobliskiej kawiarnia).</p>
                        <p class="mb-4">Kontakt zdalny za pomocą komunikatorów internetowych (np. Teams, Zoom, itp.) jest bardzo wygodny i będzie traktowany na równi ze spotkaniem osobistym.</p>
                    </div>
                </div>

            </div>

            <div class="row mb-5">

                <div class="col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-plugin-options="{'accY': -200}">

                    <h4 class="pt-5">Biuro <strong>projektu</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Adres:</strong> <a href="https://maps.app.goo.gl/FxffK1gPzPAoCHwg7" target="_blank">ul. Piotrowskiego 11/36, 85-098 Bydgoszcz</a></li>
                        <li><i class="fas fa-phone top-6"></i> <strong>Telefon:</strong> <a href="tel:+48509705517">(+48) 509 705 517</a></li>
                        <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:projekt@work-on.pl">projekt@work-on.pl</a></li>
                    </ul>

                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}">

                    <h4 class="pt-5">Godziny pracy <strong>biura</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Poniedziałek - Piątek - 9:00 - 15:00</li>
                        <li><i class="far fa-clock top-6"></i> Sobota - nieczynne</li>
                        <li><i class="far fa-clock top-6"></i> Niedziela i Święta - nieczynne</li>
                    </ul>

                </div>
            </div>

        </div>

        {{-- Call to action FAQ --}}
        @include("includes.call_to_faq")

    </div>

@endsection

@push('scripts')

@endpush
