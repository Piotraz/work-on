@extends('layouts.app')

@section('content')

    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Skontaktuj się z nami</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
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

                <div class="overflow-hidden mb-3">
                    <h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" data-plugin-options="{'accY': -200}">Zapraszamy do <strong>kontaktu</strong></h4>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400" data-plugin-options="{'accY': -200}">
                        Chętnie odpowiemy na wszelkie pytania dotyczące udziału w projekcie oraz wsparcia realizowanego z Funduszy Europejskich. Pomagamy również uzupełnić niezbędne dokumenty.
                    </p>
                </div>
                <div class="overflow-hidden">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600" data-plugin-options="{'accY': -200}">
                        Jeżeli chcesz się zapisać do projektu, możesz wysłać formularz aplikacyjny na nasz adres mailowy lub wypełnić formularz online. Można również składać dokumenty w biurze projektu. Szczegóły w dziale <a href="">rekrutacja</a>.
                    </p>
                </div>

            </div>

            <div class="row mb-5">

                <div class="col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

                    <h4 class="pt-5">Biuro <strong>projektu</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Adres:</strong> ul. Piotrowskiego 11/36, 85-098 Bydgoszcz</li>
                        <li><i class="fas fa-phone top-6"></i> <strong>Telefon:</strong> <a href="tel:+48509705517">(+48) 509 705 517</a></li>
                        <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:projekt@osw.bydgoszcz.pl">projekt@osw.bydgoszcz.pl</a></li>
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


    </div>

@endsection

@push('scripts')

@endpush
