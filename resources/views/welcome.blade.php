@extends('layouts.app')
@section('content')
    {{-- section of 'presentation' --}}
    <div class="container-fluid jumbotron-bg m-0 py-5">
        <div class="row d-flex flex-wrap ">

            <div class="col-6 px-3 ">
            </div>
            <div class="col-6 d-flex flex-wrap align-items-center px-3 fs-4 fw-bold text-center">
                <div class="col-12 mb-5">
                    <h1 class="fw-bolder colorgreen text-center"> Benvenuti su Deliveboo - Il Vostro Gestionale di Delivery
                        Preferito
                    </h1>
                </div>
                <div class="col-12 colorgreen mt-5">
                    Ciao e benvenuti nel mondo di Deliveboo! Siamo lieti di darvi il benvenuto
                    nella nostra piattaforma di gestione di delivery, progettata per semplificare
                    e ottimizzare il vostro business culinario.
                </div>
                <div class="col-12">
                    <img src=" {{ url('img/d-logo-deliveboo-bgremoved.png') }}" alt="" class="w-25 my-4">
                </div>
            </div>
        </div>
    </div>

    <div class="p-5   rounded-3">
        <div class="container py-3">
            {{-- about us section --}}
            <div class="row d-flex flex-wrap  rounded-4 mb-5">
                <div class="col-12 mb-4">
                    <h1 class="fw-bolder colorgreen text-center">Chi Siamo</h1>
                </div>
                <div
                    class="col-6 d-flex align-items-center px-3 fs-4 fw-semibold text-center background-green text-white rounded-5 p-2">
                    Deliveboo è nato con l'obiettivo di fornire agli operatori nel settore del food
                    delivery uno strumento potente e intuitivo per gestire e far crescere le loro attività.
                    Con anni di esperienza nel settore e una passione per l'innovazione, ci impegniamo a fornire
                    soluzioni che soddisfino le esigenze specifiche dei nostri clienti.
                </div>
                <div class="col-6 px-3 ">
                    <img src="https://creare-sito-web-gratis.it/wp-content/uploads/2021/05/pagina-chi-siamo-1024x480.png"
                        alt="" class="w-100 my-4">
                </div>
            </div>
            <hr>

            {{-- section what we offer --}}
            <div class="row d-flex flex-wrap  mt-5 mb-4">
                <div class="col-12 mb-4">
                    <h1 class="fw-bolder text-danger text-center">Cosa Offriamo</h1>
                </div>
                <div class="col-6 px-3 ">
                    <img src=" https://www.gestionalesulweb.it/img/imghome.jpg" alt="" class="w-100 my-4">
                </div>

                <div class="col-6 d-flex align-items-center px-3 fs-4 fw-semibold text-center">
                    La nostra piattaforma offre una vasta gamma di funzionalità progettate per semplificare
                    ogni aspetto del vostro servizio di consegna. Dal gestire gli ordini in arrivo alla
                    gestione del menu, dall'ottimizzazione delle consegne alla gestione dei pagamenti,
                    Deliveboo è qui per aiutarvi a fare il passo successivo nel vostro business di delivery.
                </div>
            </div>
            <hr>

            {{-- How It Works section: --}}
            <div class="row d-flex flex-wrap mt-5 mb-5">
                <div class="col-12 mb-4">
                    <h1 class="fw-bolder colorgreen text-center">Come Funziona</h1>
                </div>
                <div
                    class="col-6 d-flex align-items-center px-3 fs-4 fw-semibold text-center  background-green rounded-5 text-white p-2">
                    Con Deliveboo, gestire il vostro delivery non è mai stato così facile. La nostra interfaccia utente
                    intuitiva vi permette di monitorare gli ordini in tempo reale, gestire il menu con facilità e
                    coordinarele
                    consegne con precisione. Che siate un piccolo ristorante locale o una catena di consegna a domicilio in
                    crescita, Deliveboo è la soluzione su misura per voi.
                </div>
                <div class="col-6 px-3 ">
                    <img src=" https://www.pianooperativosicurezza.com/immagini_pagine/18-06-2018/1529318066-81-.gif"
                        alt="" class="w-100 my-4">
                </div>
            </div>
            <hr>



            {{-- section Your Satisfaction is Our Priority: --}}
            <div class="row d-flex flex-wrap  mt-5 ">
                <div class="col-12 mb-4">
                    <h1 class="fw-bolder text-danger text-center"> La Vostra Soddisfazione è la Nostra Priorità</h1>
                </div>
                <div class="col-6 px-3 ">
                    <img src=" https://theadvisorybox.com/wp-content/uploads/2021/06/chi-siamo-foto@2x-1024x696.png"
                        alt="" class="w-100 my-4">
                </div>
                <div class="col-6 d-flex align-items-center px-3 fs-4 fw-semibold text-center ">
                    Il vostro successo è il nostro successo. Ci impegniamo a fornire un servizio clienti impeccabile, ad
                    ascoltare i vostri feedback e a lavorare costantemente per migliorare la nostra piattaforma. Siamo qui
                    per supportarvi in ogni fase del vostro percorso imprenditoriale nel settore del delivery.
                </div>
            </div>
        </div>
    </div>

    <div class="content background-green">
        <svg viewBox="0 0 500 100">
            <path d="M 0 70 C 150 100 280 0 500 70 L 500 0 L 0 0" fill="rgb(255, 255, 255)"></path>
        </svg>
        <div class="row d-flex flex-wrap">
            <div class="col-12">
                <h3 class="fw-semibold fs-3 text-white px-5 text-center"> Grazie per aver scelto Deliveboo. Siamo
                    entusiasti
                    di
                    accompagnarvi nel vostro viaggio verso il successo nel mondo del food delivery. Buon lavoro e buon
                    appetito! </h3>
                <div class="col-12">
                    <hr class="text-white fw-semibold">
                </div>

            </div>
        </div>
    </div>
@endsection
