@extends('layouts.app')

@section('content')
    @if (Auth::user()->restaurant()->exists('user_id') && $order->restaurant_id === Auth::user()->restaurant->id)
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <div class="card border-success container-shadow bg-forms p-3" style="width:80%;">
                        <div>Ordine eseguito il: <strong>
                                {{ $data_italiana = strftime('%d/%m/%Y', strtotime($order->created_at)) }}</strong></div>
                        <div>Alle: <strong>{{ $ora_italiana = date(' H:i', strtotime($order->created_at)) }} </strong>
                        </div>
                        <div>



                            <ul class="list-unstyled ">
                                <li> Da:<strong class="ms-4 ps-5">{{ $order->name }}</strong></li>
                                <li>email: <strong class="ms-4 ps-4">{{ $order->mail }}</strong></li>
                                <li>indirizzo: <strong class="ms-4">{{ $order->address }}</strong></li>
                                @if ($order->phone != null)
                                    <li>telefono: <strong class="ms-3">{{ $order->phone }}</strong></li>
                                @endif
                            </ul>
                        </div>
                        <div>
                            Totale:
                            <strong>
                                {{ number_format($order->price, 2, ',', '.') }}€
                            </strong>
                        </div>
                        @foreach ($dishes as $dish)
                            {{-- card head --}}
                            <div class="card-head d-flex mt-3">
                                <div class="card-head ">

                                </div>
                                <div class="col-12">
                                    <h5 class="card-title fw-bold colorgreen ">{{ $dish->name }}</h5>
                                    <p class="card-text">{{ $dish->description }}</p>
                                </div>
                            </div>

                            {{-- card body --}}
                            <div class="m-4  container-shadow ">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"> <span class="colorgreen fw-semibold">Prezzo singolo:</span>
                                        {{ number_format($dish->price, 2, ',', '.') }}
                                        €</li>
                                    <li class="list-group-item"><span class="colorgreen fw-semibold">Quantità:</span>
                                        {{ $dish->pivot->number_dishes }}
                                    </li>
                                    <li class="list-group-item"><span class="colorgreen fw-semibold">Ingredienti:</span>
                                        {{ $dish->ingredients }}</li>
                                    <li class="list-group-item"><span class="colorgreen fw-semibold">Descrizione:</span>
                                        {{ $dish->description ?? 'Descrizione non presente' }}</li>
                                    <li class="list-group-item"><span class="colorgreen fw-semibold">Totale piatto:</span>
                                        {{ number_format($dish->price * $dish->pivot->number_dishes, 2, ',', '.') }} €</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-danger text-center display-4">Il piatto che stai cercando non esiste</h2>

                </div>
            </div>
        </div>
    @endif
@endSection
