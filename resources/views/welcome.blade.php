@extends('layouts.app')
@section('content')
    {{-- section of 'presentation' --}}
    <div class="container-fluid jumbotron-bg m-0 py-5">
        <div class="row d-flex flex-wrap ">

            <div class="col-6 px-3 ">
            </div>
            <div class="col-6 d-flex flex-wrap align-items-center px-3 fs-4 text-center">
                <div class="col-12 mb-5">
                    <h1 class="fw-bold colorgreen text-center text-shadow"> Benvenuti su Deliveboo - Il Vostro Gestionale di
                        Delivery
                        Preferito
                    </h1>
                </div>
                <div class="col-12 colorgreen mt-5 fw-semibold">
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
                    <h1 class="fw-bolder colorgreen text-center  text-shadow">Chi Siamo</h1>
                </div>
                <div
                    class="col-6 d-flex align-items-center  fs-5 fw-semibold text-center background-green text-white rounded-5 p-4 container-shadow">
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
                    <h1 class="fw-bolder red text-center  text-shadow">Cosa Offriamo</h1>
                </div>
                <div class="col-6 px-3 ">
                    <img src=" https://www.gestionalesulweb.it/img/imghome.jpg" alt="" class="w-100 my-4">
                </div>

                <div class="col-6 d-flex align-items-center px-3 fs-5 fw-semibold text-center">
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
                    <h1 class="fw-bolder colorgreen text-center text-shadow">Come Funziona</h1>
                </div>
                <div
                    class="col-6 d-flex align-items-center fs-5 fw-semibold text-center  background-green rounded-5 text-white p-4 container-shadow">
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
                    <h1 class="fw-bolder red text-center text-shadow"> La Vostra Soddisfazione è la Nostra Priorità</h1>
                </div>
                <div class="col-6 px-3 ">
                    <img src=" https://theadvisorybox.com/wp-content/uploads/2021/06/chi-siamo-foto@2x-1024x696.png"
                        alt="" class="w-100 my-4">
                </div>
                <div class="col-6 d-flex align-items-center px-3 fs-5 fw-semibold text-center ">
                    Il vostro successo è il nostro successo. Ci impegniamo a fornire un servizio clienti impeccabile, ad
                    ascoltare i vostri feedback e a lavorare costantemente per migliorare la nostra piattaforma. Siamo qui
                    per supportarvi in ogni fase del vostro percorso imprenditoriale nel settore del delivery.
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer>
        <div class="content background-green-footer">
            <svg viewBox="0 0 500 100">
                <path d="M 0 70 C 150 100 280 0 500 70 L 500 0 L 0 0" fill="rgb(255, 255, 255)"></path>
            </svg>
            <div class="row d-flex flex-wrap">
                <div class="col-12">
                    <h3 class="fw-semibold fs-3 text-white px-5 text-center text-shadow"> Grazie per aver scelto Deliveboo.
                        Siamo
                        entusiasti
                        di
                        accompagnarvi nel vostro viaggio verso il successo nel mondo del food delivery. Buon lavoro e buon
                        appetito! </h3>

                </div>

                <div class="row d-flex justify-content-between px-5">
                    {{-- contacts  --}}
                    <div class="col-4 p-4 text-white ">
                        <h5 class=" fw-bold">Contatti:</h5>

                        <div class="my-4 red-hover">
                            <i class="fa-solid fa-phone "></i> <span>+39 346 471 4065</span>
                        </div>

                        <div class="my-4 red-hover">
                            <i class="fa-solid fa-envelope  "> <span
                                    class="text-decoration-none">Deliveboo@delivery.com</span></i>
                        </div>

                        <div class="my-4">
                            <a href="" class="text-decoration-none text-white"><i
                                    class="fa-brands fa-square-facebook fa-xl me-2 red-hover"></i>
                            </a>
                            <a href="" class="text-decoration-none text-white"><i
                                    class="fa-brands fa-brands fa-instagram fa-xl me-2 red-hover"></i>
                            </a>
                            <a href="" class="text-decoration-none text-white"><i
                                    class="fa-brands fa-tiktok fa-lg me-2 red-hover"></i></a>
                            <a href="" class="text-decoration-none text-white"> <i
                                    class="fa-brands fa-square-x-twitter fa-xl me-2 red-hover"></i>
                            </a>
                            <a href="" class="text-decoration-none text-white"><i
                                    class="fa-brands fa-linkedin fa-lg me-2 red-hover"></i>
                            </a>
                        </div>
                    </div>

                    {{-- partner section --}}
                    <div class="col-4 p-4 d-flex flex-wrap text-white">
                        <div class="col-12">
                            <h5 class=" fw-bold">Alcuni dei nostri partner:</h5>
                        </div>
                        <div class="col-6">
                            <img src="https://centrolecupole.com/wp-content/uploads/2021/02/BAR_CUPOLE5.png" alt=""
                                class="w-100 bg-orange">
                        </div>
                        <div class="col-6">
                            <img src=" https://www.rundesign.it/wp-content/uploads/2023/08/kfc.jpg" alt=""
                                class="w-100 h-100">
                        </div>
                        <div class="col-6">
                            <img src=" https://img.freepik.com/premium-vector/japanese-sushi-restaurant-logo-design-inspiration_500223-504.jpg"
                                alt="" class="w-100">
                        </div>
                        <div class="col-6">
                            <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEMF73iboJ_swOO9cEnjqV7HtcqMjUNT7mKUPKpGBu_A&s"
                                alt="" class="w-100  ">
                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="text-white fw-bolder">
                    </div>

                </div>

                {{-- copyrigth section --}}
                <div class="col-12 text-white p-5">
                    © 2023 Deliveboo. Tutti i diritti riservati. Il contenuto di questo
                    sito web, compresi testi, grafica, loghi, icone, immagini, è di proprietà esclusiva
                    di Deliveboo o dei suoi fornitori di contenuti e sono protetti dalle leggi sul copyright
                    internazionale. È vietata la riproduzione, la distribuzione, la modifica o l'utilizzo non autorizzato di
                    qualsiasi parte del contenuto di questo sito, salvo previa autorizzazione scritta da parte di Deliveboo.
                    Per richieste di utilizzo o informazioni aggiuntive, si prega di contattare
                    Deliveboo@delivery.com.

                    Alcuni materiali presenti su questo sito possono essere soggetti a diritti d'autore di terze parti, e
                    l'uso non autorizzato di tali materiali può costituire una violazione dei diritti di tali terze parti.

                    Tutte le marche registrate utilizzate su questo sito sono di proprietà dei rispettivi proprietari.
                </div>
            </div>
        </div>
    </footer>
@endsection
